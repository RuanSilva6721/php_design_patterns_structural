# Use a imagem oficial do PHP 8.1 como base
FROM php:8.1-apache

COPY 99-xdebug.ini "${PHP_INI_DIR}/conf.d"
# Copie os arquivos do seu projeto para o diretório de trabalho do contêiner
COPY . /var/www/html/

# Instala as dependências necessárias para o Xdebug e ferramentas de linha de comando
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install zip
# Instale o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Execute o comando composer install para instalar as dependências do projeto
RUN composer install

# Exponha a porta 9003 do contêiner
EXPOSE 9003

# Opcional: defina variáveis de ambiente ou faça outras configurações necessárias

# Inicie o servidor Apache ao iniciar o contêiner
CMD ["apache2-foreground"]