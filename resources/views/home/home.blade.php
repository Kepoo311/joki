@extends('layouts.main')

@section('content')
    {{-- POPUP JOKI BERHASIL DI PESAN --}}
    @if (session()->has('orderGG'))
        <section id="order_gg"
            class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-[999] flex justify-center items-center min-h-screen w-full bg-[rgba(0,0,0,0.5)]">
            <div class="bg-white w-96 h-[27rem] justify-center rounded-lg flex-col">
                <div class="text-end justify-end">
                    <button class="text-2xl mr-2" id="pop_jok_button"><i class="fas fa-times"></i></button>
                </div>
                <video autoplay loop muted>
                    <source src="{{ asset('webm/succes.webm') }}" type="video/webm">
                    Your browser does not support the video tag.
                </video>

                <h1 class="text-black font-monts font-semibold text-center text-xl">YOUR ORDER HAS BEEN PLACED!!</h1>
                <p class="leading-normal font-monts mb-5 text-center">Thanks for order!!</p>

                <div class="text-center justify-center">
                    <a class="text-center py-2 px-4 shadow-md mb-5 text-white font-poppins font-semibold text-lg bg-red-600 hover:bg-red-700 rounded-lg"
                        href="/riwayat">Riwayat</a>
                </div>
            </div>
        </section>
    @endif
    {{-- END --}}

    {{-- POP UP AWAL MASUK WEB --}}
    <section id="popup_awal"
        class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-[999] hidden justify-center items-center min-h-screen w-full bg-[rgba(0,0,0,0.5)]">
        <div class="bg-white w-96 h-[27rem] justify-center text-center rounded-lg flex-col">
            <section class="fixed z-[999]">
                <div class="text-end justify-end">
                    <button class="text-2xl mr-2 text-white ml-3" id="popup_button"><i class="fas fa-times"></i></button>
                </div>
            </section>

            <img loading="lazy" class="rounded-lg" src="{{ asset('webp/promo_poster.webp') }}" alt="">
        </div>
    </section>
    {{-- END --}}

    {{-- CONTACT SUPPORT --}}

    <section id="support_contact"
        class="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-[999] hidden justify-center items-center min-h-screen w-full bg-[rgba(0,0,0,0.5)]">
        <div class="bg-white w-96 h-[35rem] justify-center rounded-lg flex-col">


            @auth
                <div class="card_chat">
                    <header class="flex justify-between border-b-2 w-96">
                        <h1 class="font-poppins p-2">Joki arceus support</h1>
                        <button class="text-2xl mr-2" id="joki_chat_close"><i class="fas fa-times"></i></button>
                    </header>

                    <section class="flex flex-col h-[27rem] overflow-auto">
                        @foreach ($chat as $chat)
                            @if ($chat->from_user_id == 999 && $chat->to_user_id == Auth::user()->id)
                                <div class="bg-slate-500 m-2 w-fit h-fit rounded-lg max-w-72 overflow-x-clip">
                                    <p class="p-2 text-white font-poppins max-w-72">{{ $chat->message }}</p>
                                </div>
                            @endif
                            @if ($chat->from_user_id == Auth::user()->id && $chat->to_user_id == 999)
                                <div class="bg-blue-500 m-2 w-fit h-fit rounded-lg self-end max-w-72 overflow-x-clip">
                                    <p class="p-2 text-white font-poppins max-w-72">{{ $chat->message }}</p>
                                </div>
                            @endif
                        @endforeach
                    </section>

                    <div class="fixed bottom-23">
                        <form class="flex" action="/kirim" method="POST">
                            @csrf
                            <textarea name="message" class="mx-2 w-72 rounded-lg" type="text" rows="1"></textarea>
                            <button type="submit" class="bg-blue-300 py-2 px-7 rounded-lg shadow-xl hover:bg-blue-400"><i
                                    class="fas fa-paper-plane"></i></button>
                        </form>
                        <p class="text-center font-poppins text-sm">Pls dont send anyting sensitive!!</p>
                    </div>
                </div>
            @else
                <div class="text-end justify-end">
                    <button class="text-2xl mr-2" id="joki_chat_close"><i class="fas fa-times"></i></button>
                </div>
                <div class="flex flex-col text-center justify-center items-center h-full">
                    <h1 class="text-xl font-poppins font-semibold mb-2">Brother, pls login first!!</h1>
                    <a class="text-center py-2 px-4 shadow-md mb-5 text-white font-poppins font-semibold text-lg bg-red-600 hover:bg-red-700 rounded-lg"
                        href="/login">LOGIN</a>
                </div>
            @endauth
        </div>
    </section>

    <section id="support_open_but" class="fixed z-[9999] end-6 bottom-6">

        <div data-tooltip-target="tooltip-default"
            class="flex justify-center items-center text-white text-xl w-14 h-14 bg-blue-800 hover:bg-blue-900 rounded-full">
            <i class="fas fa-question"></i>
        </div>

        <div id="tooltip-default" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Contact Support
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </section>
    {{-- END --}}

    <section class="relative bg-[#0a0e18] overflow-hidden">
        <div class="absolute h-[15rem] lg:h-[70%] w-[98vw]" id="particles-js"></div>
        <div id="default-carousel" class="w-full overflow-hidden mb-2 mt-2 md:mb-5 md:mt-5" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 rounded-lg md:h-[30rem]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="/">
                        <video class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" autoplay loop
                            muted>
                            <source src="{{ asset('webp/banner4.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </a>
                </div>
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="/">
                        <img src="{{ asset('webp/banner5.webp') }}" loading="lazy"
                            class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </a>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="/">
                        <img src="{{ asset('webp/banner1.webp') }}" loading="lazy"
                            class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </a>
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="/">
                        <img src="{{ asset('webp/banner2.webp') }}" loading="lazy"
                            class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </a>
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <a href="/">
                        <img src="{{ asset('webp/banner3.webp') }}" loading="lazy"
                            class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </a>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="2"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </section>

    <section class="bg-[#0e1f34] w-full">

        <nav class="p-5 flex flex-rowd gap-1 overflow-auto hide-scrollbar smooth-scroll">
            <a class="{{ Request::is('/') ? 'bg-[#264977] hover:bg-[#233a57]' : 'bg-[#233a57] hover:bg-[#264977]' }} duration-500 border border-[rgba(0,0,0,0.25)] whitespace-nowrap focus:ring-2 focus:ring-black text-white font-poppins rounded-3xl p-2 md:p-3 md:text-md text-[0.8rem]"
                href="/">Show all</a>
            @foreach ($category as $item)
                <a class="{{ Request::is("$item->name/atk") ? 'bg-[#264977] hover:bg-[#233a57]' : 'bg-[#233a57] hover:bg-[#264977]' }} duration-500 border border-[rgba(0,0,0,0.25)] whitespace-nowrap focus:ring-2 focus:ring-black text-white font-poppins rounded-3xl p-2 md:p-3 md:text-md text-[0.8rem]"
                    href="/{{ $item->name }}/atk">{{ $item->game->name }}</a>
            @endforeach
        </nav>


        @if (Request::is("$product->name/atk"))
            <section class="grid grid-cols-1 justify-items-center">
                <div>
                    <video class="h-80 w-auto object-cover mix-blend-screen" autoplay loop muted>
                        <source src="{{ asset("webm/$product->webm") }}" type="video/webm">
                        Your browser does not support the video tag.
                    </video>

                </div>
            </section>

            <section class="grid grid-cols-1 justify-items-center">
                <a class="overflow-hidden border border-[rgba(0,0,0,0.1)] h-72 w-56 max-md:h-60 max-md:w-48 rounded-2xl duration-500 focus:ring-2 focus:ring-black flex shadow-2xl"
                    href="/products/{{ $product->name }}">
                    <div
                        class="absolute h-72 w-56 max-md:h-60 max-md:w-48 bg-gradient-to-t rounded-2xl from-gray-900 transition ease-in-out duration-500 opacity-0 hover:opacity-100">
                        <p class="absolute text-white font-bold text-lg font-monts inset-x-7 bottom-7 w-auto">
                            {{ $product->name }}</p>
                    </div>
                    <img loading="lazy" class="h-72 max-md:h-60 w-auto self-end"
                        src="{{ asset("proCard/$product->img") }}" alt="">
                </a>
            </section>
        @else
            <section class="grid grid-cols-2 lg:grid-cols-4 justify-items-center gap-2">
                @foreach ($AllProduct as $product)
                    <a class="overflow-hidden border border-[rgba(0,0,0,0.1)] h-56 w-48 max-md:h-44 max-md:w-36 rounded-2xl duration-500 focus:ring-2 focus:ring-black flex shadow-2xl"
                        href="/products/{{ $product->name }}">
                        <div
                            class="absolute h-56 w-48 max-md:h-44 max-md:w-36 bg-gradient-to-t rounded-2xl from-gray-900 transition ease-in-out duration-500 opacity-0 hover:opacity-100">
                            <p class="absolute text-white font-bold text-lg font-monts inset-x-7 bottom-7 w-auto">
                                {{ $product->name }}</p>
                        </div>
                        <img class="h-56 max-md:h-44 w-auto self-end" src="{{ asset("proCard/$product->img") }}"
                            loading="lazy" alt="">
                    </a>
                @endforeach
            </section>
        @endif

        <footer class="flex items-end justify-center h-52">
            <img loading="lazy" class="absolute h-32 md:h-52 w-auto" src="{{ asset('webp/baKITA.webp') }}"
                alt="">
        </footer>
    </section>




    {{-- SCRIPT --}}
    {{-- <script src="{{ asset('jawasc/Popup.js') }}"></script> --}}
    <script src="{{ asset('jawasc/jawasc.js') }}"></script>
    <script>
        const sesi = {{ Session::has('orderGG') }}
        const popup = document.getElementById('popup_awal')
        const body = document.body

        if (sesi) {
            popup.classList.add("hidden");
            body.style.overflow = "hidden";
        } else {
            body.style.overflow = "scroll"
        }
    </script>
    {{-- <script src="{{ asset('jawasc/chat_oke.js') }}"></script>
     <script src="{{ asset('jawasc/Orderpop.js') }}"></script> --}}
@endsection
