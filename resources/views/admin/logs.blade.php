@extends('layouts.dash')

@section('content')
@if (session()->has('success'))
<div class="absolute flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-300" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div>
      <span class="font-medium">Success!</span> {{session('success')}}
    </div>
  </div>
@endif
<section>
    <header class=" border-b-2">
        <h1 class="text-xl font-poppins font-semibold p-5">Activity Logs</h1>
    </header>

    <form action="/dashboard/clearlogs" method="POST">
        @csrf
    <button type="submit" onclick="return confirm('Yakin mau hapus?')" class="p-2 m-1 bg-red-500 rounded-md text-md font-poppins shadow-md hover:bg-red-600">Clear Logs</button>
    </form>

    <div class="relative overflow-x-auto shadow-md">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Activity
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($logs as $log)
                    
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$log->username}}
                    </th>
                    <td class="px-6 py-4">
                        {{$log->role}}
                    </td>
                    <td class="px-6 py-4">
                        {{$log->activity}}
                    </td>
                    <td class="px-6 py-4">
                        {{$log->created_at->diffForHumans()}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/admin/demote?id={{$log->userid}}" class="font-medium text-blue-600 hover:underline">Demote?</a>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
    {{$logs->links()}}
    </section>
@endsection