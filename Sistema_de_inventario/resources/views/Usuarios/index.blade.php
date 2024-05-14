@extends('layouts.app')
@section('content')
<div class="container py-6 flex justify-center">
@vite(['resources/css/app.css'])
    <!--Empieza la tabla que almacenara los datos de todos los empleados-->
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <!--Encabezado de la tabla-->
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Apellido
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        DUI
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Contraseña
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Rol
                    </th>
                    <th scope="col" class="px-6 py-3 flex justify-center">
                        Acciones
                    </th>
                </tr>
            </thead>
            <!--Cuerpo de la tabla-->
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-4">
                        Josue
                    </td>
                    <td class="px-6 py-4">
                        Zelaya
                    </td>
                    <td class="px-6 py-4">
                        josue.zelaya23@itca.edu.sv
                    </td>
                    <td class="px-6 py-4">
                        123456789
                    </td>
                    <td class="px-6 py-4">
                        josue0074
                    </td>
                    <td class="px-6 py-4">
                        Administrador
                    </td>
                    <td class="px-6 py-4">
                        <button class="btn text-amber-300 px-1"><a href="#">Editar</a></button>
                        
                        <button class="btn text-red-600 px-1"><a href="#">Eliminar</a></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection