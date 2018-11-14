
<?php
session_start();
include 'conexion.php';
$mecanico_id= $_REQUEST['mecanico_id'];

$Eliminar= "DELETE FROM mantenimiento WHERE mecanico_id='$mecanico_id'";

echo $resultado=mysqli_query($conexion,$Eliminar);  



?>