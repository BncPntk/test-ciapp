FROM php:8.1-apache

RUN a2enmod rewrite \
    && apt-get update \
    && apt-get install -y libicu-dev

RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl mysqli pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN mkdir -p /var/www/html/writable/cache \
    && chown -R www-data:www-data /var/www/html /var/www/html/writable

WORKDIR /var/www/html

COPY . .

RUN composer install --no-interaction --optimize-autoloader

COPY docker/apache-config.conf /etc/apache2/sites-available/000-default.conf

RUN a2ensite 000-default

CMD ["apache2-foreground"]

EXPOSE 80
