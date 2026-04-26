<?php
session_start();

$pdo = new PDO("sqlite:/var/www/html/login/db.db");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $pdo->prepare("DELETE FROM cc WHERE id = ?");
    $stmt->execute([$id]);
}

header('Location: ../index.php');
exit;
