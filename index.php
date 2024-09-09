<?php



$host = '85.209.92.152';
$db = 'durcor_database';
$user = 'ak4n1';
$pass = 'F4^k9&l2zW!7v@1D';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>
