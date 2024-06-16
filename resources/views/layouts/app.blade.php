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
                        <div
                        class="rounded py-1 px-2 shadow flex justify-between hover:bg-gray-200 "
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                               <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                               <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                             </svg>
                          
                            <a class="px-2" href="{{route('post.create')}}">
                                Crear
                            </a>
                        </div>
                        <a class="text-gray-600 font-bold hover:text-indigo-600 text-sm" href=#> Hola:
                            <span class=" font-normal"> {{auth()->user()->username}}</span> 
                        </a>
                        <a class="text-gray-600 uppercase font-bold hover:text-indigo-600 text-sm" href="{{route('logout')}}"> cerrar sesion </a>
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