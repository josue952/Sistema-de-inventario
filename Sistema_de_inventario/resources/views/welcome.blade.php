<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario</title>
    <!--Este codigo sirve para indicar que estilos usara Tailwind y en donde se ubica-->
    @vite('resources/css/app.css')
</head>
<!--Pequeña demostracion de como se puede utilizar php y html juntos,
si no se coloca el '@php' y su finalizacion '@endphp', el codigo php no se ejecutara, solo se mostrara en la pagina -->
@php $nombre = 'Pepe'; @endphp
<body>
    
    <h1 class="text-3xl font-bold">Hola {{$nombre}}</h1>    

</body>
</html>
