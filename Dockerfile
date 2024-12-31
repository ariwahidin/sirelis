# Gunakan PHP 8.2 sebagai base image
FROM php:8.3-fpm

RUN php -v

# Activate extensi PHP yang dibutuhkan oleh Laravel
# RUN apt-get install -y \
#     libpq-dev  libpq-dev \
#     && docker-php-ext-install pdo_mysql pdo_pgsql


# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer --version

RUN composer 

# Set working directory di dalam container
WORKDIR /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Copy file composer.json dan composer.lock ke dalam container
COPY composer.json composer.lock ./



# install dependensi composer
RUN composer install

# Ekspor port untuk PHP-FPM
EXPOSE 9000

# Jalankan PHP-FPM
CMD ["php-fpm"]