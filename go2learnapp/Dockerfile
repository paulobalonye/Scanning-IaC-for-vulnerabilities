# Use an official PHP runtime as the base image
FROM php:7.4-apache

# Install required packages and enable PHP extensions
RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        unzip \
        libicu-dev \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libonig-dev && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install -j$(nproc) \
        gd \
        intl \
        pdo_mysql \
        zip \
        bcmath \
        mbstring \
        exif

# Enable Apache modules and configure document root
RUN a2enmod rewrite && \
    sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Copy the application code and the environment file
COPY . /var/www/html
COPY .env.example /var/www/html/.env

# Update permissions and ownership
RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install project dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port 80 and start Apache
EXPOSE 80
CMD ["apache2-foreground"]
