@extends('layouts.app')


@section('Titulo')
    Inicia tu Sesión
@endsection


@section('contenido')
    <div class="flex justify-center p-5">
        <div class="w-1/3 bg-white p-5  shadow-xl rounded-lg">
            <h2 class="text-2xl font-bold text-center"> Iniciar Sesión </h2>
            <form class="mt-5">
                <div class="mb-4">
                    <label for="email" class="block text-sm font-bold text-gray-600"> Email </label>
                    <input type="email" name="email" id="email" class="form-input mt-1 block w-full rounded border-gray-300 p-2 border" placeholder="Tu email">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-bold text-gray-600"> Contraseña </label>
                    <input type="password" name="password" id="password" class="form-input mt-1 block w-full rounded border-gray-300 p-2 border" placeholder="Tu contraseña">
                </div>
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Iniciar Sesión </button>
                </div>
            </form>
        </div>
    </div>
@endsection