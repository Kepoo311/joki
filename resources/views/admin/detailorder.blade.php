@extends('layouts.dash')

@section('content')
    <div class="bg-[rgb(254,221,89)] h-dvh">
        <ul class="col-span-3 flex flex-col">
            <section class="bg-[rgb(161,147,90)] h-fit w-full shadow-lg overflow-hidden flex flex-col mb-5">
                <header class="h-[3.5rem] w-full bg-[rgb(130,121,85)] grid grid-cols-4 lg:grid-cols-12">
                    <div class="bg-gray-800 w-16 flex justify-center items-center">
                        <p class="text-[rgb(255,215,0)] font-bold font-poppins text-2xl">1</p>
                    </div>
                    <span class="text-lg lg:text-xl font-poppins font-bold text-white w-52 flex items-center">Data akun
                        customer</span>
                </header>
                <main class="h-full flex flex-col overflow-auto">
                    <div class="p-3 mb-3 flex flex-col">
                        <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                            <label class="block mb-2 text-white font-monts font-medium" for="IdNick">ID & Nickname
                                <input
                                    class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md placeholder:text-white"
                                    type="text" name="nickname" id="IdNick" placeholder="Masukkan Id & Nickname Mu"
                                    value="{{ $orderan->nickname }}" disabled>
                            </label>
                            <label class="block mb-2 text-white font-monts font-medium" for="logvia">Login Via
                                <input
                                    class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md placeholder:text-white"
                                    type="text" name="logVia" id="logVia" placeholder="Login Via?....."
                                    value="{{ $orderan->logVia }}" disabled>
                            </label>
                        </div>
                        <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                            <label class="block mb-2 text-white font-monts font-medium" for="email">Email
                                <input
                                    class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md placeholder:text-white placeholder:text-sm"
                                    type="text" name="email" id="email" placeholder="Your email...."
                                    value="{{ $orderan->email }}" disabled>
                            </label>
                            <label class="block mb-2 text-white font-monts font-medium" for="password">Password
                                <input
                                    class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md placeholder:text-white placeholder:text-sm"
                                    type="text" name="password" id="password" placeholder="Your password...."
                                    value="{{ $orderan->password }}" disabled>
                            </label>
                        </div>
                        <div class="mb-6  grid grid-cols-1 md:grid-cols-2 gap-4">
                            <label class="block mb-2 text-white font-monts font-medium" for="hero">Req Hero
                                <input
                                    class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md font-monts placeholder:text-white placeholder:text-sm"
                                    type="text" name="reqHero" id="hero" placeholder="Your hero...."
                                    value="{{ $orderan->reqHero }}" disabled>
                            </label>
                            <label class="block mb-2 text-white font-monts font-medium" for="pesan">Pesan
                                <input
                                    class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md font-monts placeholder:text-white placeholder:text-sm"
                                    type="text" name="pesan" id="pesan" placeholder="Pesan buat penjoki...."
                                    value="{{ $orderan->pesan }}" disabled>
                        </div>
                    </div>
                </main>
            </section>
            <section class="bg-[rgb(161,147,90)] h-fit w-full shadow-lg overflow-hidden flex flex-col mb-5">
                <header class="h-[3.5rem] w-full bg-[rgb(130,121,85)] grid grid-cols-4 lg:grid-cols-12">
                    <div class="bg-gray-800 w-16 flex justify-center items-center">
                        <p class="text-[rgb(255,215,0)] font-bold font-poppins text-2xl">2</p>
                    </div>
                    <span class="text-lg lg:text-xl font-poppins font-bold text-white w-96 flex items-center">No WhatsApp
                        Customer</span>
                </header>
                <main class="h-full flex flex-col overflow-auto">
                    <section class="h-fit mb-5 p-5">
                        <main>
                            <label class="block mb-2 text-white font-monts font-medium" for="telpon">Telpon number
                                <input
                                    class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md placeholder:text-white"
                                    type="text" name="noTelpon" id="telpon" placeholder="Your telpon number...."
                                    value="{{ $orderan->noTelpon }}" disabled>
                            </label>
                        </main>
                    </section>
                </main>
            </section>
    </div>
@endsection
