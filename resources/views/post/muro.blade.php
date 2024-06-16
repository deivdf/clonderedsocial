@extends('layouts.app')


@section('Titulo')
    Tu muro
@endsection
@section('contenido')
    <div class="bg-gray-200 h-full">
        <div class="container mx-auto px-4 items-center ">
            <div class="grid grid-cols-2 md:grid-cols-1 gap-4 p-4">
                <!-- Contenido del muro -->
                <div class="bg-white rounded-lg shadow-md">
                    <div class="p-4">
                        <h5 class="text-lg font-bold">Nombre del usuario</h5>
                        <p class="text-gray-700">
                            Los gatitos tienen ojos grandes
                            y redondos que brillan como estrellas
                            en la noche. Sus iris pueden ser de
                            un azul intenso, verde esmeralda,
                            dorado o incluso un fascinante patrón
                            de calico. Sus pupilas pueden estar
                            tan abiertas que parece que miran 
                            directamente a tu alma.
                        </p>

                    </div>
                    <div class="px-4 py-2">
                        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">Reactar</a>
                        <a href="#" class="ml-2">Comentar</a>
                    </div>
                </div>
    
                <!-- ... Mas publicaciones -->
            </div>
        </div>
    </div>
@endsection