<?php
$servidor_mysql = 'localhost';
$nome_banco = 'teste2';
$usuario = 'root';
$senha = 'root';

$conn = new PDO("mysql:host=$servidor_mysql;dbname=$nome_banco","$usuario","$senha");

$indentacao = "    ";
?>