#para el backend de la aplicación
# Usar la imagen base oficial de PHP con Apache
FROM php:8.0-apache

# Instalar extensiones necesarias para Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Habilitar mod_rewrite para Apache (útil para las rutas amigables de Laravel)
RUN a2enmod rewrite

# Copiar la aplicación al contenedor
COPY . /var/www/html

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalar dependencias de PHP con Composer
RUN composer install --no-dev --optimize-autoloader

# Otorgar permisos adecuados a los directorios de Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exponer el puerto 80
EXPOSE 80

#para el frontend de la aplicación
# Imagen base de Node
FROM node:14

# Crear directorio de trabajo
WORKDIR /app

# Copiar archivos de configuración de Node
COPY package*.json ./

# Instalar dependencias
RUN npm install

# Copiar el resto del código fuente
COPY . .

# Construir la aplicación para producción
RUN npm run build

# Exponer el puerto utilizado por Vite
EXPOSE 3000

# Comando para ejecutar la aplicación
CMD ["npm", "run", "dev"]