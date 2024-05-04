@extends('user.main')

@section('content')
    @if (session()->has('success'))
        <div id="toast-success"
            class="fixed top-5 left-5 z-[999] flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{ session('success') }}</div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    <div id="acc" class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            <header>
                <h1 class="font-poppins font-semibold text-xl">My Account</h1>
            </header>

            <div class="grid justify-items-center grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">

                <section class="m-3 p-2 h-fit w-80 bg-gray-800 shadow-xl rounded-md">

                    <div class="flex flex-col border-b-2 py-5">
                        <img class="w-20 h-20 rounded-full self-center"
                            src="{{ asset('img/ComPP/' . auth()->user()->profil) }}" alt="user photo">
                        <h3 class="font-poppins text-md text-white text-center mt-2">{{ $user->username }}</h3>
                        <h4 class="font-poppins text-sm text-white text-center">{{ $user->email }}</h4>
                    </div>

                    <div class=" m-3">
                        <p class="text-sm font-poppins text-gray-200">
                            Fullname : {{ $user->fullname }}
                        </p>
                        <p class="text-sm font-poppins text-gray-200">
                            Created at : {{ $user->created_at }}
                        </p>
                    </div>
                </section>

                <section class="m-3 p-2 h-fit w-80 bg-gray-800 shadow-xl rounded-md">

                    <div class="flex flex-col border-b-2 py-5">
                        <h1 class="text-center font-poppins text-white text-5xl"> {{ $ortal }} </h1>
                        <h3 class="font-poppins text-md text-white text-center mt-2">Total order</h3>
                        <h4 class="font-poppins text-sm text-white text-center">
                            {{ $ortal > 0 ? 'Keep it up kiddo!' : "You haven't ordered anything yet!!" }}</h4>
                    </div>

                    <div class=" m-3">

                    </div>
                </section>

                <section class="m-3 p-2 h-fit w-80 bg-gray-800 shadow-xl rounded-md">

                    @if (session()->has('error'))
                        <div id="alert-2"
                            class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                            role="alert">
                            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div class="ms-3 text-sm font-medium">
                                {{ session('error') }}
                            </div>
                            <button type="button"
                                class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                                data-dismiss-target="#alert-2" aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                    @endif

                    <div class="flex flex-col border-b-2 py-5">
                        <button id="custom_button" data-modal-target="cutomise_modal" data-modal-toggle="cutomise_modal"
                            class="bg-gray-700 font-poppins text-white px-5 py-2 rounded-lg shadow-lg duration-500 hover:bg-gray-600 focus:ring-2 focus:to-gray-600">Customise
                            your account</button>
                    </div>
                </section>
            </div>

            <div id="cutomise_modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Customise your account
                            </h3>
                            <button type="button"
                                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="cutomise_modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <form class="space-y-4" action="{{ route('account_changes') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <div>
                                    <label for="profile-input"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Change your
                                        profile</label>

                                    <img id="profile-img" class="w-24 h-24 rounded-full m-3"
                                        src="{{ asset('img/ComPP/' . auth()->user()->profil) }}" alt="user photo">

                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="profile-input" name="profil" type="file" accept=".png, .jpg, .jpeg ,.gif,.svg,.webp,.avif">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG,
                                        PNG, JPG , WEBP, AVIF or GIF (MAX. 1mb).</p>
                                    @error('profil')
                                        <h1 class="text-red-500 font-bold">{{ $message }}</h1>
                                    @enderror
                                </div>
                                <div>
                                    <label for="fullname"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Change your
                                        fullname</label>
                                    <input type="fullname" name="fullname" id="fullname"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        value="{{ $user->fullname }}" required />
                                    @error('fullname')
                                        <h1 class="text-red-500 font-bold">{{ $message }}</h1>
                                    @enderror
                                </div>
                                <div>
                                    <label for="username"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Change your
                                        username</label>
                                    <input type="username" name="username" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        value="{{ $user->username }}" required />
                                    @error('username')
                                        <h1 class="text-red-500 font-bold">{{ $message }}</h1>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Change your
                                        email</label>
                                    <input type="email" name="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        value="{{ $user->email }}" required />
                                    @error('email')
                                        <h1 class="text-red-500 font-bold">{{ $message }}</h1>
                                    @enderror
                                </div>
                                <div>
                                    <label for="noTelpon"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Change your
                                        phone number</label>
                                    <input type="noTelpon" name="noTelpon" id="noTelpon"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        value="{{ $user->noTelpon }}" required />
                                    @error('noTelpon')
                                        <h1 class="text-red-500 font-bold">{{ $message }}</h1>
                                    @enderror
                                </div>
                                <button type="submit"
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                                    changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="p-4 sm:ml-64">
        <div id="riview" class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            <header>
                <h1 class="font-poppins font-semibold text-xl">Feedback</h1>
            </header>

            <div class="grid justify-items-center grid-cols-1 lg:grid-cols-2 xl:grid-cols-3">
                @foreach ($riviews as $riview)
                    <section class="m-3 p-2 h-fit w-80 bg-gray-800 shadow-xl rounded-md">

                        <div class="flex flex-col border-b-2 py-5">
                            <img class="rounded-full w-20 h-20 self-center"
                                src="{{ asset('proCard/' . $riview->product->img) }}" alt="">
                            <h3 class="font-poppins text-md text-white text-center mt-2">{{ $riview->product->name }}</h3>
                            <h4 class="font-poppins text-sm text-white text-center">{{ $riview->rank }}</h4>
                        </div>

                        <div class="m-3">
                            <a href="/user/riview?token={{ $riview->token }}"
                                class="bg-red-600 py-2 px-4 text-white font-poppins shadow-md rounded-md hover:bg-red-700">
                                Feedback </a>
                        </div>
                    </section>
                @endforeach
            </div>
        </div>

        <script defer>
            const profile_inp = document.getElementById('profile-input');
            const profile_img = document.getElementById('profile-img');

            profile_inp.addEventListener('change', (event) => {
                profile_img.src = URL.createObjectURL(event.target.files[0]);
            })
        </script>
    @endsection
