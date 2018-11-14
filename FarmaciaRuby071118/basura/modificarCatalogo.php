
<!DOCTYPE html>
<html lang="es">
<head>
    <title>MaquinariasRocky-Admin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Admin.css" >
    <link rel="stylesheet" type="text/css" href="diseño/tablas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<!-- NAVEGADOR HORIZONALTAL -->
<header id="header">
<ul class="nav-top">
    <li><img src="imagenes/logo_rocky.png" alt="logo rocky" class="logo"></li>
    <li style="margin-left:50px; margin-top:5px; "><img src="imagenes/menu_2.png" alt=""></li>
    <li style="float:right"><a href="#"><img src="imagenes/boton-salir.png "> Salir</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/rec.png"> Luque Tarrillo, Julio Martin</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/cronometro.png">  00:10:30</a></li>
</ul>

</header>

<!-- NAVEGADOR LATERAL -->
<nav>
    <ul class="nav-lateral">

        <li style="margin-bottom: 25px" ><img src="imagenes/usuario.png" class="activo">
            <span style="color: aqua;text-align: center;margin-left: 85px;margin-bottom: 20px">Administrador</span></li>
        <a href="Administrador.php" class="x"><img src="imagenes/icon-inicio.png" class="b">VOLVER ATRAS</a>
        </ul>
</nav>
<div class="secciones">
<br/><br/>
    <?php
    include 'php/conexion.php';
    $id = $_REQUEST['id'];
    $sql="SELECT * FROM maquina WHERE id_maquina = '$id'";
    $result=mysqli_query($conexion,$sql);
    $mostrar=mysqli_fetch_array($result);
    ?>
    <form class="form-horizontal" action="php/proceso_modificarCatalogo.php?id=<?php echo $mostrar['id_maquina'];?>" method="post" onsubmit="return validar()" enctype="multipart/form-data">
    <h2 class="form__titulo">Modificar Maquina</h2>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Nombre:</label>
                <div class="col-sm-9">
                    <input type="text" REQUITED class="form-control" id="nombre" placeholder="Enter Nombre" name="nombre" 
                    value= "<?php echo $mostrar['nombre_maquina']; ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="marca">Marca:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="marca" placeholder="Enter Marca" name="marca" 
                    value= "<?php echo $mostrar['marca'];?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="marca">Precio:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="precio" placeholder="Enter Precio" name="precio" 
                    value= "<?php echo $mostrar['precio'];?>"  required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="marca">Stock:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="stock" placeholder="Enter Stock" name="stock" 
                    value= "<?php echo $mostrar['stock'];?>"  required>
                </div>
            </div>

            <img id="Imagen2" height="250px" width="200px" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['Imagen']);?>"/>

            <div class="form-group">
                <label class="control-label col-sm-2" for="Imagen">Imagen:</label>
                <div class="col-sm-9">
                    <input type="file" id="Imagen"  name="Imagen">
                </div>
            </div>
            <input type="submit" value="Modificar" class="btn__enviar">
    </form>
    
</div>
    <footer>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="comportamiento/contenido.js"></script>
<script src="comportamiento/menu.js"></script>
</body>
</html>