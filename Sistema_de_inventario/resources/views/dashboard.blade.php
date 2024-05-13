@extends('layouts.app')
@section('content')
<div class="container flex items-center">
    @vite(['resources/css/app.css'])
    <div class="flex h-screen bg-gray-100">
    <!--En esta seccion se encuentra la seccion para navegar entre las opciones-->
    <div class="flex flex-col w-64 bg-gray-800 text-white">
        <div class="flex items-center justify-center h-16 bg-green-600">
            <span class="text-lg font-semibold">OSWA - INVENTORY</span>
        </div>
        <ul class="flex flex-col py-4">
        <!--Aqui se agregaran los botones o listas que utilizara la aplicacion-->
        <li>
            <a href="#" class="flex items-center px-6 py-2 text-gray-200 hover:bg-gray-700">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="mr-3 h-5 w-5"
            >
                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
            Panel de control
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center px-6 py-2 text-gray-200 hover:bg-gray-700">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="mr-3 h-5 w-5"
            >
                <circle cx="7.5" cy="15.5" r="5.5"></circle>
                <path d="m21 2-9.6 9.6"></path>
                <path d="m15.5 7.5 3 3L22 7l-3-3"></path>
            </svg>
            Accesos
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center px-6 py-2 text-gray-200 hover:bg-gray-700">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="mr-3 h-5 w-5"
            >
                <path d="m15 5 6.3 6.3a2.4 2.4 0 0 1 0 3.4L17 19"></path>
                <path d="M9.586 5.586A2 2 0 0 0 8.172 5H3a1 1 0 0 0-1 1v5.172a2 2 0 0 0 .586 1.414L8.29 18.29a2.426 2.426 0 0 0 3.42 0l3.58-3.58a2.426 2.426 0 0 0 0-3.42z"></path>
                <circle cx="6.5" cy="9.5" r=".5" fill="currentColor"></circle>
            </svg>
            Categorías
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center px-6 py-2 text-gray-200 hover:bg-gray-700">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="mr-3 h-5 w-5"
            >
                <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path>
                <path d="m3.3 7 8.7 5 8.7-5"></path>
                <path d="M12 22V12"></path>
            </svg>
            Productos
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center px-6 py-2 text-gray-200 hover:bg-gray-700">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="mr-3 h-5 w-5"
            >
                <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                <circle cx="9" cy="9" r="2"></circle>
                <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
            </svg>
            Media
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center px-6 py-2 text-gray-200 hover:bg-gray-700">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="mr-3 h-5 w-5"
            >
                <path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z"></path>
                <path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"></path>
                <path d="M12 17.5v-11"></path>
            </svg>
            Ventas
            </a>
        </li>
        <li>
            <a href="#" class="flex items-center px-6 py-2 text-gray-200 hover:bg-gray-700">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="mr-3 h-5 w-5"
            >
                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                <path d="M10 9H8"></path>
                <path d="M16 13H8"></path>
                <path d="M16 17H8"></path>
            </svg>
            Reporte de ventas
            </a>
        </li>
        </ul>
    </div>
    <!--En esta seccion se encuentra la seccion para mostrar la informacion-->
    <!--En este caso, la informacion de la empresa, como nombre, logo, etc-->
    <div class="flex flex-col flex-1 p-4">
        <!--En esta seccion se muestra la hora, y demas cosas importantes-->
        <div class="flex items-center justify-between">
            <h1 class="text-lg">13/08/2017 4:43 pm</h1>
            <div class="flex items-center">
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
                class="mr-4 h-6 w-6 text-gray-600"
                >
                <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9"></path>
                <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0"></path>
                </svg>
                <img
                src="/placeholder.svg"
                alt="SistemasWeb logo"
                width="20"
                height="20"
                style="aspect-ratio:20/20;object-fit:cover"
                />
            </div>
        </div>
        <!--Aqui se renderiza la informacion de la empresa-->
        <div class="flex flex-col items-center flex-1 bg-white rounded-lg shadow p-8 m-4">
            <!--Logo, nombre y slogan de la empresa-->
            <div class="flex flex-col items-center mb-8">
                <!--Logo de la empresa-->
                <img
                src="/placeholder.svg"
                alt="OSWA Logo"
                class="mb-4"
                width="60"
                height="60"
                style="aspect-ratio:60/60;object-fit:cover"
                />
                <h2 class="text-2xl font-bold text-gray-800 mb-2">OSWA - Inventory</h2>
                <p class="text-gray-600 text-center">Simplifying inventory management for businesses.</p>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <!--Mision-->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Mission</h3>
                    <p class="text-gray-600">
                        To provide a comprehensive and user-friendly inventory management solution that empowers businesses to
                        streamline their operations and make informed decisions.
                    </p>
                </div>
                <!--Vision-->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Vision</h3>
                    <p class="text-gray-600">
                        To be the leading inventory management platform that transforms the way businesses manage their
                        inventory, enabling them to achieve greater efficiency, profitability, and growth.
                    </p>
                </div>
                <!--Acerca de nosotros-->
                <div>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">About Us</h3>
                    <p class="text-gray-600">
                        OSWA - Inventory is a powerful and intuitive inventory management system designed to streamline your
                        business operations. Our mission is to provide a comprehensive solution that empowers businesses to take
                        control of their inventory, optimize their processes, and make data-driven decisions.
                    </p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
