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
-Lenguajes: PHP 8.1
-Frameworks: Laravel  
-Librerias: Composer, npm
-Utilidades: Tailwind  

Base de datos a utilizar:  
-MySQL  

ANTES QUE NADA!!!   
Es muy probable que en sus sistemas tengan una version distinta de php, por lo tanto eso significara que habran problemas para ejecutar los codigos necesarios para levantar los servidores (Primera alternativa para inicializar el proyecto), por lo tanto iremos a nuestro cmd y ejecutaremos "php -v" para saber que version de php estamos utilizando, en este proyecto estamos utilizando php 8.1... En caso que sea una version distinta a esta, tendremos 2 alternativas   
Actualizar php (No recomendado por su dificultad) y cambiar las configuraciones en "composer.json" en la parte  de "require" editaremos la version de php que tenga, por ejemplo si tiene "^8.1" y nuestra version de php es 8.2 lo cambiaremos por "^8.2".   
Una vez realizado esto, nos iremos a nuestra terminal donde tenemos alojado nuestro proyecto de laravel ('C:\"ruta de Docuentos"\GitHub\sistema\proyecto-laravel') y ejecutaremos el siguiente comando 'composer install', si hicimos todo correcto no nos saldra ningun error, todo esto se debera de hacer siempre y cuando nos de un error a la hora de levantar el server con 'php artisan serve' 

--pendiente de hacer en caso que falle el npm

Base de datos:  
Antes de iniciar primeramente deberemos de crear u ejecutar la base de datos, Laravel tiene internamente un mini "github" en el cual almacenara todos los cambios que se ha hecho a dicha base, para ello deberemos de ingresar a la consola o terminal (por ejemplo PowerShell) y ejecutaremos el siguiente comando (ya asegurandonos previamente de estar dentro de nuestro proyecto laravel 'cd C:\"ruta de Docuentos"\GitHub\sistema\proyecto-laravel') 

Aqui hay una pequeña lista de los diferentes comandos que posee 'migrate':  
'php artisan migrate' -> Ejecuta todas las migraciones pendientes y aplica los cambios al esquema de la base de datos.  
'php artisan make:migration nombre_de_la_migracion(por ejemplo: create_users_table)' ->  Crea un nuevo archivo de migración en el directorio.  
'php artisan migrate:rollback' -> Deshace la última migración aplicada.  
'php artisan migrate:reset' -> Deshace todas las migraciones aplicadas.  
'php artisan migrate:fresh' -> Elimina todas las tablas y ejecuta todas las migraciones nuevamente.  
'php artisan migrate:refresh' -> Deshace y vuelve a aplicar todas las migraciones.  
'php artisan migrate:status' -> Muestra el estado actual de las migraciones (aplicadas o pendientes).  

¿Como inicializar el proyecto?  
Primero que nada abriremos nuestro repositorio alojado en github, (Por ejemplo dentro de la Carpeta 'GitHub' que se encuentra en Documentos) accedemos a nuestra carpeta
donde se encuentra el proyecto... ¡¡Importante!! todo esto lo debemos de ejecutar DENTRO DE NUESTRO PROYECTO DE LARAVEL, por ejemplo si tengo mi repositorio con 
nombre 'sistema' y dentro de dicha carpeta se encuentra nuestro proyecto de laravel, el codigo que ejecutaremos en nuestra terminal debera de ser similar a este: 
'cd C:\"ruta de Docuentos"\GitHub\sistema\proyecto-laravel'  una vez estemos seguros de estar en nuestro ptoyecto laravel deberemos de ejecutar los siguientes comandos:  

PRIMERA ALTERNATIVA: 
{  
Ejecutar:  
- 'php artisan serve' <-- sirve para crear un servidor local donde se visualizara laravel sin utilizar Apache u otros similares.  
- 'npm run dev' <-- sirve para permitir que se ejecuten los estilos facilitados por Tailwind  

Todo lo anterior es para ejecutar el proyecto sin necesidad de ejecutar apache (utilizando localhost/*url del sitio) para ejecutar el proyecto, sin contar que se debera de colocar dicho proyecto dentro de 'htdocs' en caso de utilizar xampp.  
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

NOTA: Si quieres admiistrar la base de datoso ver sus cambios deberas de hacerlo desde MySQL.   

Utilidades o comandos de Laravel:  
'php artisan make:model NombreDelModelo' -> Crea un nuevo modelo en la carpeta app/Models. Si deseas generar también una migración para la tabla asociada, puedes agregar la opción -m al comando, por ejemplo 'php artisan make:model NombreDelModelo -m'.  
'php artisan make:controller NombreDelControlador' -> Crea un nuevo controlador en la carpeta app/Http/Controllers.  
'php artisan make:factory NombreDeLaFactory' -> Crea una nueva factory para generar datos de prueba.  
'php artisan make:seeder NombreDelSeeder' -> Crea un nuevo seeder para poblar la base de datos con datos de prueba.   
'php artisan key:genera' -> Genera una nueva clave de aplicación en el archivo .env.  
'php artisan optimize' -> Optimiza el rendimiento de la aplicación al compilar rutas y vistas.  
'php artisan route:list' -> Muestra una lista de todas las rutas registradas en la aplicación.  
'php artisan make:controller NombreDelControlador --resource' -> Crea un controlador con métodos para las operaciones CRUD (create, read, update, delete).   
'php artisan make:model NombreControlador -mcr' -> Similar a los anteriores, pero este creo el modelo(m), controlador(c) y los recursos(r) de una misma vez  


