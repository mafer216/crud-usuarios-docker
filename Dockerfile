
# Imagen base con PHP y Apache
FROM php:8.2-apache

# Instala extensiones necesarias para MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copia los archivos del CRUD al contenedor
COPY . /var/www/html/

# Expone el puerto 80
EXPOSE 80


