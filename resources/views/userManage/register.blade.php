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
            <h1 class="text-center mt-20 font-monts font-semibold text-white text-4xl">REGISTER</h1>

            <form class="m-20 h-fit" action="/register" method="post">
                @csrf
                <input type="hidden" name="role" value="user">
                <div class="mb-6 grid grid-cols-2 gap-4">
                    <label class="block mb-2 text-white font-monts text-sm font-medium" for="fullname">Fullname
                    <input value="{{old("username")}}" class="@error('fullname') is-invalid @enderror bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md" type="text" name="fullname" id="fullname" placeholder="Your fullname....">
                    @error('fullname')
                        <p class="text-red-500 font-bold font-monts">{{$message}}</p>
                    @enderror
                    </label>
                    <label class="block mb-2 text-white font-monts text-sm font-medium" for="username">Username
                    <input value="{{old("fullname")}}" class="@error('username') is-invalid @enderror bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md" type="text" name="username" id="username" placeholder="Your Username....">
                    @error('username')
                    <p class="text-red-500 font-bold font-monts">{{$message}}</p>
                @enderror
                    </label>
                </div>
                <div class="mb-6" >
                <label class="block mb-2 text-white font-monts text-sm font-medium" for="email">Email</label>
                    <input value="{{old("email")}}" class="@error('email') is-invalid @enderror bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md font-monts text-black" type="email" name="email" id="email" placeholder="Your email....">
                    @error('email')
                        <p class="text-red-500 font-bold font-monts">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6" >
                <label class="block mb-2 text-white font-monts text-sm font-medium" for="whatsapp">No. Whatsapp</label>
                    <input value="{{old("noTelpon")}}" class="@error('noTelp') is-invalid @enderror bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md font-monts text-black" type="tel" pattern="[0-9]{12}" name="noTelpon" id="whatsapp" placeholder="Your whatsapp....">
                    @error('noTelpon')
                        <p class="text-red-500 font-bold font-monts">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-6 grid grid-cols-2 gap-4" >
                <label class="block mb-2 text-white font-monts text-sm font-medium" for="password">Password
                    <input class="@error('password') is-invalid @enderror bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md font-monts text-black" type="password" name="password" id="password" placeholder="Your Password....">
                    @error('password')
                        <p class="text-red-500 font-bold font-monts">{{$message}}</p>
                    @enderror
                </label>
                <label class="block mb-2 text-white font-monts text-sm font-medium" for="Confpassword">Confirm Password
                    <input class="@error('password_confirmation') is-invalid @enderror bg-[rgb(210,180,180)] w-full border-1 border-red-500 rounded-md font-monts text-black" type="password" name="password_confirmation" id="Confpassword" placeholder="Confirm your Password....">
                    @error('password_confirmation')
                        <p class="text-red-500 font-bold font-monts">{{$message}}</p>
                    @enderror
                </label>
                </div>
                <button class="bg-red-500 duration-500 hover:bg-red-600 font-monts p-3 w-full text-white text-medium rounded-lg">Login</button>
                <p class="text-medium font-monts text-white mt-3 text-sm" >Already have an account? <a class="text-red-500 font-bold hover:underline" href="/login">Login here.</a></p>
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