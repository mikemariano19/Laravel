FROM php:8.4-fpm

# System dependencies
RUN apt-get update && apt-get install -y \
    git unzip zip curl \
    libpng-dev libonig-dev libxml2-dev \
    libsqlite3-dev sqlite3 \
    nodejs npm \
    && rm -rf /var/lib/apt/lists/*

# PHP extensions
RUN docker-php-ext-install \
    pdo pdo_sqlite mbstring bcmath gd

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy project files
COPY . .

# Install PHP deps
RUN composer install --no-dev --optimize-autoloader

# Frontend build (Vite)
RUN npm install && npm run build

# Laravel setup
RUN php artisan key:generate
RUN php artisan storage:link

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000
