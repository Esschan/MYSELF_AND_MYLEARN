# Gunakan sistem operasi Linux dasar yang sudah terinstal PHP 8.2 dan Apache Web Server
FROM php:8.2-apache

# Menginstal program-program tambahan yang dibutuhkan Laravel (seperti zip)
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    curl

# Mengaktifkan fitur PHP tambahan
RUN docker-php-ext-install zip pdo_mysql

# Memasang Composer (Manajer paket untuk PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Menentukan folder kerja di dalam server
WORKDIR /var/www/html

# Menyalin semua file proyekmu ke dalam server
COPY . .

# Mengunduh modul-modul Laravel
RUN composer install --no-dev --optimize-autoloader

# Memasang Node.js (untuk memproses Tailwind CSS dan Vite)
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Menjalankan build CSS dan JS agar siap dipakai
RUN npm install && npm run build

# Memberi izin baca-tulis untuk folder cache Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Memberi tahu Apache agar menjadikan folder /public sebagai folder utama web
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Mengaktifkan URL cantik Laravel
RUN a2enmod rewrite

# Membuka jalur komunikasi (Port) web
EXPOSE 80
