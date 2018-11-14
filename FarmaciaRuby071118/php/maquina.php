<?php
include 'conexion.php';

$nombre=$_POST["nombre"];
$marca=$_POST["marca"];
$precio=$_POST["precio"];
$stock=$_POST["stock"];
$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));///File en bits,nombre temporal
//$insertar= "INSERT INTO maquina(nombre_maquina,marca,precio,stock) VALUES ('$nombre','$marca','$precio','$stock')";
$insertar= "INSERT INTO maquina(nombre_maquina,marca,precio,stock,Imagen) VALUES ('$nombre','$marca','$precio','$stock','$Imagen')";

echo $resultado=mysqli_query($conexion,$insertar);      
     

?>