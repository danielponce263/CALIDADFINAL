
<?php
session_start();
include 'conexion.php';
$id_maquina= $_REQUEST['id_maquina'];

$Eliminar= "DELETE FROM maquina WHERE id_maquina='$id_maquina'";

echo $resultado=mysqli_query($conexion,$Eliminar);  

?>

