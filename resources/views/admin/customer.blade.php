@extends('layouts.dash')

@section('content')
<section>
    <header class=" border-b-2 mb-3">
        <h1 class="text-xl font-poppins font-semibold p-5">Customer Order</h1>
    </header>
    <div class="relative overflow-x-auto shadow-md">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nickname
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
                @foreach ($customer as $cust)
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        {{$cust->nickname}}
                    </th>
                    <td class="px-6 py-4">
                        {{$cust->rank}}
                    </td>
                    <td class="px-6 py-4">
                        {{$cust->pesan}}
                    </td>
                    <td class="px-6 py-4">
                        {{$cust->status}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="/admin/detailorder?id={{$cust->id}}&status={{$cust->status}}" class="font-medium text-blue-600 hover:underline">Detail Order</a>
                        |
                        <a href="/admin/takeorder/{{$cust->id}}" class="font-medium text-blue-600 hover:underline">Take Order</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>
@endsection