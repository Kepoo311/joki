@extends('layouts.dash')

@section('content')
<section>
    <header class=" border-b-2 mb-3">
        <h1 class="text-xl font-poppins font-semibold p-5">Support</h1>
    </header>
    <div class="relative overflow-x-auto shadow-md">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Fullname
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Last Msg
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chats as $chat)
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$chat->user->fullname}}
                    </th>
                    <td class="px-6 py-4">
                        {{Str::limit($chat->message,20,' (...)')}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/admin/chat/{{$chat->user->id}}" class="font-medium text-blue-600 hover:underline">Chat</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>
@endsection