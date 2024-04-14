@extends('layouts.dash')

@section('content')
<section>
    @if (session()->has('SuccesTakeOrder'))
<div class="absolute flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-300" role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <span class="sr-only">Info</span>
    <div>
      <span class="font-medium">Success!</span> {{session('SuccesTakeOrder')}}
    </div>
  </div>
@endif
    <header class=" border-b-2 mb-3">
        <h1 class="text-xl font-poppins font-semibold p-5">Ongoing Order</h1>
    </header>
    <div class="relative overflow-x-auto shadow-md">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Username
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Order
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pesan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderan as $order)
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$order->nickname}}
                    </th>
                    <td class="px-6 py-4">
                        {{$order->rank}}
                    </td>
                    <td class="px-6 py-4">
                        {{$order->pesan}}
                    </td>
                    <td class="px-6 py-4">
                        {{$order->status}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/admin/detailorder?id={{$order->id}}&status={{$order->status}}" class="font-medium text-blue-600 hover:underline">Detail Order</a>
                        |
                        <a href="/admin/doneOrder/{{$order->id}}" class="font-medium text-blue-600 hover:underline">Selesai</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>
@endsection