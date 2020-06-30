<?php

include "conexion.php";

$sql = "SELECT nombre, apellido FROM usuario";
$f = "Nicolas";


$resultado = $con->query($sql);

while($fila = $resultado->fetch_assoc()){
    echo "<h1>".$fila["nombre"]." ". $fila["apellido"] ."</h1><br>"; 
}

//$sql = "INSERT INTO usuario (nombre, apellido) VALUES ('Nicolas', 'Andrada')";
//
//if (!$resultado = $con->query($sql)){
//    echo $con->error;
//}

//$sql = "UPDATE usuario SET usuario ='pepito', contrasena ='lola', fecha='1994-02-07' ";
//
//if (!$resultado = $con->query($sql)){
//    echo $con->error;
//}

$sql = "DELETE FROM `usuario` ";

if (!$resultado = $con->query($sql)){
    echo $con->error;
}