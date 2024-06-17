@extends('layouts.app')


@section('Titulo')
    Tu muro
@endsection
@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush


@section('contenido')
    <div class="bg-gray-200 h-full p-12">
        <div class="container mx-auto px-4 items-center ">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-4">
                <!-- Contenido del muro -->
                <div class="bg-white rounded-lg shadow-md mb-4">
                    <form action="{{ route('images.store') }}" id="dropzone" class="dropzone border-dashed
                     border-2 w-full h-96 flex flex-col justify-center items-center">
                        @csrf
                    </form>
                </div>
                <div class="bg-white rounded-lg shadow-md mb-4 text-center">
                    <h5 class="text-lg font-bold p-4">Crear una nueva publicación</h5>
                    <form action="{{ route('images.store') }}" method="post">
                      @csrf
                      <div class="p-4">
                        <textarea name="Textarea" id="Textarea" type="textarea" cols="30" rows="5" class="w-full p-2" placeholder="Escribe algo...">{{old('Textarea')}}</textarea>
                        @error('Textarea') <span class="text-red-500">{{ $message }}</span> @enderror
                      </div>    
                      <div class="px-4 py-10">
                        <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded" value="Crear publicacion"/>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection