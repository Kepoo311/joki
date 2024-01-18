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
       <link href="https://fonts.googleapis.com/css2?family=Autour+One&family=Montserrat:wght@300&family=Nunito&family=Poppins:ital,wght@0,200;1,300&family=Quicksand&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <title>Anjay</title>
</head>
<body>
    <main>
    <main class="grid grid-cols-1 md:grid-cols-2 min-h-screen bg-gradient-to-r from-[rgb(25,25,25)] to-[rgb(59,58,58)] " >
        <section class="flex justify-center items-center" id="particles-js">
            <img class="absolute w-[25rem] h-auto" src="img/logo_arceus.png" alt="">
        </section>
        <section class="flex flex-col" >
            <h1 class="text-center mt-20 font-monts font-semibold text-white text-4xl">LOGIN</h1>

            <form class="m-20 h-fit" action="/login" method="post">

                @error("errorLogin") 
                <div id="alert-2" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                      {{$message}}
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                      <span class="sr-only">Close</span>
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                    </button>
                  </div>
                  @enderror

                @if(session()->has("succesMSG")) 
                <div id="alert-2" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                      {{session("succesMSG")}}
                    </div>
                    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                      <span class="sr-only">Close</span>
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                    </button>
                  </div>
                  @endif

                @csrf
                <div class="mb-6" >
                <label class="block mb-2 text-white font-monts font-medium" for="username">Username</label>
                    <input class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md @error('username') is-invalid @enderror" 
                    type="text" name="username" id="username" placeholder="Your Username...." value="{{old('username')}}">
                    @error('username')
                        <h1 class="text-red-500 font-bold">{{$message}}</h1>
                    @enderror
                </div>
                <div class="mb-6" >
                <label class="block mb-2 text-white font-monts font-medium" for="password">Password</label>
                    <input class="bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md font-monts text-black" type="password" name="password" id="password" placeholder="Your Password...." required>
                </div>
                <button class="bg-red-500 duration-500 hover:bg-red-600 font-monts p-3 w-full text-white text-medium rounded-lg">Login</button>
                <p class="text-medium font-monts text-white mt-3 text-sm" >Don`t have an account? <a class="text-red-500 font-bold hover:underline" href="/register">Register here.</a></p>
            </form>
        </section>
    </main>
    </main>

    <script src="js/particles.js"></script>
    <script src="js/app.js"></script>
    <script src="https://kit.fontawesome.com/65fd5af23f.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>