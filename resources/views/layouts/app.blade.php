<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        @vite('resources/css/app.css')
        <title>Red-Social - @yield('Titulo')</title>
        <script href="{{asset('js/app.js')}}" defer></script>
        </style>
    </head>
    <body class="w-full h-full bg-no-repeat" style="background-image: url(/img/pexel-min.jpg); background-size: cover; background-position: center;">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/"><h1 class="text-3xl font-black"> RedSocial</h1></a>

                @auth
                    <nav class="flex gap-2 items-center">
                        <a class="text-gray-600 font-bold hover:text-indigo-600 text-sm" href=#> Hola:
                             <span class=" font-normal"> {{$user->username}}</span> 
                             </a>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <button class="text-gray-600 uppercase font-bold hover:text-indigo-600 text-sm" > cerrar sesion </button> 
                        </form>
                    </nav>
                @endauth
                @guest                    
                    <nav class="flex gap-2 items-center">
                        <a class="text-gray-600 uppercase font-bold hover:text-indigo-600 text-sm" href="{{route('login')}}"> Login </a>
                        <a class="text-gray-600 uppercase font-bold hover:text-indigo-600 text-sm" href="{{route('registro')}}"> Registro </a>
                    </nav>
                @endguest
            </div>
        </header>
        <main class="container mx-auto mt-10">
            <h2 class="text-3xl font-bold text-center text-white"> @yield('Titulo') </h2>
            <div class="mt-5">
                @yield('contenido')
            </div>
        </main>
        <footer class="mt-10 p-5 bg-white text-center font-bold">
            <div class="container mx-auto text-center">
                <p class="text-sm text-gray-600"> Todos los derechos reservados &copy; {{ now()->year }} </p>
            </div>
        </footer>
    </body>
</html>