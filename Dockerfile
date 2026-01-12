FROM php:8.2.12-cli

RUN apt-get update && apt-get install -y --no-install-recommends \
    git unzip libzip-dev \
    procps psmisc \
  && docker-php-ext-install zip \
  && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

ENV COMPOSER_ALLOW_SUPERUSER=1 \
    COMPOSER_HOME=/tmp

EXPOSE 8000

# Keep the container alive for VS Code; you run artisan from terminal
CMD ["bash", "-lc", "sleep infinity"]