# Dockerfile
FROM php:8.1-apache

# Instalar extensiones necesarias
RUN docker-php-ext-install pdo_mysql

# Habilitar mod_rewrite para Laravel
RUN a2enmod rewrite

# Configurar ServerName para Apache
RUN echo "ServerName localhost" > /etc/apache2/conf-available/fqdn.conf && a2enconf fqdn

# Cambiar el directorio raíz del documento a la carpeta public
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Copiar la aplicación existente al contenedor
COPY . /var/www/html/

# Cambiar el propietario de todos los archivos a www-data
RUN chown -R www-data:www-data /var/www/html

# Instalar Node.js y npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash -
RUN apt-get install -y nodejs
    
# Verificar la instalación
RUN node -v
RUN npm -v

# Exponer el puerto 80
EXPOSE 80