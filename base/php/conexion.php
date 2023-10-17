<?php

$conexion = mysqli_connect("localhost", "root", "", "login_resgistro_bd", "443")
if ($conexion){
    echo ‘conectado a la base de datos‘
}else{
    echo ‘no se ha podido conectar a la base de datos‘
}
?>