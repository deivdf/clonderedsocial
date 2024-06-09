@extends('layouts.app')


@section('Titulo')
    Bienvenido
@endsection

@section('contenido')
    <div class="flex gap-2 justify-between">
        <div class="text-center place-content-center ">
            <p class="text-white">
                "¡Bienvenidos a nuestro mundo digital! 🌟 Prepárate
                 para sumergirte en un océano de
                 inspiración, diversión y conocimiento. En este espacio, 
                 encontrarás todo lo que 
                 necesitas para alimentar tu curiosidad, 
                impulsar tu creatividad y conectar con una 
                comunidad apasionada. ¡Únete a nosotros y descubre un 
                universo lleno de posibilidades! 💫 #InspiraConectaCrea"
            </p>
        </div>
        <div class="">
            <img src="{{asset('img/background.jpg')}}" alt="imagen" class="w-max h-max">
        </div>
    </div>
@endsection