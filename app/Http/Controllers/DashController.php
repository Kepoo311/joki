<?php

namespace App\Http\Controllers;

use App\Models\chat;
use App\Models\LastMsg;
use App\Models\Logging;
use App\Models\ongoing;
use App\Models\Order;
use App\Models\orderDone;
use App\Models\RiviewAuth;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPMailer\PHPMailer\PHPMailer;
use Response;

use Illuminate\Support\Str;

class DashController extends Controller
{

    public function index()
    {
        if (auth()->user()->hasAnyRole(["admin", "worker"])) {
            $prices = orderDone::all();
            $total = 0;
            foreach ($prices as $price) {
                $total += $price->harga;
            }

            Logging::create([
                "userid" => auth()->user()->id,
                "username" => auth()->user()->username,
                "role" => auth()->user()->getRoleNames(),
                "activity" => "Melihat dashboard"
            ]);
            return view("admin.index", [
                "title" => "Welcome to Dashboard",
                "totalEarn" => $total,
                "ongoOrders" => ongoing::count(),
                "pendingOrders" => Order::count(),
                "orderDones" => orderDone::count()
            ]);
        }

        return redirect('user/dash');
    }
    public function showUser()
    {
        return view("admin.user", [
            "title" => "User Dashboard",
            "users" => User::all()
        ]);
    }

    public function promote(Request $request)
    {
        $id = $request->id;
        $role = $request->role;
        $user = User::find($id);
        $oldRole = $user->getRoleNames();
        Logging::create([
            "userid" => auth()->user()->id,
            "username" => auth()->user()->username,
            "role" => auth()->user()->getRoleNames(),
            "activity" => "Menaikkan role '$user->username' Ke Role '$role' Dari role $oldRole",
        ]);

        $user->syncRoles(["$role"]);

        return redirect('/admin/user')->with('promote_succes', 'promote bro');
    }
    public function demote(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $oldRole = $user->getRoleNames();

        Logging::create([
            "userid" => auth()->user()->id,
            "username" => auth()->user()->username,
            "role" => auth()->user()->getRoleNames(),
            "activity" => "Menurunkan role '$user->username' Ke Role 'user' Dari role $oldRole",
        ]);

        $user->syncRoles(['user']);

        return redirect('/admin/user')->with('demote_succes', 'demote bro');
    }


    public function showLogs()
    {
        return view('admin.logs', [
            "title" => "Logs Dashboard",
            "logs" => Logging::latest()->paginate(10)
        ]);
    }

    public function ClearLogs()
    {
        if (Auth::user()->hasRole(["admin"])) {
            Logging::truncate();
            return back()->with("success", "Berhasil Membersihkan Logs");
        }

        return abort(403, "Anda Tidak Memiliki Akses Untuk Melakukan Aksi Ini");
    }

    public function showCust()
    {
        return view('admin.customer', [
            "title" => "Our customer",
            "customer" => Order::all()
        ]);
    }

    public function showOngo()
    {
        $userid = Auth::user()->id;
        return view("admin.ongoing", [
            "title" => "Ongoing order",
            "orderan" => ongoing::where("user_id", "=", $userid)->get()
        ]);
    }

    public function showComplete()
    {
        $userid = Auth::user()->id;
        return view("admin.order_done", [
            "title" => "Order Completed",
            "orderan" => orderDone::where("user_id", "=", $userid)->get()
        ]);
    }

    public function showDetail(Request $request)
    {
        $id = $request->id;
        $status = $request->status;

        if ($status == "Pending") {
            $orderan = Order::findOrFail($id);
        } elseif ($status == "On-Going") {
            $orderan = ongoing::findOrFail($id);
        } elseif ($status == "DONE") {
            $orderan = orderDone::findOrFail($id);
        }


        return view("admin.detailorder", [
            'title' => 'Detail of Order',
            'orderan' => $orderan
        ]);
    }

    public function takeOrder(Order $orderan)
    {
        ongoing::create([
            'user_id' => Auth::user()->id,
            'customer_id' => $orderan->customer_id,
            'product_id' => $orderan->product_id,
            'nickname' => $orderan->nickname,
            'logVia' => $orderan->logVia,
            'email' => $orderan->email,
            'password' => $orderan->password,
            'reqHero' => $orderan->reqHero,
            'pesan' => $orderan->pesan,
            'paket-joki' => $orderan->rank,
            'rank' => $orderan->rank,
            'harga' => $orderan->harga,
            'payment' => $orderan->payment,
            'noTelpon' => $orderan->noTelpon,
            'status' => "On-Going"
        ]);
        Logging::create([
            "userid" => auth()->user()->id,
            "username" => auth()->user()->username,
            "role" => auth()->user()->getRoleNames(),
            "activity" => "Mengambil Order Dari : $orderan->nickname",
        ]);
        Order::destroy($orderan->id);

        return redirect('/admin/ongoing')->with('SuccesTakeOrder', "ORDERAN SUCCES DI AMBIL COY");
    }
    public function doneOrder(ongoing $orderan)
    {
        orderDone::create([
            'user_id' => Auth::user()->id,
            'customer_id' => $orderan->customer_id,
            'product_id' => $orderan->product_id,
            'nickname' => $orderan->nickname,
            'logVia' => $orderan->logVia,
            'email' => $orderan->email,
            'password' => $orderan->password,
            'reqHero' => $orderan->reqHero,
            'pesan' => $orderan->pesan,
            'paket-joki' => $orderan->rank,
            'rank' => $orderan->rank,
            'harga' => $orderan->harga,
            'payment' => $orderan->payment,
            'noTelpon' => $orderan->noTelpon,
            'status' => "DONE"
        ]);
 
        if (!is_null($orderan->customer_id)) {
            RiviewAuth::create([
                "user_id" => $orderan->customer_id,
                "product_id" => $orderan->product_id,
                "rank" => $orderan->rank,
                "token" => Str::random(15),
            ]);
        }

        Logging::create([
            "userid" => auth()->user()->id,
            "username" => auth()->user()->username,
            "role" => auth()->user()->getRoleNames(),
            "activity" => "Menyelesaikan Order Dari : $orderan->nickname",
        ]);

        ongoing::destroy($orderan->id);

        return redirect('/admin/order_complete')->with('SuccesComplete', "ORDERAN SUCCES DI SELESAIKAN COY");
    }

    public function showSupport()
    {
        return view("admin.support", [
            "title" => "Support Center",
            "chats" => LastMsg::all()
        ]);
    }

    public function showPesan(User $info)
    {
        return view('admin.chat', [
            'title' => 'Customer Chat',
            'user' => $info,
            'chats' => chat::all()
        ]);
    }
    public function kirimpesan(Request $request)
    {
        $id = $request->to_user_id;
        $validasi = $request->validate([
            "message" => ['required'],
            "to_user_id" => ['required']
        ]);

        $validasi['from_user_id'] = 999;

        chat::create($validasi);

        LastMsg::updateOrCreate(
            [
                'user_id' => $request->to_user_id,
            ],
            [
                'message' => $request->message
            ]
        );

        return redirect("/admin/chat/$id");
    }


}