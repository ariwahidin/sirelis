# Gunakan PHP 8.2 sebagai base image
FROM php:8.2-fpm

# Unduh dan instal Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Composer dependencies
RUN composer install --optimize-autoloader --no-dev

# Ekspor port untuk PHP-FPM
EXPOSE 9000

# Jalankan PHP-FPM
CMD ["php-fpm"]