# Getting the latest php image 8.2
FROM php:8.2-apache

# Installing the PHP dependencies
RUN apt-get update && apt-get install -y \
    zip unzip curl git libpq-dev libpng-dev \
    && docker-php-ext-install pdo pdo_mysql gd

# Installing composer 
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Setting up the Apache configuration for read and write
RUN a2enmod rewrite

# Defining the final working directory
WORKDIR /var/www/html

# Copying the files to the container
COPY . .

# Installing the application dependencies via composer
RUN composer install --no-dev --optimize-autoloader

# Allowing permissions 
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exposing the port
EXPOSE 8000

# Initializing the application
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
