<!DOCTYPE html>
<html lang="es">
<head>
    <title>BoticasRuby-Administrador</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Alqui.css" >
    <link rel="stylesheet" type="text/css"href="diseño/tablas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script>
       var parametro;
       function popup(){
           parametro=window.open("php/ventana_maquina.php","","width=600,height=400");
           parametro.document.getElementById('1').value="id_maquina";
           parametro.document.getElementById('2').value="nome";
           parametro.document.getElementById('3').value="marca";
       }

       function popup1(){
           parametro=window.open("php/ventana_cliente.php","","width=600,height=400");
           parametro.document.getElementById('1').value="id_cliente";
           parametro.document.getElementById('2').value="names";
           parametro.document.getElementById('3').value="apPat";
           parametro.document.getElementById('4').value="dni";
       }

       function popup4(){
           parametro=window.open("php/ventana_venta.php","","width=600,height=400");
           parametro.document.getElementById('1').value="IDCV";
           parametro.document.getElementById('2').value="NombreCV";
           parametro.document.getElementById('3').value="DNICV";
           parametro.document.getElementById('4').value="IDMV";
           parametro.document.getElementById('5').value="SubTV";
           parametro.document.getElementById('6').value="IGVV";
           parametro.document.getElementById('7').value="TotalV";
       }

       function popup3(){
        window.alert("Se eliminó el elemento");
       }

   </script> 
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
            <span style="color: aqua;text-align: center;margin-left: 75px;margin-bottom: 20px">Administrador</span></li>
        <li class="h"><a href="#tab1" class="x"><img src="imagenes/icon-inicio.png" class="b">Inicio</a></li>
        <li class="h"><a href="#tab2" class="x"><img src="imagenes/icon-informacion.png" class="b">Mi Informacion</a></li>
        <li class="submenu"><a href="#"><img src="imagenes/icon-catalogo.png" class="b">Gestion de Inventario<img src="imagenes/abajo1.png" class="c"></a>
            <ul>
                <li class="h"><a href="#tab3" class="x"><img src="imagenes/añadir.png" class="b">Registrar Productos</a></li>
                <li class="h"><a href="#tab4" class="x"><img src="imagenes/ojo.png" class="b">Visualizar Productos</a></li>
                <li class="h"><a href="#tab5" class="x"><img src="imagenes/ojo.png" class="b">Reporte de Inventario</a></li>
            </ul>
        </li>
        
        <li><a href="#"><img src="imagenes/proveedor.png" class="b">Proveedores</a></li>
        <li><a href="#"><img src="imagenes/icon-ajustes.png" class="b">Ajustes</a></li>
    </ul>

</nav>

<!-- CONTENIDO DE LA PAGINA -->
<div class="secciones">
    <article id="tab1">
        <h1>INICIO</h1>
        <div class="usuarios">GESTIONAR USUARIO</div>
        <div class="reportes">GESTINAR REPORTES</div>
    </article>
    <article id="tab2">
        <h1>MI INFORMACION</h1>
    </article>
    <article id="tab3">
    <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">GESTION DE INVENTARIO</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Registrar Productos</a>
        </div>
        <div class="h2-titulo"><h2>Registrar Productos</h2></div>
        <div class="container">
        <h3>Nuevo Producto</h3>
        <form class="form-horizontal" action="php/save_producto.php" method="post" class="form-register" onsubmit="return validar()" name="form3" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2" for="id_producto">ID del producto:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="id_producto" name="id_producto" placeholder="Id_Producto" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre_producto">Nombre del producto:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control"  id="nombre_producto" name="nombre_producto" placeholder="Nombre_Producto" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="laboratorio_producto">Laboratorio del producto:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="laboratorio_producto" name="laboratorio_producto" placeholder="Laboratorio_Producto" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="tipo_producto">Tipo de producto:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="tipo_producto" name="tipo_producto" placeholder="Tipo_producto" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="desc_producto">Descripcion del producto:</label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="5" id="desc_producto" name="desc_producto" placeholder="Descripcion" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="precio_producto">Precio unitario:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="precio_producto" name="precio_producto" placeholder="Precio_producto" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="cliente">Cantidad:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="cantidad_producto" name="cantidad_producto" placeholder="Cantidad_producto" required>
                </div>
            </div>
            
            <input type="submit" value="Registrar" class="btn__enviar">
            
        </form>
        </div> 
        <h3></h3><br><br>
    </article>

    <article id="tab4">
        <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">GESTION DE INVENTARIO</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Visualizar Productos</a>
        </div>
        <h2 class="h2-titulo">Visualizar Productos</h2>
        <div class="container">
        <h3>Lista de Productos</h3>
        <p>Lista de los Productos de la Empresa</p> 
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Tipo</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Cantidad</th>

                    </tr>
                </thead>
                <?php
                include 'php/conexion.php';
                $sql="SELECT al.id_alquiler, m.nombre_maquina, m.marca, c.nombre_cliente, c.apPaterno, c.dni, al.cantidad
                      from alquiler al
                      JOIN maquina m on al.id_maquina=m.id_maquina  
                      JOIN cliente c on al.id_cliente=c.id_cliente ";

                $result=mysqli_query($conexion,$sql);
                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['id_alquiler'] ?></td>
                    <td><?php echo $mostrar['nombre_maquina']  ?></td>
                    <td><?php echo $mostrar['marca']  ?></td>
                    <td><?php echo $mostrar['nombre_cliente']  ?></td>
                    <td><?php echo $mostrar['apPaterno']  ?></td>
                    <td><?php echo $mostrar['dni']  ?></td>
                    <td><?php echo $mostrar['cantidad']  ?></td>
                    <td>
                        <button type="button" class="btn btn-danger" onclick="popup3()">Eliminar</button>
                    </td>
                </tr>    
                <?php
                }
                ?>
            </table>
           </div>
        </div>  
    </article>

    <script type="text/javascript">
    $(document).ready(function(){
        $('#tabla').load('../Alquiler.php');
    });
    </script>

    <footer>

    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="librerias/bootstrap/js/bootstrap.js"></script>
<script src="librerias/alertifyjs/alertify.js"></script>
<script src="comportamiento/contenido.js"></script>
<script src="comportamiento/menu.js"></script>
<script src="comportamiento/factura.js"></script>
<script type="text/javascript" src="comportamiento/jquery.min.js"></script>
</body>
</html>