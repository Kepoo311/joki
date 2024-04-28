<?php

namespace App\Http\Controllers;

use App\Models\Logging;
use App\Models\Order;
use App\Models\RiviewAuth;
use Illuminate\Http\Request;
use Spatie\DiscordAlerts\Facades\DiscordAlert;

class OrderController extends Controller
{
    public function order(Request $request)
    {
        $validate = $request->validate([
            'nickname' => ['required'],
            'product_id' => ['required'],
            'logVia' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'reqHero' => ['required'],
            'pesan' => ['required'],
            'paket-joki' => ['required'],
            'payment' => ['required'],
            'noTelpon' => ['required'],
        ]);

        $ledak = explode(',', $validate["paket-joki"]);
        $validate["harga"] = $ledak[0];
        $validate["rank"] = $ledak[1];

        if (auth()->user()) {
            $validate['customer_id'] = auth()->user()->id;
        }

        DiscordAlert::message("@everyone Ada orderan joki baru!!", [
            [
                'title' => 'Detail orderan',
                'description' => "
                    Info lebih detail silahkan take order di website!!
                ",
                'fields' => [
                    [
                        "name" => "Nickname :",
                        "value" => "$validate[nickname]"
                    ],
                    [
                        "name" => "Paket joki :",
                        "value" => "$validate[rank]"
                    ],
                    [
                        "name" => "Req Hero :",
                        "value" => "$validate[reqHero]"
                    ],
                    [
                        "name" => "Pesan :",
                        "value" => "$validate[pesan]"
                    ],
                    [
                        "name" => "Harga :",
                        "value" => "Rp " . number_format($validate['harga'], 0, ',', '.'),
                    ]
                ],
                'color' => '#6495ED',
                'author' => [
                    'name' => 'Joki Arceus Website',
                    'url' => 'https://www.joki.k4project.online/',
                    'icon_url' => 'https://cdn.discordapp.com/attachments/1233804896239620096/1234159561351495732/20240110_085428.png?ex=662fb829&is=662e66a9&hm=3bd7ef7eaee42ca8248b81305de2dc24d8201235fcd832938d7f5992e4d070b5&'
                ],
                'image' => [
                    'url' => "https://cdn.discordapp.com/attachments/1233804896239620096/1234159561754021898/standard.gif?ex=662fb829&is=662e66a9&hm=a5cdc833022667a8efa9256d222d86e3f7c913c64ad09255dd2d9a64255f3525&",
                ],
            ]
        ]);

        Order::create($validate);
        return redirect('/')->with('orderGG', 'GELOOOOO');
    }
}
