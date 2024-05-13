<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario</title>
    <!--Este codigo sirve para indicar que estilos usara Tailwind y en donde se ubica-->
    @vite('resources/css/app.css')
</head>
<body>
<section class="">
    <div class=" items-center px-5 py-12 lg:px-20">
        <div class="flex flex-col w-full max-w-md p-10 mx-auto my-6 transition duration-500 ease-in-out transform bg-white rounded-lg md:mt-0">
            <div class="mt-8">
                <div class="mt-6">
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="email" class="block text-sm font-medium text-neutral-600"> Correo Electronico </label>
                            <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" required="" placeholder="juanperez@gmail.com" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                            </div>
                        </div>

                        <div class="space-y-1">
                            <label for="password" class="block text-sm font-medium text-neutral-600"> Contraseña </label>
                            <div class="mt-1">
                                <input id="password" name="password" type="password" autocomplete="current-password" required="" placeholder="Contraseña123" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox" placeholder="Your password" class="w-4 h-4 text-blue-600 border-gray-200 rounded focus:ring-blue-500">
                                <label for="remember-me" class="block ml-2 text-sm text-neutral-600"> Recordar usuario </label>
                            </div>

                            <div class="text-sm">
                                <a href="#" class="font-medium text-blue-600 hover:text-blue-500"> Olvidaste tu contraseña? </a>
                            </div>
                        </div>

                        <div>
                            <button type="submit" class="flex items-center justify-center w-full px-10 py-4 text-base font-medium text-center text-white transition duration-500 ease-in-out transform bg-blue-600 rounded-xl hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
