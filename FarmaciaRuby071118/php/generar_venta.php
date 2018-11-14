<?php
include 'conexion.php';

if(isset($_POST['Generar']))
{
    $id_cliente = $_POST['IDCV'];
    $query = "SELECT 
    m.nombre_maquina as maquina,
    m.precio as precio,
    m.stock as stock,
    a.cantidad as cantidad,
    a.ndias as dias,
    m.precio*a.cantidad*a.ndias as precio
    from alquiler a
    inner join cliente c 
    on a.id_cliente = c.id_cliente 
    inner join maquina m
    on a.id_maquina = m.id_maquina
    where c.id_cliente= $id_cliente";
    $resultado_venta = mysqli_query($conexion,$query);
    
}
else {
    $query = "SELECT 
    m.nombre_maquina as maquina,
    m.precio as precio,
    m.stock as stock,
    a.cantidad as cantidad,
    a.ndias as dias,
    (m.precio*a.cantidad*a.ndias) as precio
    from alquiler a
    inner join  cliente c 
    on a.id_cliente = c.id_cliente 
    inner join maquina m
    on a.id_maquina = m.id_maquina;"
    $resultado_venta = mysqli_query($conexion,$query);
}
?>