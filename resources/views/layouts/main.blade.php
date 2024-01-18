<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                        nunito: ['Nunito', 'sans-serif'],
                        monts: ['Montserrat', 'sans-serif'],
                        autur: ['Autour One', 'sans-serif']
                    },
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Autour+One&family=Montserrat:wght@300&family=Nunito&family=Poppins:ital,wght@0,200;1,300&family=Quicksand&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <title>{{$title}}</title>
</head>

<body>
    <main class="flex flex-col">


        <nav class="bg-black border-gray-200">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="img/logo_arceus.png" class="h-10" alt="Arceus Logo" />
                    <span class="self-center text-2xl font-autur font-semibold whitespace-nowrap dark:text-white">Joki
                        Arceus</span>
                </a>
                <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    @auth
                    <button type="button"
                        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                            alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">{{auth()->user()->fullname}}</span>
                            <span
                                class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{auth()->user()->email}}</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="px-4 w-full flex justify-start py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">
                                        Sign out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                    @else
                    <a href="/login"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                                <i class="fas fa-sign-in-alt"></i> Login</a>
                    @endauth
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul
                        class="flex flex-col font-medium md:p-0 mt-4 border md:mr-44 border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-black md:dark:bg-black dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page"><i class="fas fa-home"></i> Beranda</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"><i class="fas fa-history"></i> Riwayat
                                Transaksi</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <section class="block" >
        <footer class="bg-[#3F2F2F]">
            <section class="grid grid-cols-1 xl:grid-cols-4 p-10" >
                <section class="flex flex-col" >
                    <img class="h-auto w-32" src="img/logo_arceus.png" alt="">
                    <h1 class="text-white font-poppins w-72 md:w-56" >Joki Arceus adalah website tempat jasa joki yang paling terpecaya di dunia.</h1>
                </section>

                <div class="grid grid-cols-2 md:grid-cols-3 mt-3 xl:mt-0 xl:col-span-3" >
                <section class="flex flex-col" >
                    <h1 class="text-white font-poppins" >Social Media Kami:</h1>
                    <a class="text-white font-poppins hover:underline" href="#"><i class="fab fa-instagram"></i> Instagram</a>
                    <a class="text-white font-poppins hover:underline" href="#"><i class="fab fa-tiktok"></i> Tiktok</a>
                    <a class="text-white font-poppins hover:underline" href="#"><i class="fab fa-youtube"></i> Youtube</a>
                    <a class="text-white font-poppins hover:underline" href="#"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                    
                </section>
                <section class="flex flex-col mt-3" >
                    <h1 class="text-white font-poppins" >Peta Situs:</h1>
                    <a class="text-white font-poppins hover:underline" href="#"><i class="fas fa-home"></i> Beranda</a>
                    <a class="text-white font-poppins hover:underline" href="#"><i class="fas fa-history"></i> Cek riwayat</a>
                </section>
                <section class="flex flex-col mt-3" >
                    <h1 class="text-white font-poppins" >Credit: </h1>
                    <a class="text-white font-poppins hover:underline" href="#"><i class="fas fa-mars"></i> Riandra</a>
                    <a class="text-white font-poppins hover:underline" href="#"><i class="fas fa-mars"></i> Gajendra</a>
                    <a class="text-white font-poppins hover:underline" href="#"><i class="fas fa-mars"></i> Reyno</a>
                    <a class="text-white font-poppins hover:underline" href="#"><i class="fas fa-mars"></i> Ardhika</a>
                </section>
            </div>
            </section>

            <section>
                <h1 class="text-white font-autur font-bold text-center" ><i class="fas fa-copyright"></i> Joki Arceus 2024. All rights reserved.</h1>
            </section>
        </footer>
        </section>
    </main>

    <script src="js-home/particles.js"></script>
    <script src="js-home/app.js"></script>
    <script src="https://kit.fontawesome.com/65fd5af23f.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
