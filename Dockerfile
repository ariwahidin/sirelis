# Gunakan PHP 8.2 sebagai base image
FROM php:8.2-fpm

RUN php -v
# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer --version

RUN composer 

# Install dependensi yang diperlukan
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# install dependensi composer
RUN composer install

# Ekspor port untuk PHP-FPM
EXPOSE 9000

# Jalankan PHP-FPM
CMD ["php-fpm"]