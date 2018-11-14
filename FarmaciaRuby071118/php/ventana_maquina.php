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
    function envia(id_maquina, nome, marca){
        opener.document.form3.id_maquina.value=id_maquina;
        opener.document.form3.nombre.value=nome;
        opener.document.form3.marca.value=marca;
        close()
    }


</script>
<?php
include 'conexion.php';
$sql="SELECT * FROM maquina";


$result=mysqli_query($conexion,$sql);
while($row=mysqli_fetch_array($result)){
?>

<form  enctype="multipart/form-data"  name="form2"><table border="1">
<a href="#" onclick="envia(<?php print $row["id_maquina"];?>,'<?php print $row["nombre_maquina"];?>','<?php print $row["marca"];?>');"> <?php print $row["id_maquina"]; ?>, <?php print $row["nombre_maquina"]; ?> , <?php print $row["marca"]; ?> 
</a>
</table>
</form>
<?php
}

?>

</html>