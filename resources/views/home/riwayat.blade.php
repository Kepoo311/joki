@extends('layouts.main')

@section('content')
@if (session()->has('orderGG'))
<div class="absolute flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-300" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div>
      <span class="font-medium">Success!</span> {{session('orderGG')}}
    </div>
  </div>
@endif
<section class="min-h-screen bg-[#0e1f34]">
    <header class=" border-b-2 border-blue-800 mb-3">
        <h1 class="text-xl text-white font-poppins font-semibold p-5">Riwayat transaksi</h1>
    </header>
    
    <div class="overflow-x-auto shadow-md">
        <table class="w-full text-sm text-left rtl:text-right text-gray-800">
            <thead class="text-xs text-white uppercase bg-[#142f4d]">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Order
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($riwayat as $item)
                <tr class="odd:bg-[#0e1f34] even:bg-[#1b2b3d] text-white border-blue-800 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-300 whitespace-nowrap">
                        {{$item->nickname}}
                    </th>
                    <td class="px-6 py-4">
                        {{$item->rank}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->status}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$riwayat->links()}}
</section>
@endsection