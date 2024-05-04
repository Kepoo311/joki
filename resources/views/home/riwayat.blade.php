@extends('layouts.main')

@section('content')
    @if (session()->has('orderGG'))
        <div class="absolute flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-300" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Success!</span> {{ session('orderGG') }}
            </div>
        </div>
    @endif
    <section class="min-h-screen bg-[#0e1f34]">
        <header class=" border-b-2 border-blue-800 mb-3">
            <h1 class="text-xl text-white font-poppins font-semibold p-5">Riwayat transaksi</h1>
        </header>
        <label class="ml-5 block text-white font-poppins font-semibold text-md" for="RWS">Cari transaksi dengan nomor telpon
            :</label>
           <div class="flex m-5">
               <input type="text" id="RWS" name="RWS"
               class="border text-sm rounded-lg w-56 p-2.5  bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
               placeholder="Nomor Telepon">
               <a class="flex w-24 justify-center items-center mx-2 rounded-lg h-10 bg-blue-500 text-white text-md font-medium font-poppins hover:bg-blue-600" href="/riwayat">Reset</a>
            </div>
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
                <tbody id='riwayatTB'>
                    @foreach ($riwayat as $item)
                        <tr class="odd:bg-[#0e1f34] even:bg-[#1b2b3d] text-white border-blue-800 border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-300 whitespace-nowrap">
                                {{ $item->nickname }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->rank }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->status }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div id="nodata" class="flex justify-center w-full">
            </div>
        </div>
    </section>

    <script>
        $('#RWS').on('keyup', () => {
            let RWS = $('#RWS').val()
            $.ajax({
                url: '/SRW',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    notelp: RWS
                },
                dataType: "json",
                success: function(res) {
                    console.log(res.length)
                    if (res.length > 0) {
                        $('#riwayatTB').empty();
                        $('#nodata').empty();
                        let html = ''
                        $.each(res, function(index, item) {

                            html += `
                        <tr class="odd:bg-[#0e1f34] even:bg-[#1b2b3d] text-white border-blue-800 border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-300 whitespace-nowrap">
                                ${item.nickname}
                            </th>
                            <td class="px-6 py-4">
                                ${item.rank}
                            </td>
                            <td class="px-6 py-4">
                                ${item.status}
                            </td>
                            </tr>`
                        });
                        $('#riwayatTB').html(html);
                    } else {
                        let html = `
                        <h1 class = "text-xl font-poppins font-bold text-white">No Data Found. </h1>
                        `
                        $('#riwayatTB').empty();
                        $('#nodata').html(html);
                    }
                },
                error: function(err) {
                    console.log(err)
                }
            });
        });
    </script>
@endsection
