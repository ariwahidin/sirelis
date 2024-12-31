# Gunakan PHP 8.2 sebagai base image
FROM php:8.2-fpm

# Install Composer dependencies
RUN composer install --optimize-autoloader --no-dev

# Ekspor port untuk PHP-FPM
EXPOSE 9000

# Jalankan PHP-FPM
CMD ["php-fpm"]