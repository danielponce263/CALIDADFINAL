<?php

include 'conexion.php';
$id= $_REQUEST['id'];

$Eliminar= "DELETE FROM producto WHERE id_producto='$id'";

echo $resultado=mysqli_query($conexion,$Eliminar);  

?>