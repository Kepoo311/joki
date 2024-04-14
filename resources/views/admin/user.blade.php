@extends('layouts.dash')

@section('content')
    
    {{-- @include('admin.popup') --}}

    <header class=" border-b-2 mb-3">
        <h1 class="text-xl font-poppins font-semibold p-5">User Data</h1>
    </header>
    <div class="relative overflow-x-auto shadow-md">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Fullname
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Whatsapp
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="odd:bg-white even:bg-gray-50 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $user->fullname }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $user->username }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->email }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->noTelpon }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $user->getRoleNames() }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="/admin/promote?id={{$user->id}}&role=admin" class="font-medium text-blue-600 hover:underline">Admin</a>
                            |
                            <a href="/admin/promote?id={{$user->id}}&role=worker" class="font-medium text-blue-600 hover:underline">Worker</a>
                            |
                            <a href="/admin/demote?id={{$user->id}}" class="font-medium text-red-600 hover:underline">Demote!</a>
                        </td>
                    </tr>
                    <section>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>
@endsection
