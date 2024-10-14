FROM php:8.3-fpm

ENV DEBIAN_FRONTEND noninteractive

# Install and enable Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Configure PHP settings
COPY php.ini /usr/local/etc/php/php.ini

RUN curl -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x /usr/local/bin/wp


# Change the UID and GID of the www-data user to match the host
RUN usermod -u 1000 www-data && groupmod -g 1000 www-data
RUN find / \( -path /proc -o -path /sys -o -path /dev -o -path /run \) -prune -o -user 33 -exec chown -h www-data {} \;
RUN find / \( -path /proc -o -path /sys -o -path /dev -o -path /run \) -prune -o -group 33 -exec chgrp -h www-data {} \;

# Expose PHP-FPM ports
EXPOSE 9000
EXPOSE 9003

CMD ["php-fpm"]
