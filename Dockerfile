FROM wordpress:latest

# Ativa o SSL para o MySQL
ENV WORDPRESS_CONFIG_EXTRA="define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);"

# Copia tudo (incluindo o db-check.php) para a raiz do WP para podermos testar
COPY db-check.php /var/www/html/db-check.php

# Copia o tema para a pasta correta
COPY . /var/www/html/wp-content/themes/meu-tema-customizado/

# Ajusta permissões
RUN chown -R www-data:www-data /var/www/html/
