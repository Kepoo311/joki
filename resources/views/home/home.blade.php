@extends('layouts.main')

@section('content')
<section class="bg-[rgb(177,154,58)] overflow-hidden">
    <div class="absolute h-[15rem] lg:h-[70%] w-[98vw]" id="particles-js"></div>
    <div id="default-carousel" class="relative w-full overflow-hidden mb-2 mt-2 md:mb-5 md:mt-5"
        data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 rounded-lg md:h-[30rem]">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/banner4.gif"
                    class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/banner1.jpg"
                    class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/banner2.jpg"
                    class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img/banner3.jpg"
                    class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
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
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</section>

<section class="bg-[rgb(206,178,61)] w-full">
    <nav class="px-2 md:px-7 py-7 overflow-auto">
        @foreach ($category as $item)
        <a class="bg-red-600 duration-500 border border-[rgba(0,0,0,0.25)] focus:ring-2 focus:ring-black text-white font-poppins hover:bg-red-700 rounded-3xl p-2 md:p-3 md:text-md text-sm"
        href="/atk/{{$item->name}}">{{$item->game->name}}</a>
        @endforeach
    </nav>

    <section class="grid grid-cols-2 lg:grid-cols-5 justify-items-center py-7 mb-10">
        <a class="overflow-hidden border border-[rgba(0,0,0,0.1)] h-64 w-48 rounded-2xl duration-500 focus:ring-2 focus:ring-black flex shadow-2xl"
        href="/products/{{$product->name}}">
        <div class="absolute h-64 w-48 bg-gradient-to-t rounded-2xl from-gray-900 transition ease-in-out duration-500 opacity-0 hover:opacity-100">
            <p class="absolute text-white font-bold text-lg font-monts inset-x-7 bottom-7 w-auto">{{$item->name}}</p>
        </div>
        <img class="h-56 w-auto self-end" src="{{$product->img}}" alt="">
    </a>
    </section>   
    
    <footer class="flex items-end justify-center h-96" >
        <img class="absolute h-32 md:h-52 w-auto" src="img/baKITA.png" alt="">
    </footer>
</section>
@endsection