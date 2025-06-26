<?php
$host = 'localhost';
$database = 'user_db.sql';
$usuario = 'root';
$senha = '';

    $mysqli = new mysqli ($hostname, $usuario, $senha, $database);
    if ($mysqli->connect_error) {
        echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    }
    else {
        echo "conectado";
    }

?>