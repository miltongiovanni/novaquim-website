<?php
include_once('env.php');
$dsn = 'mysql:dbname=' . DATABASENAME . ';host=' . DATABASESERVER . ';charset=utf8';
$user = DATABASEUSER;
$password = DATABASEPASSWORD;

try {
    $con = new PDO($dsn, $user, $password);
    // set the PDO error mode to exception
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}