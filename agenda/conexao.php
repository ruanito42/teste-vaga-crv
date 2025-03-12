<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'agenda';

$con = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    die("Falha na conexão: " . mysqli_connect_error());
}

mysqli_select_db($con, $db) or die("Erro ao selecionar o banco: " . mysqli_error($con));
?>