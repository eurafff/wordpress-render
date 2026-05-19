<?php
echo "<h3>Teste de Conexão</h3>";
$host = getenv('WORDPRESS_DB_HOST');
$user = getenv('WORDPRESS_DB_USER');
$pass = getenv('WORDPRESS_DB_PASSWORD');
$db   = getenv('WORDPRESS_DB_NAME');

echo "Tentando conectar ao Host: <b>$host</b> <br>";
echo "Com o usuário: <b>$user</b> <br>";

$conn = mysqli_init();
if (!$conn) {
    die("mysqli_init falhou");
}

mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

if (mysqli_real_connect($conn, $host, $user, $pass, $db, null, null, MYSQLI_CLIENT_SSL)) {
    echo "<h2 style='color:green'>✅ CONECTADO COM SUCESSO!</h2>";
} else {
    echo "<h2 style='color:red'>❌ FALHA NA CONEXÃO:</h2>";
    echo "Erro: " . mysqli_connect_error();
}
?>
