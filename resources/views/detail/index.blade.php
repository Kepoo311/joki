@extends('layouts.main')

@section('content')
    <section class="bg-[rgb(206,178,61)]">
        <section>
            <div class="flex justify-center items-center h-56 lg:h-[340px] w-full overflow-hidden">
                <img class="" sizes="100dvw" src="{{asset("img/banner_det.jpg")}}" alt="">
            </div>
            <div class="flex items-center justify-start overflow-visible bg-[rgb(177,154,58)] h-36">
                <img class="inline-block shadow-md -skew-y-12 lg:translate-x-36 -translate-y-14 h-auto w-40 rounded-lg m-3"
                    src="{{$product->img}}" alt="">
                <article class="block -translate-y-5 lg:translate-x-36">
                    <h1 class="inline-block font-nunito font-bold text-2xl text-gray-100">{{$product->name}}</h1>
                    <h1 class="block font-nunito font-bold text-xl text-gray-100">{{$product->game->name}}</h1>
                    <div class="mt-3">
                        <p class="text-md inline-block text-gray-200 font-poppins font-medium mr-5"><i
                                class="fa-solid fa-headset"></i> Pelayanan Ngebut </p>
                        <p class="text-md inline-block text-gray-200 font-poppins font-medium"> <i
                                class="fa-solid fa-bolt-lightning"></i> Proses sat-set</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="grid grid-cols-1 lg:grid-cols-4 gap-4 px-14 py-2">
            <div class="flex flex-col gap-5 col-span-3 md:col-span-1">
                <section class="bg-[rgb(161,147,90)] h-fit rounded-xl w-full shadow-lg">
                    <h1 class="font-poppins font-bold text-white text-3xl text-center pt-5">Cara order joki</h1>
                    <ol class="p-5 font-poppins font-medium text-white">
                        <li>1) Masukkan Data Akun / ID</li>
                        <li>2) Pilih Nominal</li>
                        <li>3) Tentukan Jumlah Pembelian</li>
                        <li>4) Pilih Pembayaran</li>
                        <li>5) Masukkan No WhatsApp</li>
                        <li>6) Klik Pesan Sekarang dan lakukan Pembayaran</li>
                        <li>7) Selesai</li>
                        <li class="mt-5">Rule Joki : </li>
                        <li> - Matikan centang verify di pengaturan ML</li>
                        <li> - Jika dilogin 3x selama proses joki berlangsung maka dianggap selesai dan uang tidak bisa
                            direfund</li>
                        <li class="font-bold text-center text-red-700 mt-8">Disclaimer: <p class="inline-block text-white">
                                Nomor WhatsApp Joki Arceus Hanya Yang Tertera Di Website!!!</p>
                        </li>
                        <li class="font-bold text-center hover:text-blue-200"><a href="#"><i
                                    class="fab fa-whatsapp"></i> WhatsApp Joki Arceus</a></li>
                    </ol>
                </section>
                <section class="bg-[rgb(161,147,90)] h-[30rem] rounded-xl hidden md:block  w-full shadow-lg overflow-hidden">
                    <div class="flex flex-col" >
                    <header class="h-[3.5rem] w-full bg-[rgb(130,121,85)] grid grid-cols-4">
                        <div class="bg-gray-800 w-16 flex justify-center items-center">
                            <p class="text-[rgb(255,215,0)]"><i class="fas fa-star"></i></p>
                        </div>
                        <span class="text-lg lg:text-xl font-poppins font-bold text-white w-52 flex items-center">Ulasan Pembeli</span>
                    </header>
                    <main class="h-full flex flex-col overflow-auto">
                        <div class="p-3 mb-3 flex flex-col">
                            <header class="grid grid-cols-2 font-poppins text-white">
                                <p class="text-sm font-bold">089*******</p>
                                <p class="text-sm justify-self-end">5 Bintang</p>
                                <p class="text-sm">Rank Ini ke itu</p>
                                <p class="justify-self-end text-sm">10-11-2023</p>
                            </header>
                            <main class="w-full h-fit overflow-auto font-poppins text-sm text-white mt-2">
                                <p class="w-[295px]">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor,
                                    eveniet minus vitae ipsum quibusdam in ad incidunt consectetur ipsam ratione. Rem
                                    obcaecati quasi iusto quidem."</p>
                            </main>
                        </div>
                    </main>
                </div>
                </section>
                <section class="flex justify-center">
                    <img class="rounded-xl hidden lg:block" src="img/Joki.gif" alt="">
                    <img class="rounded-xl block lg:hidden" src="img/smallbanner.gif" alt="">
                </section>
            </div>
            <ul class="col-span-3 flex flex-col">
                <form class="h-fit" action="#" method="post">
                    @csrf
                    <section
                        class="bg-[rgb(161,147,90)] h-fit rounded-xl w-full shadow-lg overflow-hidden flex flex-col mb-5">
                        <header class="h-[3.5rem] w-full bg-[rgb(130,121,85)] grid grid-cols-4 lg:grid-cols-12">
                            <div class="bg-gray-800 w-16 flex justify-center items-center">
                                <p class="text-[rgb(255,215,0)] font-bold font-poppins text-2xl">1</p>
                            </div>
                            <span class="text-lg lg:text-xl font-poppins font-bold text-white w-52 flex items-center">Masukkan data
                                akun</span>
                        </header>
                        <main class="h-full flex flex-col overflow-auto">
                            <div class="p-3 mb-3 flex flex-col">
                                <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <label class="block mb-2 text-white font-monts font-medium" for="IdNick">ID & Nickname
                                        <input
                                            class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md placeholder:text-white"
                                            type="text" name="IdNick" id="IdNick"
                                            placeholder="Masukkan Id & Nickname Mu">
                                    </label>
                                    <label class="block mb-2 text-white font-monts font-medium" for="logvia">Login Via
                                        <select id="countries"
                                            class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md p-2.5">
                                            <option disabled>Choose login via</option>
                                            <option selected value="Moonton">Moonton (Reccomend)</option>
                                            <option value="Facebook">Facebook</option>
                                            <option value="Tiktok">Tiktok</option>
                                            <option value="VK">VK</option>
                                        </select></label>
                                </div>
                                <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <label class="block mb-2 text-white font-monts font-medium" for="email">Email
                                        <input
                                            class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md placeholder:text-white placeholder:text-sm"
                                            type="text" name="email" id="email" placeholder="Your email....">
                                    </label>
                                    <label class="block mb-2 text-white font-monts font-medium" for="password">Password
                                        <input
                                            class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md placeholder:text-white placeholder:text-sm"
                                            type="text" name="password" id="password" placeholder="Your password....">
                                    </label>
                                </div>
                                <div class="mb-6  grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <label class="block mb-2 text-white font-monts font-medium" for="hero">Req Hero
                                        <input
                                            class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md font-monts placeholder:text-white placeholder:text-sm"
                                            type="text" name="hero" id="hero" placeholder="Your hero....">
                                    </label>
                                    <label class="block mb-2 text-white font-monts font-medium" for="pesan">Pesan
                                        <input
                                            class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md font-monts placeholder:text-white placeholder:text-sm"
                                            type="text" name="pesan" id="pesan" placeholder="Pesan buat penjoki....">
                                    </label>
                                </div>
                            </div>
                        </main>
                    </section>
                    <section
                        class="bg-[rgb(161,147,90)] h-fit rounded-xl w-full shadow-lg overflow-hidden flex flex-col mb-5">
                        <header class="h-[3.5rem] w-full bg-[rgb(130,121,85)] grid grid-cols-4 lg:grid-cols-12">
                            <div class="bg-gray-800 w-16 flex justify-center items-center">
                                <p class="text-[rgb(255,215,0)] font-bold font-poppins text-2xl">2</p>
                            </div>
                            <span class="text-lg lg:text-xl font-poppins font-bold text-white w-52 flex items-center">Pilih nominal joki</span>
                        </header>
                        <main class="h-full flex flex-col overflow-auto">
                            <section class="h-fit mb-5 p-5">
                                <header>
                                    <h2 class="font-semibold font-poppins text-white text-lg">Paket Joki</h2>
                                </header>
                                <main>
                                    <ul class="grid w-full gap-6 md:grid-cols-3">
                                        @foreach ($jasas as $item)
                                        <li>
                                            <input type="radio" id="{{$item->name}}" name="paket-joki"
                                            value="{{$item->price}}" class="hidden peer" required>
                                            <label for="{{$item->name}}"
                                            class="inline-flex items-center w-full p-3 bg-[rgb(244,221,129)] text-gray-500 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-4 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-[rgb(210,190,113)]">
                                            <div class="block">
                                                <div class="w-full text-md font-poppins font-semibold text-black">{{$item->name}}</div>
                                                <div class="w-full text-sm font-poppins font-bold text-blue-500">Rp. {{$item->price}}</div>
                                            </div>
                                        </label>
                                    </li>
                                    @endforeach
                                    </ul>

                                </main>
                            </section>
                        </main>
                    </section>
                    <section
                        class="bg-[rgb(161,147,90)] h-fit rounded-xl w-full shadow-lg overflow-hidden flex flex-col mb-5">
                        <header class="h-[3.5rem] w-full bg-[rgb(130,121,85)] grid grid-cols-4 lg:grid-cols-12">
                            <div class="bg-gray-800 w-16 flex justify-center items-center">
                                <p class="text-[rgb(255,215,0)] font-bold font-poppins text-2xl">3</p>
                            </div>
                            <span class="text-lg lg:text-xl font-poppins font-bold text-white w-96 flex items-center">Pilih metode pembayaran</span>
                        </header>
                        <main class="h-full flex flex-col overflow-auto">
                            <section class="h-fit mb-5 p-5">
                                <header>
                                    <h2 class="font-semibold font-poppins text-white text-lg">Paket Grandmaster</h2>
                                </header>
                                <main>
                                    <ul class="grid w-full gap-6 md:grid-cols-3">
                                        <li>
                                            <input type="radio" id="bayar-oi" name="bayar"
                                                value="bayar-oi" class="hidden peer" required>
                                            <label for="bayar-oi"
                                                class="inline-flex items-center w-full p-3 bg-[rgb(244,221,129)] text-gray-500 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-[rgb(210,190,113)]">
                                                <div class="block">
                                                    <div class="w-full text-md font-poppins font-semibold text-black">Keris sakti</div>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>

                                </main>
                            </section>
                        </main>
                    </section>
                    <section
                        class="bg-[rgb(161,147,90)] h-fit rounded-xl w-full shadow-lg overflow-hidden flex flex-col mb-5">
                        <header class="h-[3.5rem] w-full bg-[rgb(130,121,85)] grid grid-cols-4 lg:grid-cols-12">
                            <div class="bg-gray-800 w-16 flex justify-center items-center">
                                <p class="text-[rgb(255,215,0)] font-bold font-poppins text-2xl">4</p>
                            </div>
                            <span class="text-lg lg:text-xl font-poppins font-bold text-white w-96 flex items-center">Masukkan no whatsApp</span>
                        </header>
                        <main class="h-full flex flex-col overflow-auto">
                            <section class="h-fit mb-5 p-5">
                                <main>
                                    <label class="block mb-2 text-white font-monts font-medium" for="telpon">Telpon number
                                        <input
                                            class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md placeholder:text-white"
                                            type="text" name="telpon" id="telpon" placeholder="Your telpon number....">
                                    </label>
                                </main>
                            </section>
                        </main>
                    </section>
                    <section class="bg-[rgb(161,147,90)] h-[30rem] rounded-xl block md:hidden mb-5 w-full shadow-lg overflow-hidden">
                        <div class="flex flex-col" >
                        <header class="h-[3.5rem] w-full bg-[rgb(130,121,85)] grid grid-cols-4">
                            <div class="bg-gray-800 w-16 flex justify-center items-center">
                                <p class="text-[rgb(255,215,0)]"><i class="fas fa-star"></i></p>
                            </div>
                            <span class="text-lg lg:text-xl font-poppins font-bold text-white w-52 flex items-center">Ulasan Pembeli</span>
                        </header>
                        <main class="h-full flex flex-col overflow-auto">
                            <div class="p-3 mb-3 flex flex-col">
                                <header class="grid grid-cols-2 font-poppins text-white">
                                    <p class="text-sm font-bold">089*******</p>
                                    <p class="text-sm justify-self-end">5 Bintang</p>
                                    <p class="text-sm">Rank Ini ke itu</p>
                                    <p class="justify-self-end text-sm">10-11-2023</p>
                                </header>
                                <main class="w-full h-fit overflow-auto font-poppins text-sm text-white mt-2">
                                    <p class="w-[295px]">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor,
                                        eveniet minus vitae ipsum quibusdam in ad incidunt consectetur ipsam ratione. Rem
                                        obcaecati quasi iusto quidem."</p>
                                </main>
                            </div>
                        </main>
                    </div>
                    </section>

                    <section class="w-full h-fit">
                        <button class="bg-red-600 p-3 rounded-lg w-full text-white font-bold font-poppins shadow-md hover:bg-red-700 focus:ring-2 focus:ring-orange-600">Order Now</button>
                    </section>
                </form>
            </ul>
        </section>

    </section>
@endsection
