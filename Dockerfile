# Use the official PHP image with Apache
FROM php:8.1-apache

# Install required system dependencies
RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    && docker-php-ext-install zip

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Install Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Configuration for Xdebug
RUN echo "xdebug.mode=debug" >> /usr/local/etc/pompohp/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.client_host=192.168.50.177" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini


# Start Apache
CMD ["apache2-foreground"]
