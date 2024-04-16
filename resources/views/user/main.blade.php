<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/build.css') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <title>{{ $title }}</title>
</head>

<body>


    <nav class="fixed top-0 z-50 w-full border-b bg-gray-800 border-gray-700">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm rounded-lg sm:hidden focus:outline-none focus:ring-2 text-gray-400 hover:bg-gray-700 focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="/" class="flex ms-2 md:me-24">
                        <img src="{{ asset('webp/logo_arceus.webp') }}" class="h-10" alt="Arceus Logo" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-white">Dashboard</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="{{ asset('img/ComPP/' . auth()->user()->profil) }}" alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none divide-y rounded shadow bg-gray-700 divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-white" role="none">
                                    {{ $user->fullname }}
                                </p>
                                <p class="text-sm font-medium truncate text-gray-300" role="none">
                                    {{ $user->email }}
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="/"
                                        class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-600 hover:text-white"
                                        role="menuitem">Main Menu</a>
                                </li>
                                @hasrole(['admin', 'worker'])
                                <li>
                                  <a href="/admin"
                                      class="block px-4 py-2 text-sm hover:bg-gray-600 text-gray-200 hover:text-white">Dashboard</a>
                              </li>
                                @endhasrole
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button
                                            class="px-4 w-full flex justify-start py-2 text-sm hover:bg-gray-600 text-gray-200 hover:text-white">
                                            Sign out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-r sm:translate-x-0 bg-gray-800 border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#acc"
                        class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                        <svg class="w-5 h-5 transition duration-75 text-gray-400 group-hover group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">My Account</span>
                    </a>
                </li>
                <li>
                    <a href="#riview"
                        class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 transition duration-75 text-gray-400 group-hover group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Riview</span>
                        @if ($riviews->count() > 0)
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium rounded-full bg-blue-900 text-blue-300">{{ $riviews->count() }}</span>
                        @endif
                    </a>
                </li>
            </ul>
        </div>
    </aside>


    @yield('content')


    <script src="https://kit.fontawesome.com/65fd5af23f.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>
