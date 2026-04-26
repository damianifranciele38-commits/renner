<?php
$pdo = new PDO("sqlite:/var/www/html/login/db.db");

// aqui você faria algo com o banco

header('Location: https://www.realizesolucoesfinanceiras.com.br/cartoes-renner/login');
exit;
?>
