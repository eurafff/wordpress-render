FROM wordpress:latest

# Ativa o SSL para o MySQL via variáveis de ambiente do PHP
ENV WORDPRESS_CONFIG_EXTRA="define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);"

# Copia o tema para a pasta correta
COPY . /var/www/html/wp-content/themes/meu-tema-customizado/

# Ajusta permissões
RUN chown -R www-data:www-data /var/www/html/wp-content/themes/meu-tema-customizado/
