<?php

$con = new mysqli("localhost","root","","proyecto");

if( $con->connect_error){
    echo "El error fue: ". $con->connect_error;
}