<!DOCTYPE html>
<html lang="es">
<head>
    <title>MaquinariasRocky-Tecnico</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Alqui.css" >
    <link rel="stylesheet" type="text/css" href="diseño/tablas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<script language="javascript">
    function enviar1(IDCV, NombreCV, DNICV, IDMV, SubTV, IGVV, TotalV){
        opener.document.form7.IDCV.value=IDCV;
        opener.document.form7.NombreCV.value=NombreCV;
        opener.document.form7.DNICV.value=DNICV;
        opener.document.form7.IDMV.value=IDMV;
        opener.document.form7.SubTV.value=SubTV;
        opener.document.form7.IGVV.value=IGVV;
        opener.document.form7.TotalV.value=TotalV;
        close()
    }


</script>
<?php
include 'conexion.php';

$sql="select 
c.id_cliente as id_cliente,
concat(c.apPaterno,' ',c.apMaterno,' ',c.nombre_cliente) as nombre,
c.dni as dni,
m.id_maquina as id_maquina,
m.precio*a.cantidad*a.ndias as subtotal,
m.precio*a.cantidad*a.ndias*0.18 as igv,
m.precio*a.cantidad*a.ndias*1.18 as total 
from alquiler a
inner join cliente c 
on a.id_cliente = c.id_cliente 
inner join maquina m
on a.id_maquina = m.id_maquina;";
$result=mysqli_query($conexion,$sql);
while($row=mysqli_fetch_array($result)){
?>

<form  enctype="multipart/form-data" name="form2">

<table style="border: 5px solid blue;">
<td><a href="#" onclick="enviar1(<?php print $row["id_cliente"];?>,'<?php print $row["nombre"];?>','<?php print $row["dni"];?>','<?php print $row["id_maquina"];?>','<?php print $row["subtotal"];?>','<?php print $row["igv"];?>','<?php print $row["total"];?>');">
<?php print $row["id_cliente"];?>, <?php print $row["nombre"]; ?> , <?php print $row["dni"]; ?> , <?php print $row["id_maquina"]; ?> , <?php print $row["subtotal"]; ?> , <?php print $row["igv"]; ?> , <?php print $row["total"]; ?> 
</a></td></table>
</form>
<?php
}

?>

</html>