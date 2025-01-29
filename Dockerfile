# Use a base PHP image with Apache
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    git \
    curl \
    nodejs \
    npm \
    && docker-php-ext-install zip pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /var/www/html

# Set permissions for the project
RUN chown -R www-data:www-data /var/www/html

# Expose the default Apache port
EXPOSE 80