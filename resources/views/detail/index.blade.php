@extends('layouts.main')

@section('content')
    <section class="bg-[#0a0e18]">

        <section>
            <div class="flex justify-center items-center h-56 lg:h-[340px] w-full overflow-hidden">
                <img class="" sizes="100dvw" src="{{ asset('webp/banner_det.webp') }}" alt="">
            </div>
            <div class="flex items-center justify-start overflow-visible bg-[#19304e] h-36">
                <img id="proCard" data-img-name = "{{ $product->img }}"
                    class="inline-block shadow-md -skew-y-12 lg:translate-x-36 -translate-y-14 h-auto w-40 rounded-lg m-3"
                    src="{{ asset("proCard/$product->img") }}" alt="">
                <article class="block -translate-y-5 lg:translate-x-36">
                    <h1 class="inline-block font-nunito font-bold text-2xl text-gray-100">{{ $product->name }}</h1>
                    <h1 class="block font-nunito font-bold text-xl text-gray-100">{{ $product->game->name }}</h1>
                    <div class="mt-3">
                        <p class="text-md inline-block text-gray-200 font-poppins font-medium mr-5"><i
                                class="fa-solid fa-headset"></i> Pelayanan Ngebut </p>
                        <p class="text-md inline-block text-gray-200 font-poppins font-medium"> <i
                                class="fa-solid fa-bolt-lightning"></i> Proses sat-set</p>
                    </div>
                </article>
            </div>
        </section>

        <section class="grid justify-items-center lg:grid-cols-4 gap-4 px-5 py-2">
            <div class="flex flex-col gap-5 col-span-3 lg:col-span-1">
                <section class="bg-[#0e1f34] h-fit rounded-xl w-full shadow-lg">
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
                        @foreach ($rules as $rule)
                            <li> - {{ $rule->rules }}</li>
                        @endforeach
                        <li class="font-bold text-center text-red-700 mt-8">Disclaimer: <p class="inline-block text-white">
                                Nomor WhatsApp Joki Arceus Hanya Yang Tertera Di Website!!!</p>
                        </li>
                        <li class="font-bold text-center hover:text-blue-200"><a href="#"><i
                                    class="fab fa-whatsapp"></i> WhatsApp Joki Arceus</a></li>
                    </ol>
                </section>
                <section class="bg-[#0e1f34] h-[30rem] rounded-xl hidden md:block  w-full shadow-lg overflow-auto">
                    <div class="flex flex-col">
                        <header class="h-[3.5rem] w-full bg-[#142f4d] grid grid-cols-4">
                            <div class="bg-gray-800 w-16 flex justify-center items-center">
                                <svg class="w-6 h-6 fill-current text-[rgb(255,215,0)]" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.31L22 9.27l-5.46 5.32 1.29 7.51L12 18.77l-6.83 3.33 1.29-7.51L2 9.27l6.91-.96z" />
                                </svg>
                            </div>
                            <span
                                class="text-lg lg:text-xl font-poppins font-bold text-white w-52 flex items-center">Testimoni</span>
                        </header>
                        <main class="h-full flex flex-col">
                            @if (count($riviews) > 0)
                                @foreach ($riviews as $riview)
                                    <div class="p-3 mb-3 flex flex-col">
                                        <header class="grid grid-cols-2 font-poppins text-white">
                                            <p class="text-sm font-bold">{{ Str::limit($riview->noTelp, 4, '********') }}
                                            </p>
                                            <p class="text-sm justify-self-end flex">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $riview->bintang)
                                                        <svg class="w-6 h-6 fill-current text-[rgb(255,215,0)]"
                                                            viewBox="0 0 24 24">
                                                            <path
                                                                d="M12 2l3.09 6.31L22 9.27l-5.46 5.32 1.29 7.51L12 18.77l-6.83 3.33 1.29-7.51L2 9.27l6.91-.96z" />
                                                        </svg>
                                                    @else
                                                        <svg class="w-6 h-6 fill-current text-gray-400" viewBox="0 0 24 24">
                                                            <path
                                                                d="M12 2l3.09 6.31L22 9.27l-5.46 5.32 1.29 7.51L12 18.77l-6.83 3.33 1.29-7.51L2 9.27l6.91-.96z" />
                                                        </svg>
                                                    @endif
                                                @endfor
                                            </p>
                                            <p class="text-sm">{{ $riview->rank }}</p>
                                            <p class="justify-self-end text-sm">{{ $riview->created_at->diffForHumans() }}
                                            </p>
                                        </header>
                                        <main class="w-full h-fit overflow-auto font-poppins text-sm text-white mt-2">
                                            <p class="w-[295px]">"{{ $riview->comment }}"</p>
                                        </main>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-center mt-10 font-poppins font-semibold text-white">Belum ada ulasan :/</p>
                            @endif
                        </main>
                    </div>
                </section>
            </div>
            <ul class="col-span-3 flex flex-col">
                <form class="h-fit" action="/order" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">

                    <section class="bg-[#0e1f34] h-fit rounded-xl w-full shadow-lg overflow-hidden flex flex-col mb-5">
                        <header class="h-[3.5rem] w-full bg-[#142f4d] grid grid-cols-4 lg:grid-cols-12">
                            <div class="bg-gray-800 w-16 flex justify-center items-center">
                                <p class="text-[rgb(255,215,0)] font-bold font-poppins text-2xl">1</p>
                            </div>
                            <span
                                class="text-lg lg:text-xl font-poppins font-bold text-white w-52 flex items-center">Masukkan
                                data
                                akun</span>
                        </header>
                        <main class="h-full flex flex-col overflow-auto">
                            <div class="p-3 mb-3 flex flex-col">
                                <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4 text-sm">
                                    <label class="block mb-2 text-white font-monts font-medium" for="IdNick">ID & Nickname
                                        <input
                                            class="bg-[#2d558a] w-full border-1 border-blue-800 rounded-md placeholder:text-white"
                                            type="text" name="nickname" id="IdNick"
                                            placeholder="Masukkan Id & Nickname Mu">
                                        @error('nickname')
                                            {{ $message }}
                                        @enderror
                                    </label>
                                    <label class="block mb-2 text-white font-monts font-medium" for="logvia">Login Via
                                        <select id="logVia" name="logVia"
                                            class="bg-[#2d558a] border-1 w-full p-2.5 border-blue-800 rounded-md placeholder:text-white">
                                            @foreach ($logins as $login)
                                                <option value="{{ $login->name }}">{{ $login->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('logVia')
                                            {{ $message }}
                                        @enderror
                                    </label>
                                </div>
                                <div class="mb-6 grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <label class="block mb-2 text-white font-monts font-medium" for="email">Email
                                        <input
                                            class="bg-[#2d558a] w-full border-1 border-blue-800 rounded-md placeholder:text-white placeholder:text-sm"
                                            type="text" name="email" id="email" placeholder="Your email....">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </label>
                                    <label class="block mb-2 text-white font-monts font-medium" for="password">Password
                                        <input
                                            class="bg-[#2d558a] w-full border-1 border-blue-800 rounded-md placeholder:text-white placeholder:text-sm"
                                            type="text" name="password" id="password" placeholder="Your password....">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </label>
                                </div>
                                <div class="mb-6  grid grid-cols-1 md:grid-cols-2 gap-4">
                                    @if ($reqHero)
                                        <label class="block mb-2 text-white font-monts font-medium" for="hero">Req Hero
                                            <input
                                                class="bg-[#2d558a] w-full border-1 border-blue-800 rounded-md font-monts placeholder:text-white placeholder:text-sm"
                                                type="text" name="reqHero" id="hero" placeholder="Your hero....">
                                            @error('reqHero')
                                                {{ $message }}
                                            @enderror
                                        </label>
                                    @else
                                        <input type="hidden" name="reqHero" value="null">
                                    @endif
                                    <label class="block mb-2 text-white font-monts font-medium" for="pesan">Pesan
                                        <input
                                            class="bg-[#2d558a] w-full border-1 border-blue-800 rounded-md font-monts placeholder:text-white placeholder:text-sm"
                                            type="text" name="pesan" id="pesan"
                                            placeholder="Pesan buat penjoki....">
                                        @error('pesan')
                                            {{ $message }}
                                        @enderror
                                    </label>
                                </div>
                            </div>
                        </main>
                    </section>
                    <section class="bg-[#0e1f34] h-fit rounded-xl w-full shadow-lg overflow-hidden flex flex-col mb-5">
                        <header class="h-[3.5rem] w-full bg-[#142f4d] grid grid-cols-4 lg:grid-cols-12">
                            <div class="bg-gray-800 w-16 flex justify-center items-center">
                                <p class="text-[rgb(255,215,0)] font-bold font-poppins text-2xl">2</p>
                            </div>
                            <span class="text-lg lg:text-xl font-poppins font-bold text-white w-52 flex items-center">Pilih
                                paket</span>
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
                                                <input type="radio" id="{{ $item->name }}" name="paket-joki"
                                                    value="{{ $item->price }},{{ $item->name }}" class="hidden peer"
                                                    required>
                                                <label id="item" for="{{ $item->name }}"
                                                    class="inline-flex items-center w-full p-3 bg-[#18304e] text-gray-500 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-4 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-[#1b2d44]">
                                                    <div class="block">
                                                        <div id="item_name"
                                                            class="w-full text-md font-poppins font-semibold text-white">
                                                            {{ $item->name }}</div>
                                                        <div id="item_price"
                                                            class="w-full text-sm font-poppins font-bold text-blue-500">
                                                            @uang($item->price)</div>
                                                    </div>
                                                    @error('paket-joki')
                                                        {{ $message }}
                                                    @enderror
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>

                                </main>
                            </section>
                        </main>
                    </section>
                    <section class="bg-[#0e1f34] h-fit rounded-xl w-full shadow-lg overflow-hidden flex flex-col mb-5">
                        <header class="h-[3.5rem] w-full bg-[#142f4d] grid grid-cols-4 lg:grid-cols-12">
                            <div class="bg-gray-800 w-16 flex justify-center items-center">
                                <p class="text-[rgb(255,215,0)] font-bold font-poppins text-2xl">3</p>
                            </div>
                            <span class="text-lg lg:text-xl font-poppins font-bold text-white w-96 flex items-center">Pilih
                                metode pembayaran</span>
                        </header>
                        <main class="h-full flex flex-col overflow-auto">
                            <section class="h-fit mb-5 p-5">
                                <main>
                                    <ul class="grid w-full gap-6 md:grid-cols-3">
                                        @foreach ($payments as $payment)
                                            <li>
                                                <input type="radio" id="{{ $payment->payment_method }}" name="payment"
                                                    value="{{ $payment->payment_method }}" class="hidden peer" required>
                                                <label for="{{ $payment->payment_method }}"
                                                    class="inline-flex items-center w-full p-3 bg-[#18304e] text-gray-500 border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-[#1b2d44]">
                                                    <div class="flex">
                                                        <img class="w-auto h-7 mr-2" src="{{ $payment->img }}"
                                                            alt="{{ $payment->payment_method }}">
                                                        <div class="w-full text-md font-poppins font-semibold text-white">
                                                            {{ $payment->payment_method }}</div>
                                                    </div>
                                                    @error('payment')
                                                        {{ $message }}
                                                    @enderror
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>

                                </main>
                            </section>
                        </main>
                    </section>
                    <section class="bg-[#0e1f34] h-fit rounded-xl w-full shadow-lg overflow-hidden flex flex-col mb-5">
                        <header class="h-[3.5rem] w-full bg-[#142f4d] grid grid-cols-4 lg:grid-cols-12">
                            <div class="bg-gray-800 w-16 flex justify-center items-center">
                                <p class="text-[rgb(255,215,0)] font-bold font-poppins text-2xl">4</p>
                            </div>
                            <span
                                class="text-lg lg:text-xl font-poppins font-bold text-white w-96 flex items-center">Masukkan
                                no whatsApp</span>
                        </header>
                        <main class="h-full flex flex-col overflow-auto">
                            <section class="h-fit mb-5 p-5">
                                <main>
                                    <label class="block mb-2 text-white font-monts font-medium" for="telpon">Telpon
                                        number
                                        @if (auth()->user())
                                            <input
                                                class="bg-[#2d558a] w-full border-1 border-blue-800 rounded-md placeholder:text-white"
                                                type="text" name="noTelpon" value="{{ auth()->user()->noTelpon }}"
                                                id="telpon" placeholder="Your telpon number....">
                                            @error('noTelpon')
                                                {{ $message }}
                                            @enderror
                                        @else<input
                                                class="bg-[#2d558a] w-full border-1 border-blue-800 rounded-md placeholder:text-white"
                                                type="text" name="noTelpon" id="telpon"
                                                placeholder="Your telpon number....">
                                            @error('noTelpon')
                                                {{ $message }}
                                            @enderror
                                        @endif
                                    </label>
                                </main>
                            </section>
                        </main>
                    </section>

                    <section class="w-full h-fit mb-5 bg-[#2d558a] rounded-lg">
                        <div id="receipt" class="w-full h-32 hidden">
                        </div>
                        <button
                            class="bg-[#19304e] p-3 rounded-lg w-full text-white font-bold font-poppins shadow-md hover:bg-[#1c273e] focus:ring-2 focus:ring-orange-600">Order
                            Now</button>
                    </section>

                    <section class="bg-[#0e1f34] h-[30rem] rounded-xl block md:hidden mb-5 w-full shadow-lg overflow-auto">
                        <div class="flex flex-col">
                            <header class="h-[3.5rem] w-full bg-[#142f4d] grid grid-cols-4">
                                <div class="bg-gray-800 w-16 flex justify-center items-center">
                                    <svg class="w-6 h-6 fill-current text-[rgb(255,215,0)]" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2l3.09 6.31L22 9.27l-5.46 5.32 1.29 7.51L12 18.77l-6.83 3.33 1.29-7.51L2 9.27l6.91-.96z" />
                                    </svg>
                                </div>
                                <span
                                    class="text-lg lg:text-xl font-poppins font-bold text-white w-52 flex items-center">Testimoni</span>
                            </header>
                            <main class="h-full flex flex-col overflow-auto">
                                @if (count($riviews) > 0)
                                    @foreach ($riviews as $riview)
                                        <div class="p-3 mb-3 flex flex-col">
                                            <header class="grid grid-cols-2 font-poppins text-white">
                                                <p class="text-sm font-bold">
                                                    {{ Str::limit($riview->noTelp, 4, '********') }}</p>
                                                <p class="text-sm justify-self-end flex">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $riview->bintang)
                                                            <svg class="w-6 h-6 fill-current text-[rgb(255,215,0)]"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M12 2l3.09 6.31L22 9.27l-5.46 5.32 1.29 7.51L12 18.77l-6.83 3.33 1.29-7.51L2 9.27l6.91-.96z" />
                                                            </svg>
                                                        @else
                                                            <svg class="w-6 h-6 fill-current text-gray-400"
                                                                viewBox="0 0 24 24">
                                                                <path
                                                                    d="M12 2l3.09 6.31L22 9.27l-5.46 5.32 1.29 7.51L12 18.77l-6.83 3.33 1.29-7.51L2 9.27l6.91-.96z" />
                                                            </svg>
                                                        @endif
                                                    @endfor
                                                </p>
                                                <p class="text-sm">{{ $riview->rank }}</p>
                                                <p class="justify-self-end text-sm">
                                                    {{ $riview->created_at->diffForHumans() }}</p>
                                            </header>
                                            <main class="w-full h-fit overflow-auto font-poppins text-sm text-white mt-2">
                                                <p class="w-[295px]">"{{ $riview->comment }}"</p>
                                            </main>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-center mt-10 font-poppins font-semibold text-white">Belum ada ulasan :/
                                    </p>
                                @endif

                            </main>
                        </div>
                    </section>


                </form>
            </ul>

        </section>
    </section>

    <script>
        const items = document.querySelectorAll('#item');
        const receipt = document.getElementById('receipt');

        items.forEach((item) => {
            item.addEventListener('click', () => {
                const proCard = document.getElementById('proCard').dataset.imgName;
                const item_name = item.querySelector('#item_name').textContent;
                const item_price = item.querySelector('#item_price').textContent;

                const data = showReceipt(proCard, item_name, item_price);

                if (receipt.classList.contains('hidden')) {
                    receipt.classList.remove('hidden');
                    receipt.classList.add('flex');
                }

                receipt.classList.remove('hidden');
                receipt.classList.add('flex');
                receipt.innerHTML = data;
            });
        });

        function showReceipt(card, name, price) {
            return `
    <img id="receipt_img" class="h-28 w-24 m-3" src="{{ asset('proCard/${card}') }}" alt="GAS">
                             <div class="flex flex-col mt-2">
                                <h1 id="receipt_packet" class="text-white font-monts font-semibold">${name}</h1>
                                <h1 id="receipt_price" class="text-white font-monts font-light">${price}</h1>
                             </div>
    `
        }
    </script>
@endsection
