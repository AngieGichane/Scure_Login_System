<?php
// MySQL Database Connection
$db_host = 'localhost';
$db_name = 'user_portal';
$db_user = 'root';
$db_pass = 'mayaswan';

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>