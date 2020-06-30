<?php

include "conexion.php";

$nom = $_REQUEST['n'];
$apel = $_POST['apellido'];
//$_POST, $_GET, $_REQUEST

$sql = "INSERT INTO usuario (nombre, apellido) VALUES ('$nom', '$apel')";

if (!$resultado = $con->query($sql)){
    echo $con->error;
}