# Sistema-de-inventario
Este es el proyecto final de DAW en el cual se debe de crear un sistema de inventario.

Principales funciones que contendra nuestro sistema de inventario:
-Registro de productos.
-Gestion de Entradas y Salidas.
-Asignación de tiendas, bodegas u otras localizaciones.
-Control de precios y stock.
-Reportes y analisis sobre el estado del inventario.
-Notificaciones y alertas.

Tecnologias a utilizar:
-Lenguajes: PHP
-Frameworks: Laravel
-Librerias: Composer 
-Utilidades: Tailwind

Base de datos a utilizar:
-MySQL

¿Como inicializar el proyecto?
Primero que nada abriremos nuestro repositorio alojado en github, (Por ejemplo dentro de la Carpeta 'GitHub' que se encuentra en Documentos) accedemos a nuestra carpeta
donde se encuentra el proyecto... ¡¡Importante!! todo esto lo debemos de ejecutar DENTRO DE NUESTRO PROYECTO DE LARAVEL, por ejemplo si tengo mi repositorio con 
nombre 'sistema' y dentro de dicha carpeta se encuentra nuestro proyecto de laravel, el codigo que ejecutaremos en nuestra terminal debera de ser similar a este:
'cd C:\"ruta de Docuentos"\GitHub\sistema\proyecto-laravel' una vez estemos seguros de estar en nuestro ptoyecto laravel deberemos de ejecutar los siguientes comandos:
PRIMERA ALTERNATIVA:
{
Ejecutar:

- 'php artisan serve' <-- sirve para crear un servidor local donde se visualizara laravel sin utilizar Apache u otros similares.
- 'npm run dev' <-- sirve para permitir que se ejecuten los estilos facilitados por Tailwind

Todo lo anterior es para ejecutar el proyecto sin necesidad de ejecutar apache (utilizando localhost/*url del sitio) para ejecutar el proyecto, sin contar que se
debera de colocar dicho proyecto dentro de 'htdocs' en caso de utilizar xampp.

}
SEGUNDA ALTERNATIVA:
{
Ejecutar

- 'npm run dev' <-- sirve para permitir que se ejecuten los estilos facilitados por Tailwind
- Ingresar a tu navegador de preferencia e ingresar la siguiente url (en caso que utilices xampp o similares)
'http://localhost/Sistema-de-inventario/Sistema_de_inventario/public/'

Todo lo anterior es para ahorrarse activar una linea de comando y si es usuario prefiere ejecutar la aplicacion desde xampp u similares aplicaciones.

}

Ambas alternativas deberas de activar siempre tu gestor de base de datos preferida, en nuestro caso sera MySQL.

