<!DOCTYPE html>
<html lang="es">
<head>
    <title>MaquinariasRocky-Tecnico</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Alqui.css" >
    <link rel="stylesheet" type="text/css" href="diseño/tablas.css">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="Bootstrap_4/css/bootstrap.min.css">    
    <link rel="stylesheet" href="librerias/alertifyjs/css/alertify.min.css">  
    <link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.min.css"/> 
</head>

<script language="javascript">
    function enviar1(id_producto,nombre_producto,laboratorio_producto,precio_producto){
        opener.document.form3.id_producto.value=id_producto;
        opener.document.form3.nombre_producto.value=nombre_producto;
        opener.document.form3.laboratorio_producto.value=laboratorio_producto;
        opener.document.form3.precio_producto.value=precio_producto;
        close()
    }


</script>
<body>
    <form  enctype="multipart/form-data" name="form2">
    <label for="buscar">Buscar Producto:</label>
    <input class="form-control" id="myInput" type="text" placeholder="Buscar Producto..">   
    <div class="table-responsive">
    <table class="table table-bordered table-hover table-active">
    <thead class="bg-primary">
        <th>Codigo</th>
        <th>Nombre de Producto</th>
        <th>Laboratorio</th>
        <th>Precio</th>
    </thead> 

<?php
include 'conexion.php';
$sql="SELECT * FROM producto";
$result=mysqli_query($conexion,$sql);

while($row=mysqli_fetch_array($result)){
?>

<tbody id="myTable">
<tr>
<td><a href="#" onclick="enviar1(<?php print $row["id_producto"];?>,'<?php print $row["nombre_producto"];?>','<?php print $row["laboratorio_producto"];?>','<?php print $row["precio_producto"];?>');"> <?php print $row["id_producto"];?></a></td>
<td><a href="#" onclick="enviar1(<?php print $row["id_producto"];?>,'<?php print $row["nombre_producto"];?>','<?php print $row["laboratorio_producto"];?>','<?php print $row["precio_producto"];?>');"> <?php print $row["nombre_producto"];?></a></td>
<td><a href="#" onclick="enviar1(<?php print $row["id_producto"];?>,'<?php print $row["nombre_producto"];?>','<?php print $row["laboratorio_producto"];?>','<?php print $row["precio_producto"];?>');"> <?php print $row["laboratorio_producto"];?></a></td>
<td><a href="#" onclick="enviar1(<?php print $row["id_producto"];?>,'<?php print $row["nombre_producto"];?>','<?php print $row["laboratorio_producto"];?>','<?php print $row["precio_producto"];?>');"> <?php print $row["precio_producto"];?></a></td>
</tr>
</tbody >
<?php
}
?>
</table>
</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="librerias/bootstrap/js/bootstrap.js"></script>
<script src="librerias/alertifyjs/alertify.js"></script>
<script src="librerias/JQuery/jquery-3.3.1.min.js"></script>     
<script src="librerias/Popper/popper.min.js"></script>       
<script src="librerias/Bootstrap_4/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    

</body>


</html>