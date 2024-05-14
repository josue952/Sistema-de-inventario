@extends('layouts.app')
@section('content')
<div class="container py-6 flex justify-center">
@vite(['resources/css/app.css'])
    <div class="w-full max-w-xs">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('usuarios.store') }}">
            @csrf
            <!--Nombre-->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Nombre">
                    Nombre
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Nombre" name="Nombre" type="text" placeholder="Nombre">
            </div>
            <!--Apellido-->
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Apellido">
                    Apellido
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Apellido" name="Apellido" type="text" placeholder="Apellido">
            </div>
            <!--Crear Nuevo Usuario-->
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Añadir Usuario
                </button>
            </div>
        </form>
    </div>
</div>
@endsection