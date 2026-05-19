<?php
echo "<h3>Diagnóstico de Variáveis</h3>";

$vars = [
    'WORDPRESS_DB_HOST',
    'WORDPRESS_DB_USER',
    'WORDPRESS_DB_PASSWORD',
    'WORDPRESS_DB_NAME'
];

foreach ($vars as $v) {
    $val = getenv($v);
    if ($val) {
        if ($v === 'WORDPRESS_DB_PASSWORD') {
            echo "✅ $v: Configurada (Senha Oculta)<br>";
        } else {
            echo "✅ $v: <b>$val</b><br>";
        }
    } else {
        echo "<b style='color:red'>❌ $v: NÃO ENCONTRADA!</b> (Adicione no painel do Render)<br>";
    }
}

if (!getenv('WORDPRESS_DB_HOST')) {
    echo "<br><div style='background:#ff0;padding:10px;'><b>Ação necessária:</b> Vá no painel do Render > Environment e adicione as variáveis acima.</div>";
} else {
    echo "<h3>Testando Conexão Real...</h3>";
    $conn = mysqli_init();
    mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
    $res = @mysqli_real_connect($conn, getenv('WORDPRESS_DB_HOST'), getenv('WORDPRESS_DB_USER'), getenv('WORDPRESS_DB_PASSWORD'), getenv('WORDPRESS_DB_NAME'), null, null, MYSQLI_CLIENT_SSL);
    
    if ($res) {
        echo "<h2 style='color:green'>✅ TUDO OK! O banco conectou.</h2>";
    } else {
        echo "<h2 style='color:red'>❌ ERRO DE CONEXÃO:</h2> " . mysqli_connect_error();
    }
}
?>
