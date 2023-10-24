<?php
include'conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$guardar = "INSERT INTO" usuarios("nombre_completo, correo, usuario, contraseña") 
VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena');

$ejecutar = mysqli_guardar($conexion, $guardar);

if($ejecutar){
    echo '
    <script>
    alert("usuario almacenado correctamente");
    window.location = "../index.php";
    </script>
    '
}else{
    echo '
    <script>
    alert("intentalo de nuevo, usuario no almacenado ");
    window.location = "../index.php";
    </script>
    ';
}

mysqli_close($conexion);

?>