@extends('layouts.dash')

@section('content')
<section>
    <header class=" border-b-2 mb-3">
        <h1 class="text-xl font-poppins font-semibold p-5">Activity Logs</h1>
    </header>
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
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white even:bg-gray-50 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        JenxGrim
                    </th>
                    <td class="px-6 py-4">
                        Admin
                    </td>
                    <td class="px-6 py-4">
                        Ngocok
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 hover:underline">Demote?</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </section>
@endsection