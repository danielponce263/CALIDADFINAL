<!DOCTYPE html>
<html lang="es">
<head>
    <title>BoticasRuby-Tecnico-Farmaceutico</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,  initial-scale=1">
    <link rel="stylesheet" type="text/css" href="diseño/Alqui.css" >
    <link rel="stylesheet" type="text/css"href="diseño/tablas.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script>
       var parametro;
       function popup(){
           parametro=window.open("php/ventana_producto.php","","width=600,height=400");
           parametro.document.getElementById('1').value="id_producto";
           parametro.document.getElementById('2').value="nombre_producto";
           parametro.document.getElementById('3').value="laboratorio_producto";
           parametro.document.getElementById('4').value="precio_producto";
       }

       function popup1(){
           parametro=window.open("php/ventana_cliente.php","","width=600,height=400");
           parametro.document.getElementById('1').value="id_cliente";
           parametro.document.getElementById('2').value="nombre_cliente";
           parametro.document.getElementById('3').value="apellidos_cliente";
           parametro.document.getElementById('4').value="dni_cliente";
           parametro.document.getElementById('5').value="telefono_cliente";
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
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>

        <script>
            
            $(function(){
                // Clona la fila oculta que tiene los campos base, y la agrega al final de la tabla
                $("#adicional").on('click', function(){
                    $("#tabla tbody tr:eq(0)").clone().removeClass('fila-fija').appendTo("#tabla");
                });
             
                // Evento que selecciona la fila y la elimina 
                $(document).on("click",".eliminar",function(){
                    var parent = $(this).parents().get(0);
                    $(parent).remove();
                });
            });
        </script>

</head>
<body>


<!-- NAVEGADOR HORIZONALTAL -->
<header id="header">
<ul class="nav-top">
    <li><img src="imagenes/logo_rubi.png" alt="logo rocky" class="logo"></li>
    <li style="margin-left:50px; margin-top:5px; "><img src="imagenes/menu_2.png" alt=""></li>
    <li style="float:right"><a href="#"><img src="imagenes/boton-salir.png "> Salir</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/rec.png"> Lozano Rodriguez, David Gustavo</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/cronometro.png">  00:10:30</a></li>
</ul>

</header>

<!-- NAVEGADOR LATERAL -->
<nav>
    <ul class="nav-lateral">

        <li style="margin-bottom: 25px" ><img src="imagenes/usuario.png" class="activo">
            <span style="color: aqua;text-align: center;margin-left: 75px;margin-bottom: 20px">Tecnico Farmaceutico</span></li>
        <li class="h"><a href="#tab1" class="x"><img src="imagenes/icon-inicio.png" class="b">Inicio</a></li>
        <li class="h"><a href="#tab2" class="x"><img src="imagenes/icon-informacion.png" class="b">Mi Informacion</a></li>
        <li class="submenu"><a href="#"><img src="imagenes/icon-catalogo.png" class="b">Gestion de Venta<img src="imagenes/abajo1.png" class="c"></a>
            <ul>
                <li class="h"><a href="#tab3" class="x"><img src="imagenes/añadir.png" class="b">Registrar Venta</a></li>
                <li class="h"><a href="#tab4" class="x"><img src="imagenes/ojo.png" class="b">Visualizar Ventas</a></li>
                <li class="h"><a href="#tab3" class="x"><img src="imagenes/cerrar.png" class="b">Anular Venta </a></li>
                <li class="h"><a href="#tab3" class="x"><img src="imagenes/ojo.png" class="b">Consultar Producto</a></li>
            </ul>
        </li>
        <li class="submenu"><a href="#"><img src="imagenes/icon-nuevo.png" class="b">Gestion de cliente <img src="imagenes/abajo1.png" class="c"> </a>
            <ul>
                <li class="h"><a href="#tab5" class="x"><img src="imagenes/añadir.png" class="b">Añadir Cliente</a></li>
                <li class="h"><a href="#tab6" class="x"><img src="imagenes/ojo.png" class="b">Visualizar Cliente</a></li>
            </ul>
        </li>
        <li class="submenu"><a href="#"><img src="imagenes/icon-venta.png" class="b">Reportes<img src="imagenes/abajo1.png" class="c"></a>
            <ul>
                <li class="h"><a href="#tab9" class="x"><img src="" alt="">Reporte Ventas</a></li>
                <li class="h"><a href="#tab10" class="x"><img src="" alt="">Reporte Mantenimiento</a></li>
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
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">GESTION VENTA</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Registrar Venta</a>
        </div>
        <div class="h2-titulo"><h2>Registrar Venta</h2></div>
        <div class="container">
        <h3>Nueva Venta</h3>

        <form class="form-horizontal" action="php/save_esperaruby.php" method="post" class="form-register" onsubmit="return validar()" name="form3" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2" for="id_producto">Codigo Producto:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="id_producto" name="id_producto" placeholder="CodigoProducto" readonly required>
                    <button type="button" class="btn btn-primary" onclick="popup()">Buscar</button>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre_producto">Nombre Producto:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control"  id="nombre_producto" name="nombre_producto" placeholder="NombreProducto" readonly required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="laboratorio_producto">Laboratorio Producto:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="labortaorio_producto" name="laboratorio_producto" placeholder="LaboratorioProducto" readonly required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="precio_producto">Precio Producto:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="precio_producto" name="precio_producto" placeholder="PrecioProducto" readonly  required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="id_cliente">Codigo Cliente:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="id_cliente" name="id_cliente" placeholder="IdCliente"  required>
                    <button type="button" class="btn btn-primary" onclick="popup1()">Buscar</button>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre_cliente">Nombre Cliente:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente" placeholder="NombreCliente"  required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="apellidos_cliente">Apellido Paterno:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="apellidos_cliente" name="apellidos_cliente" placeholder="Apellidos" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="dni_cliente">Dni:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="dni_cliente" name="dni_cliente" placeholder="Dni" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="telefono_cliente">Telefono:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="telefono_cliente" name="telefono_cliente" placeholder="Telefono" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="cantidad_venta">Cantidad:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="cantidad_venta" name="cantidad_venta" placeholder="Cantidad" required>
                </div>
            </div>
            <
            <input type="submit" value="Registrar" class="btn__enviar">
            
        </form>
        </div> 
        <h3></h3><br><br>
    </article>
    <article id="tab4">
        <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span"></span><a href="#" class="nav-a">Venta</a><span class="nav-span"></span><a href="#tab" class="nav-a1">Visualizar Venta</a>
        </div>
        <h2 class="h2-titulo">Visualizar Venta</h2>
        <div class="container">
        <h3>Lista de Ventas</h3>
        <p>Lista de los Ventas de la Empresa</p> 
            <div class="table-responsive">
            <form action="php/factura.php" method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th>Numero de venta</th>
                        <th>Cliente</th>
                        <th>DNI</th>
                        <th>Cantidad Total</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <?php
                include 'php/conexion.php';
                $sql= "SELECT v.id_ventas, concat (c.nombre_cliente,' ', c.apellidos_cliente) as cliente, c.dni_cliente, v.venta_total  
                FROM ruby.ventas v JOIN  ruby.cliente c on v.id_cliente=c.id_cliente";

                /*$sql= "SELECT v.id_ventas, p.nombre_producto as producto, concat (c.nombre_cliente,' ', c.apellidos_cliente) as cliente, v.cantidad  
                        FROM ventas v
                        JOIN  producto p on v.id_producto=p.id_producto
                        JOIN  cliente c on v.id_cliente=c.id_cliente" ;*/
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['id_ventas']  ?></td>
                    <td><?php echo $mostrar['cliente']  ?></td>
                    <td><?php echo $mostrar['dni_cliente']  ?></td>
                    <td><?php echo $mostrar['venta_total']  ?></td>
                    
                    <td>
                        <input type="submit" value="Register" name="submit">
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
            </form>
            </div>
        </div>

        

        <div class="container">
    <div id="tabla"></div>
   
    </div>
    </article>
    
    <article id="tab5">
    <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">GESTION DE CLIENTE</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Registrar Cliente</a>
        </div>
        <div class="h2-titulo"><h2>Registrar Cliente</h2></div>
        <div class="container">
        <h3>Nuevo Cliente</h3>
        <form class="form-horizontal" action="php/clientes.php" method="post" onsubmit="return validar()">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre_cliente">Nombre:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nombre_cliente" placeholder="Ingrese nombre..." name="nombre_cliente" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="apPaterno">Apellidos:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="apPaterno" placeholder="Ingrese Apellido Paterno" name="apPaterno" required>
                </div>
            </div>

             <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Correo:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="correo" placeholder="Ingrese correo" name="correo" required>
                    <br>
                    <button type="button" class="btn btn-primary">Verificar</button>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="dni">DNI:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="dni" placeholder="Ingrese DNI" name="dni" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="telefono">Telefono:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="telefono" placeholder="Ingrese Telefono" name="telefono" required>
                </div>
            </div>

            <input type="submit" value="Registrar" class="btn__enviar">
            
        </form>
    </article>
    <article id="tab6">
        <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span"></span><a href="#" class="nav-a">GESTION DE CLIENTE</a><span class="nav-span"></span><a href="#tab" class="nav-a1">Buscar Cliente</a>
        </div>
        <h2 class="h2-titulo">Visualizar Clientes</h2>
        <div class="container">
        <h3>Lista de Clientes</h3>
        <p>Lista de los Clientes de la Botica</p> 
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>dni</th>
                        <th>telefono</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <?php
                include 'php/conexion.php';
                $sql="SELECT * FROM cliente";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['id_cliente']  ?></td>
                    <td><?php echo $mostrar['nombre_cliente']  ?></td>
                    <td><?php echo $mostrar['apPaterno']  ?></td>
                    <td><?php echo $mostrar['correo']  ?></td>
                    <td><?php echo $mostrar['dni']  ?></td>
                    <td><?php echo $mostrar['telefono']  ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
            </div>
        </div>
    </article>

    <article id="tab7">
        <div class="nav-form">
            <h5 class="barra">INICIO</h5><span class="barra-1">></span><span class="barra-1">></span><h5 class="barra">Buscar Historial de Ventas</h5>
        </div>
        <h2 class="h2-titulo">Visualizar Historial de Ventas</h2>
        <div class="container">
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th class="colum-nombre">Nombre</th>
                        <th class="colum-nombre">Ap. Paterno</th>
                        <th>Ap. Materno</th>
                        <th>Correo</th>
                        <th>dni</th>
                        <th>telefono</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <br>
                <button type="button"class="btn btn-primary" >BUSCAR</button>

                <?php
                include 'php/conexion.php';
                $sql="SELECT * FROM cliente";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['id_cliente']  ?></td>
                    <td><?php echo $mostrar['nombre_cliente']  ?></td>
                    <td><?php echo $mostrar['apPaterno']  ?></td>
                    <td><?php echo $mostrar['apMaterno']  ?></td>
                    <td><?php echo $mostrar['correo']  ?></td>
                    <td><?php echo $mostrar['dni']  ?></td>
                    <td><?php echo $mostrar['telefono']  ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
            </div>
        </div>
    </article>

    <article id="tab8">
        <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span"></span><a href="#" class="nav-a">Venta</a><span class="nav-span"></span><a href="#tab" class="nav-a1">Generar Historial de Venta</a>
        </div>
        <h2 class="h2-titulo">Generar Reporte de Venta</h2>
        <div class="container">
        <h3>Reporte de Ventas</h3>
        <p>Lista de productos</p> 
            <div class="table-responsive">
            <form action="php/factura.php" method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Fecha</th>
                        <th>Importe</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <?php
                include 'php/conexion.php';
                $sql="select 
                v.id_venta as id_venta,
                concat(c.apPaterno,' ',c.apMaterno,' ',c.nombre_cliente) as nombre,
                c.dni as dni,
                m.nombre_maquina as maquina,
                m.marca as marca,
                v.total
                from venta v 
                left join cliente c
                on v.id_cliente = c.id_cliente
                left join maquina m 
                on v.id_maquina = m.id_maquina;";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['id_producto']  ?></td>
                    <td><?php echo $mostrar['n_producto']  ?></td>
                    <td><?php echo $mostrar['cantidad']  ?></td>
                    <td><?php echo $mostrar['fecha']  ?></td>
                    <td><?php echo $mostrar['importe']  ?></td>
                    <td>
                        <input type="submit" value="Register" name="submit">
                    </td>
                </tr>
                <?php
                }
                ?>
            </table>
            </form>
            </div>
        </div>

        <div class="container">
    <div id="tabla"></div>
   
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