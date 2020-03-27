<?php
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=kingwebn_serverusername_pht_db', 'kingwebn_phtuser', 'myP4ssw0rd!');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
    $error = 'Unable to connect to the database server.';
    include 'error.html.php';
    exit();
}
?>