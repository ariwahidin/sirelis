# Gunakan PHP 8.2 sebagai base image
FROM php:8.2-fpm

RUN php -v

# Install dependensi yang diperlukan oleh PHP-FPM
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip


# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer --version

RUN composer 

# Set working directory di dalam container
WORKDIR /var/www/html

# Copy file composer.json dan composer.lock ke dalam container
COPY composer.json composer.lock ./

# install dependensi composer
RUN composer install

# Ekspor port untuk PHP-FPM
EXPOSE 9000

# Jalankan PHP-FPM
CMD ["php-fpm"]