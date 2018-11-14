<?php
session_start();
include 'conexion.php';

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$rol=$_POST["rol"];
$correo=$_POST["correo"];
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$telefono=$_POST["telefono"];

$insertar= "INSERT INTO usuarios(nombre,apellido,rol,correo,usuario,clave,telefono) VALUES ('$nombre','$apellido','$rol','$correo','$usuario','$clave','$telefono')";

echo $resultado=mysqli_query($conexion,$insertar);    
  
?>