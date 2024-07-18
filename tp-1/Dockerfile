# Utiliser une image de base PHP avec Apache
FROM php:8.3-apache
WORKDIR /var/www/html

# Installer les extensions nécessaires pour PHP
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copier le contenu du projet dans le répertoire par défaut de l'Apache dans le conteneur
COPY . /var/www/html/

# Copier la configuration d'Apache
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Installer les dépendances Composer
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Configurer les permissions
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

# Activer les modules Apache nécessaires
RUN a2enmod rewrite

# Exposer le port 80
EXPOSE 80
