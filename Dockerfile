# Use an official PHP runtime with necessary extensions
FROM php:8.2-fpm

# Install system dependencies and required PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    libpng-dev \
    libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install pdo pdo_mysql zip gd intl

# Install Composer
COPY --from=composer:2.6 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy Laravel app to the container
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions for Laravel storage and cache directories
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port 8000
EXPOSE 8000

# Start the PHP server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
