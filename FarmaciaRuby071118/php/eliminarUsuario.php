<?php
session_start();
include 'conexion.php';
$id_usuario= $_REQUEST['id_usuario'];

$Eliminar= "DELETE FROM usuarios WHERE id_usuario='$id_usuario'";

echo $resultado=mysqli_query($conexion,$Eliminar);  



?>

