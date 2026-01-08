FROM php:8.2.12-cli

# Install system deps needed for Composer and Laravel.
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libzip-dev \
    && docker-php-ext-install zip \
    && rm -rf /var/lib/apt/lists/*

# Install Composer.
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Allow Composer to run as root in Docker and keep its home writable.
ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_HOME=/tmp

# Create a Laravel 8 skeleton, then pin framework to 8.83.29.
RUN rm -rf /var/www/html/* \
    && composer create-project laravel/laravel . "8.*" --no-interaction --prefer-dist --no-audit \
    && composer config audit.ignore '["PKSA-8qx3-n5y5-vvnd"]' \
    && composer config audit.block-insecure false \
    && composer require laravel/framework:"8.83.29" --no-interaction --prefer-dist --no-audit

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
