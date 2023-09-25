<?php

$usuario = 'root';
$senha = '';
$database = 'csharp_na_lingua';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error)
{
    die("Falha ao conectar no banco de dados: " . $mysqli->error);
}

$conn = mysqli_connect($host, $usuario, $senha, $database);

?>