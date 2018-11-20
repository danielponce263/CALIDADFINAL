<!DOCTYPE html>
<html lang="es">

<head>
    <title>BoticasRuby-Administrador</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Admin.css" >
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


<body>

<!-- NAVEGADOR HORIZONALTAL -->
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
        <li class="h"><a href="#tab1" class="x"><img src="imagenes/icon-inicio.png" class="b">Inicio</a></li>
        <li class="h"><a href="#tab2" class="x"><img src="imagenes/icon-informacion.png" class="b">Mi Informacion</a></li>
        <li class="submenu"><a href="#"><img src="imagenes/icon-catalogo.png" class="b">Gestion de Inventario<img src="imagenes/abajo1.png" class="c"></a>
            <ul>
                <li class="h"><a href="#tab3" class="x"><img src="imagenes/añadir.png" class="b">Registrar Productos</a></li>
                <li class="h"><a href="#tab4" class="x"><img src="imagenes/ojo.png" class="b">Visualizar Productos</a></li>
                <li class="h"><a href="#tab5" class="x"><img src="imagenes/ojo.png" class="b">Reporte de Inventario</a></li>
            </ul>
        </li>
    
        <li><a href="#"><img src="imagenes/icon-ajustes.png" class="b">Ajustes</a></li>
    </ul>

</nav>


<!-- CONTENIDO DE LA PAGINA -->

<div class="secciones">
    <article id="tab1">
    <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a1">HOME</a>
        </div>   
        <div class="h2-titulo"><h2>Inicio</h2></div>
        <div class="ini-gestionar">
        <button type="button" class="btn btn-success btn-lg"><a href="#tab3" class="x">GESTION DE INVENTARIO</a></button>
        </div>
        
    </article>
    <article id="tab2">
        <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a1">MI INFORMACION</a>
        </div>
        <div class="h2-titulo"><h2>Mi Informacion</h2></div>
        <div class="container">
        <h3>Datos Personales</h3>
        <form class="form-horizontal" action="#" method="post" onsubmit="return validar();">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Nombre:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nombrex" placeholder="Enter Nombre" name="nombrex" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="apellido">Apellido:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="apellidox" placeholder="Enter Apellidos" name="apellidox" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="direccion">Direccion:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="direccion" placeholder="Enter Direccion" name="direccion" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Correo:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="Correox" placeholder="Enter Correo" name="correox" required>
                    <button type="button" class="btn btn-primary">Verificar</button>
                </div>
                <div id="resultadoCorreo"></div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="usuario">Usuario:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="usuariox" placeholder="Enter Usuario" name="usuariox" required>
                    <button type="button" class="btn btn-primary">Verificar</button>
                </div>
                <div id="resultadoUsuario"></div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="clave">Contraseña:</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="clavex" placeholder="Enter Contraseña" name="clavex" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="telefono">Telefono:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="telefonox" placeholder="Enter Telefono" name="telefonox" required>
                </div>
            </div>
                
            
        </form>
        </div> 
    </article>
    <article id="tab3">
        <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">GESTION DE INVENTARIO</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Registrar Productos</a>
        </div>
        <div class="h2-titulo"><h2>Registrar Productos</h2></div>
        <div class="container">
        <h3>Nuevo Producto</h3>
        <form  class="form-horizontal"  id="maquina-form" action="php/producto.php" method="post" onsubmit="return validar()" enctype="multipart/form-data">

            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre_producto">Nombre:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nombre_producto" placeholder="Ingrese nombre" name="nombre_producto" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="laboratorio_producto">Laboratorio:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="laboratorio_producto" placeholder="Ingrese laboratorio" name="laboratorio_producto" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="tipo_producto">Tipo:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="tipo_producto" placeholder="Ingrese tipo" name="tipo_producto" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="desc_producto">Descripcion:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="desc_producto" placeholder="Ingrese descripcion" name="desc_producto" required>
                </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-sm-2" for="img_producto">Imagen:</label>
                <div class="col-sm-9">
                    <input type="file" id="img_producto"  name="img_producto" ><br/><br/>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="cantidad_producto">Cantidad:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="cantidad_producto" placeholder="Ingrese cantidad" name="cantidad_producto" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="precio">Precio:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="precio_producto" placeholder="Ingrese precio" name="precio_producto" required>
                </div>
            </div>
            
            <input type="submit" value="Registrar" id="btn__enviar" class="btn__enviar">

        </form>
        </div>

    </article>
    <article id="tab4">
        <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">GESTION DE INVENTARIO</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Visualizar Productos</a>
        </div>
        <h2 class="h2-titulo">Visualizar Productos</h2>
        <div class="container">
            <h3>Lista de Productos</h3>
            <p>Lista de Productos de la Empresa</p>
            <input class="form-control" id="myInputs" type="text" placeholder="Buscar producto">
            <div class="table-responsive">
                <table class="table table-bordered table-active">
                    <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Laboratorio</th>
                          <th>Tipo</th>
                          <th>Descripcion</th>
                          <th>Imagen</th>
                          <th>Cantidad</th>
                          <th>Precio</th>
                          <th>Accion1</th>
                        </tr>
                    </thead>
                    <?php
                    include 'php/conexion.php';
                    $sql="SELECT * FROM producto";
                    $result=mysqli_query($conexion,$sql);

                    while($mostrar=mysqli_fetch_array($result)){
                    ?>
                    <tbody id="myTable">
                    <tr>
                        <td><?php echo $mostrar['id_producto']  ?></td>
                        <td><?php echo $mostrar['nombre_producto']  ?></td>
                        <td><?php echo $mostrar['laboratorio_producto']  ?></td>
                        <td><?php echo $mostrar['tipo_producto']  ?></td>
                        <td><?php echo $mostrar['desc_producto']  ?></td>
                        <td><img height="250px" width="200px" src="data:image/jpg;base64,<?php echo base64_encode($mostrar['img_producto']);?>"/></td>
                        <td><?php echo $mostrar['cantidad_producto']  ?></td>
                        <td><?php echo $mostrar['precio_producto']  ?></td>
                        <td>
                        <button type="button" class="btn btn-info" onClick="window.location.href='modificarProducto.php?id=<?php echo $mostrar['id_producto'];?>'">Editar</button>

                        <button class="btn btn-danger glyphicon glyphicon-remove" 
                        onclick="preguntarSiNo('<?php echo $mostrar['id_producto'] ?>')">
                            
                        </button>

                        </td>
                    </tr>
                    </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>


   </div>
    <div class="container">
    <div id="tabla"></div>

        
        </div>
    </article>


    <script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').load('../AdministradorFarmacia.php');
    });
    </script>


        <!--
        <div class="nav-form">
            <h5 class="barra">INICIO</h5><span class="barra-1">></span><h5 class="barra">USUARIO</h5><span class="barra-1">></span><h5 class="barra">Visualizar Usuario</h5>
        </div>
        <h2 class="h2-titulo">Visualizar Usuario</h2>
        <div id="main-container">
            <table>
                <thead>
                    <tr>
                        <th>Id</th><th class="colum-nombre">Nombre</th><th class="colum-nombre">Apellidos</th><th>Rol</th><th>Correo</th><th>Usuario</th><th>Contraseña</th><th>Telefono</th><th>Accion</th>
                    </tr>
                </thead>
            </table>
        </div>
    </article>
            -->
     
    <footer>
    
    </footer>
</div>



<!--
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="librerias/bootstrap/js/bootstrap.js"></script>
<script src="librerias/alertifyjs/alertify.js"></script>
<script src="librerias/JQuery/jquery-3.3.1.min.js"></script>     
<script src="librerias/Popper/popper.min.js"></script>       
<script src="librerias/Bootstrap_4/js/bootstrap.min.js"></script>
<script src="librerias/sweetalert/sweetalert.min.js"></script> 
<script src="comportamiento/contenido.js"></script>
<script src="comportamiento/contenidoMenu.js"></script>
<script src="comportamiento/menu.js"></script>
<script src="comportamiento/eliminarProducto.js"></script>
<script src="comportamiento/mainbusqueda.js"></script>
<script src="comportamiento/registroProducto.js"></script>
<script type="text/javascript" src="comportamiento/jquery.min.js"></script>


<!-- filtro para busqueda -->

<!--
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
-->

<script>
$(document).ready(function(){
  $("#myInputs").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>



</body>
</html>