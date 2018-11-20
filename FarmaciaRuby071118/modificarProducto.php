<!DOCTYPE html>
<html lang="es">
<head>
    <title>BoticasRuby-Administrador</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Admin.css" >
    <link rel="stylesheet" type="text/css" href="diseño/tablas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>


<!-- NAVEGADOR HORIZONTAL -->
<header id="header">
<ul class="nav-top">
    <li><img src="imagenes/logo_rubi.png" alt="logo rocky" class="logo"></li>
    <li style="margin-left:50px; margin-top:5px; "><img src="imagenes/menu_2.png" alt=""></li>
    <li style="float:right"><a href="#"><img src="imagenes/boton-salir.png "> Salir</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/rec.png"> Palma Luna, Frank Bill</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/cronometro.png">  00:10:30</a></li>
</ul>

</header>

<!-- NAVEGADOR LATERAL -->
<nav>
    <ul class="nav-lateral">

        <li style="margin-bottom: 25px" ><img src="imagenes/usuario.png" class="activo">
            <span style="color: aqua;text-align: center;margin-left: 85px;margin-bottom: 20px">Administrador</span></li>
        <a href="AdministradorFarmacia.php" class="x"><img src="imagenes/icon-inicio.png" class="b">VOLVER ATRAS</a>
        </ul>
</nav>
<div class="secciones">
<br/><br/>
    <?php
    include 'php/conexion.php';
    $id = $_REQUEST['id'];
    $sql="SELECT * FROM producto WHERE id_producto = '$id'";
    $result=mysqli_query($conexion,$sql);
    $mostrar=mysqli_fetch_array($result);
    ?>
    <form class="form-horizontal" action="php/proceso_modificarProducto.php?id=<?php echo $mostrar['id_producto'];?>" method="post" onsubmit="return validar()" enctype="multipart/form-data">
    <h2 class="form__titulo">Modificar Producto</h2>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre_producto">Nombre:</label>
                <div class="col-sm-9">
                    <input type="text" REQUITED class="form-control" id="nombre_producto" placeholder="Ingrese nombre" name="nombre_producto" 
                    value= "<?php echo $mostrar['nombre_producto']; ?>" />
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="laboratorio_producto">Laboratorio:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="laboratorio_producto" placeholder="Ingrese laboratorio" name="laboratorio_producto" 
                    value= "<?php echo $mostrar['laboratorio_producto'];?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="tipo_producto">Tipo:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tipo_producto" placeholder="Ingrese tipo" name="tipo_producto" 
                    value= "<?php echo $mostrar['tipo_producto'];?>"  required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="desc_producto">Descripcion:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="desc_producto" placeholder="Ingrese descripcion" name="desc_producto" 
                    value= "<?php echo $mostrar['desc_producto'];?>"  required>
                </div>
            </div>

            <img id="Imagen2" height="250px" width="200px" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['img_producto']);?>"/>

            <div class="form-group">
                <label class="control-label col-sm-2" for="img_producto">Imagen:</label>
                <div class="col-sm-9">
                    <input type="file" id="img_producto"  name="img_producto">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="cantidad_producto">Cantidad:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="cantidad_producto" placeholder="Ingrese cantidad" name="cantidad_producto" 
                    value= "<?php echo $mostrar['cantidad_producto'];?>"  required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="precio_producto">Precio:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="precio_producto" placeholder="ingrese precio" name="precio_producto" 
                    value= "<?php echo $mostrar['precio_producto'];?>"  required>
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