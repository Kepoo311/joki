<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{asset('webp/favicon.webp')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/build.css')}}">
    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <title>{{$title}}</title>
</head>
<body>
    <main class="flex flex-col h-screen bg-[#FAF9F6]" >
    <nav class="bg-black border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/admin" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{asset('webp/logo_arceus.webp')}}" class="h-10" alt="Arceus Logo" />
                <span class="self-center text-2xl font-autur font-semibold whitespace-nowrap dark:text-white">Dashboard</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="{{asset("img/ComPP/" . auth()->user()->profil)}}"
                        alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    @auth
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{auth()->user()->fullname}}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{auth()->user()->email}}</span>
                    </div>
                    @endauth
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="/"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Main Menu</a>
                        </li>
                        <li>
                            <a href="/user/dash"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Setting</a>
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
            </div>
            <div class="items-center justify-between hidden w-full md:hidden md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium md:p-0 mt-4 border md:mr-44 border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-black md:dark:bg-black dark:border-gray-700">
                    <li>
                        <a href="/admin"
                        class="block py-2 px-3 text-white {{Request::is('admin') ? 'bg-blue-700 hover:bg-blue-800' : 'hover:bg-gray-700'}} rounded md:bg-transparent md:text-blue-700 md:p-0"
                        aria-current="page"><i class="fas fa-home"></i> Dashboard</a>
                    </li>
                    @hasrole('admin')
                    <li>
                        <a href="/admin/user"
                            class="block py-2 px-3 md:p-0 text-white {{Request::is('user') ? 'bg-blue-700 hover:bg-blue-800' : 'hover:bg-gray-700'}} md:hover:text-blue-500 hover:text-white md:hover:bg-transparent border-gray-700"><i class="fas fa-users"></i>
                            Users
                        </a>
                    </li>
                    <li>
                        <a href="/admin/support"
                            class="block py-2 px-3 md:p-0 text-white {{Request::is('support') ? 'bg-blue-700 hover:bg-blue-800' : 'hover:bg-gray-700'}} md:hover:text-blue-500 hover:text-white md:hover:bg-transparent border-gray-700"><i class="fas fa-headset"></i>
                            Support Center
                        </a>
                    </li>
                    <li>
                        <a href="/admin/logs"
                            class="block py-2 px-3 md:p-0 text-white {{Request::is('logs') ? 'bg-blue-700 hover:bg-blue-800' : 'hover:bg-gray-700'}} md:hover:text-blue-500 hover:text-white md:hover:bg-transparent border-gray-700"><i class="fas fa-history"></i>
                            Activity Logs
                        </a>
                    </li>
                    @endhasrole
                    <li>
                        <a href="/admin/customer"
                            class="block py-2 px-3 md:p-0 text-white {{Request::is('customer') ? 'bg-blue-700 hover:bg-blue-800' : 'hover:bg-gray-700'}} md:hover:text-blue-500 hover:text-white md:hover:bg-transparent border-gray-700"><i class="fas fa-shopping-cart"></i>
                            Customers
                        </a>
                    </li>
                    <li>
                        <a href="/admin/ongoing"
                            class="block py-2 px-3 md:p-0 text-white {{Request::is('ongoing') ? 'bg-blue-700 hover:bg-blue-800' : 'hover:bg-gray-700'}} md:hover:text-blue-500 hover:text-white md:hover:bg-transparent border-gray-700"><i class="fas fa-spinner"></i>
                            Ongoing Order
                        </a>
                    </li>
                    <li>
                        <a href="/admin/order_complete"
                            class="block py-2 px-3 md:p-0 text-white {{Request::is('order_complete') ? 'bg-blue-700 hover:bg-blue-800' : 'hover:bg-gray-700'}} md:hover:text-blue-500 hover:text-white md:hover:bg-transparent border-gray-700"><i class="fas fa-check"></i>
                            Order Complete
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="grid grid-cols-5 h-full">
        <aside class="bg-[#CEB23D] hidden md:flex flex-col">
            <ul class="p-5">
            <li class="mb-5"><a class="font-semibold font-poppins text-lg hover:bg-[rgba(255,255,255,0)] text-white {{Request::is('admin') ? 'underline underline-offset-4' : ''}} hover:text-gray-200" href="/admin"><i class="fas fa-home"></i> Dashboard</a></li>
            @hasrole('admin')
            <li class="mb-5"><a class="font-semibold font-poppins text-lg text-white hover:text-gray-200 {{Request::is('user') ? 'underline underline-offset-4' : ''}}" href="/admin/user"><i class="fas fa-users"></i> Users</a></li>
            <li class="mb-5"><a class="font-semibold font-poppins text-lg text-white hover:text-gray-200 {{Request::is('support') ? 'underline underline-offset-4' : ''}}" href="/admin/support"><i class="fas fa-headset"></i> Support Center</a></li>
            <li class="mb-5"><a class="font-semibold font-poppins text-lg text-white hover:text-gray-200 {{Request::is('logs') ? 'underline underline-offset-4' : ''}}" href="/admin/logs"><i class="fas fa-history"></i> Activity logs</a></li>
            @endhasrole
            <li class="mb-5"><a class="font-semibold font-poppins text-lg text-white hover:text-gray-200 {{Request::is('customer') ? 'underline underline-offset-4' : ''}}" href="/admin/customer"><i class="fas fa-shopping-cart"></i> Customers</a></li>
            <li class="mb-5"><a class="font-semibold font-poppins text-lg text-white hover:text-gray-200 {{Request::is('ongoing') ? 'underline underline-offset-4' : ''}}" href="/admin/ongoing"><i class="fas fa-spinner"></i> Ongoing Order</a></li>
            <li class="mb-5"><a class="font-semibold font-poppins text-lg text-white hover:text-gray-200 {{Request::is('order_complete') ? 'underline underline-offset-4' : ''}}" href="/admin/order_complete"><i class="fas fa-check"></i> Order Complete</a></li>
            </ul>
        </aside>
        <main class="col-span-5 md:col-span-4">
            @yield('content')
        </main>
    </section>


</main>


    <script src="https://kit.fontawesome.com/65fd5af23f.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>