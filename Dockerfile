FROM php:5.6-apache

# Use the archived repositories for Debian Stretch
RUN echo "deb http://archive.debian.org/debian/ stretch main" > /etc/apt/sources.list
RUN echo "deb http://archive.debian.org/debian-security/ stretch/updates main" >> /etc/apt/sources.list

RUN echo "date.timezone = 'Asia/Karachi'" > /usr/local/etc/php/conf.d/timezone.ini

# Install necessary dependencies
RUN apt-get update && apt-get install -y \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libmcrypt-dev \
    libicu-dev \
    libzip-dev \
    git \
    unzip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/freetype2 --with-jpeg-dir=/usr/include \
    && docker-php-ext-install gd pdo_mysql zip intl mcrypt \
    && rm -r /var/lib/apt/lists/*

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the Yii1.1 application into the container
COPY . /var/www/html

# Expose Apache port
EXPOSE 80