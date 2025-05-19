FROM php:8.1-apache

WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    wget \
    zip \
    unzip \
    nano \
    vim \
    libpng-dev \
    cron

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql gd

# Download the latest version of IonCube Loader
RUN wget https://downloads.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz

# Extract the downloaded file
RUN tar -zxvf ioncube_loaders_lin_x86-64.tar.gz

# Move the ionCube folder to a permanent location
RUN mv ioncube /usr/local

# Add ionCube to the PHP configuration
RUN echo "zend_extension = /usr/local/ioncube/ioncube_loader_lin_8.1.so" > /usr/local/etc/php/conf.d/00-ioncube.ini

# Clean up
RUN rm ioncube_loaders_lin_x86-64.tar.gz

# Set up cron job for WHMCS
RUN (crontab -l; echo "*/5 * * * * php -q /var/www/html/crons/cron.php") | crontab -

# Enable Apache mod_rewrite
RUN a2enmod rewrite

COPY entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]

# Use entrypoint script
ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]