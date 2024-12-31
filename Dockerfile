# Gunakan PHP 8.2 sebagai base image
FROM php:8.2-fpm

RUN php -v
# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN composer --version

# Ekspor port untuk PHP-FPM
EXPOSE 9000

# Jalankan PHP-FPM
CMD ["php-fpm"]