<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basedatos = "Culicoides";

@ $db = new mysqli($servidor, $usuario, $clave, $basedatos);
if(mysqli_connect_errno()){
   
    echo "Error al conectar a la base de datos";
    
    exit;
}