# Use the official PHP image with Apache
FROM php:8.1-apache

# Install system dependencies and PHP extensions in a single RUN command
RUN apt-get update && apt-get install -y \
    wget unzip nano vim cron \
    libpng-dev libjpeg-dev libfreetype6-dev libonig-dev \
    libxml2-dev libzip-dev libicu-dev libutf8proc-dev \
    zip libcurl4-openssl-dev pkg-config libssl-dev \
    libc-client-dev libkrb5-dev krb5-multidev libgmp-dev libmagickwand-dev \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure imap --with-kerberos --with-imap=/usr --with-imap-ssl \
    && docker-php-ext-install -j$(nproc) \
        bcmath curl gd imap intl mbstring mysqli \
        pdo pdo_mysql soap zip gmp opcache xml \
        iconv fileinfo exif \
    && rm -rf /var/lib/apt/lists/*

# Download and install IonCube Loader
RUN wget -q https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz \
    && tar -zxf ioncube_loaders_lin_x86-64.tar.gz \
    && mv ioncube /usr/local \
    && echo "zend_extension = /usr/local/ioncube/ioncube_loader_lin_8.1.so" > /usr/local/etc/php/conf.d/00-ioncube.ini \
    && rm -rf ioncube_loaders_lin_x86-64.tar.gz

# Set Apache document root and enable mod_rewrite
ENV APACHE_DOCUMENT_ROOT /var/www/html
RUN a2enmod rewrite

# Set up cron job for WHMCS
RUN echo "*/5 * * * * php -q /var/www/html/crons/cron.php" | crontab -

# Copy and set up entrypoint script
COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]

# Use entrypoint script
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]
