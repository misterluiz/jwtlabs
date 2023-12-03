# Use a imagem base PHP com Apache
FROM php:7.4-apache

# Instale as dependências do Composer
RUN apt-get update && \
    apt-get install -y unzip && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copie os arquivos necessários para o diretório padrão do Apache
COPY . /var/www/html/
COPY composer.json /var/www/html/

# Mude o diretório de trabalho para /var/www/html
WORKDIR /var/www/html/

# Execute o Composer para instalar as dependências
RUN composer install --no-dev

# Expõe a porta 80 para fora do contêiner
EXPOSE 80

