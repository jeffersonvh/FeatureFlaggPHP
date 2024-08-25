# Usar uma imagem oficial do PHP com Apache
FROM php:8.2-apache

# Instalar extensões do PHP necessárias
RUN docker-php-ext-install pdo pdo_mysql

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir o diretório de trabalho
WORKDIR /var/www/html

# Copiar os arquivos do projeto para o diretório de trabalho
COPY . .

# Instalar as dependências do Composer
RUN composer install

# Expor a porta padrão do Apache
EXPOSE 80

# Comando para iniciar o servidor Apache
CMD ["apache2-foreground"]
