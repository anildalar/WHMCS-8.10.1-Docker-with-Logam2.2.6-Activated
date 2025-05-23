#!/bin/bash
# Entrypoint script to set permissions and start Apache

export EDITOR=nano

# Set permissions for WHMCS directories
chown -R www-data:www-data /var/www/html
chmod -R 755 /var/www/html

# Start cron service
service cron start

# Execute the provided command (in this case, start Apache)
exec "$@"
