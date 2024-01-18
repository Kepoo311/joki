@extends('layouts.dash')

@section('content')
<section class="flex flex-col h-full">
    <figure class="grid grid-cols-2 gap-2 md:grid-cols-4 justify-items-center content-center mt-5 md:mt-0 md:h-48">
        <div class="bg-white shadow-xl border border-gray-200 w-48 h-32 hover:bg-gray-100 rounded-xl flex flex-col">
            <header>
                <h1 class="font-poppins text-center font-semibold pt-2 text-sm"><i class="fas fa-wallet"></i> Jumlah Pendapatan</h1>
            </header>
            <main class="flex items-center justify-center h-full" >
                <h1 class="font-poppins font-semibold text-2xl" >
                    Rp. 2.000
                </h1>
            </main>
        </div>
        <div class="bg-white shadow-xl border border-gray-200 w-48 h-32 hover:bg-gray-100 rounded-xl flex flex-col">
            <header>
                <h1 class="font-poppins text-center font-semibold pt-2 text-sm"><i class="fas fa-user"></i> Jumlah Orderan</h1>
            </header>
            <main class="flex items-center justify-center h-full" >
                <h1 class="font-poppins font-semibold text-2xl" >
                    2.000
                </h1>
            </main>
        </div>
        <div class="bg-white shadow-xl border border-gray-200 w-48 h-32 hover:bg-gray-100 rounded-xl flex flex-col">
            <header>
                <h1 class="font-poppins text-center font-semibold pt-2 text-sm"><i class="fas fa-check"></i> Orderan Selesai</h1>
            </header>
            <main class="flex items-center justify-center h-full" >
                <h1 class="font-poppins font-semibold text-2xl" >
                    2.000
                </h1>
            </main>
        </div>
        <div class="bg-white shadow-xl border border-gray-200 w-48 h-32 hover:bg-gray-100 rounded-xl flex flex-col">
            <header>
                <h1 class="font-poppins text-center font-semibold pt-2 text-sm"><i class="fas fa-clock"></i> Orderan Pending</h1>
            </header>
            <main class="flex items-center justify-center h-full" >
                <h1 class="font-poppins font-semibold text-2xl" >
                    2.000
                </h1>
            </main>
        </div>
    </figure>
</section>
@endsection