<?php

$conexion = mysqli_connect("localhost", "root", "" , "longin_register_db"); 
if ($conexion)
{
    echo 'conectado exitosamente a la base de datos';
}else{
    echo 'No se ha podido conectar a la base de datos';
}

?>