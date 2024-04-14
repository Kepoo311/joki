@extends('layouts.dash')

@section('content')
    <section>
        <header class=" border-b-2">
            <h1 class="text-xl font-poppins font-semibold p-5">{{$user->fullname}}</h1>
        </header>

        <div id="chat" class="flex flex-col overflow-auto h-[68vh] w-full">
            @foreach ($chats as $chat)
            @if($chat->from_user_id == $user->id && $chat->to_user_id == 999)
            <div class="bg-slate-500 m-2 w-fit h-fit rounded-lg max-w-72 overflow-x-clip">
                <p class="p-2 text-white font-poppins max-w-72">{{$chat->message}}</p>
            </div>
            @endif
            @if($chat->from_user_id == 999 && $chat->to_user_id == $user->id)
            <div class="bg-blue-500 m-2 w-fit h-fit rounded-lg self-end max-w-72 overflow-x-clip">
                <p class="p-2 text-white font-poppins max-w-72">{{$chat->message}}</p>
            </div>
            @endif
            @endforeach
        </div>
        <div class="fixed bottom-0 w-full mb-2">
            <form action="/admin/kirimpesan" method="POST">
                @csrf
            <input type="hidden" name="to_user_id" value="{{$user->id}}">
            <input name="message" class="mx-2 w-[74%] rounded-lg" type="text">
            <button type="submit" class="bg-blue-300 py-2 px-5 rounded-lg shadow-xl hover:bg-blue-400"><i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </section>

@endsection