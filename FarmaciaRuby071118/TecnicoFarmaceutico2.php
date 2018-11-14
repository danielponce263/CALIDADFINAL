<!DOCTYPE html>
<html lang="es">
<head>
    <title>BoticasRuby-Técnico Farmacéutico</title>
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


<!-- NAVEGADOR HORIZONTAL -->
<header id="header">
<ul class="nav-top">
    <li><img src="imagenes/logo_rubi.png" alt="logo rocky" class="logo"></li>
    <li style="margin-left:50px; margin-top:5px; "><img src="imagenes/menu_2.png" alt=""></li>
    <li style="float:right"><a href="#"><img src="imagenes/boton-salir.png "> Salir</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/rec.png"> Muñoz Ñahuero, Daniel Jeampierre</a></li>
    <li style="float:right"><a href="#"><img src="imagenes/cronometro.png">  00:11:30</a></li>
</ul>

</header>

<!-- NAVEGADOR LATERAL -->
<nav>
    <ul class="nav-lateral">

        <li style="margin-bottom: 25px" ><img src="imagenes/usuario.png" class="activo">
            <span style="color: aqua;text-align: center;margin-left: 75px;margin-bottom: 20px">Técnico Farmacéutico</span></li>
        <li class="h"><a href="#tab1" class="x"><img src="imagenes/icon-inicio.png" class="b">Inicio</a></li>
        <li class="h"><a href="#tab2" class="x"><img src="imagenes/icon-informacion.png" class="b">Mi Información</a></li>
        <li class="submenu"><a href="#"><img src="imagenes/icon-catalogo.png" class="b">Gestion de Venta<img src="imagenes/abajo1.png" class="c"></a>
            <ul>
                <li class="h"><a href="#tab3" class="x"><img src="imagenes/ojo.png" class="b">Consultar Producto</a></li>
                <li class="h"><a href="#tab3" class="x"><img src="imagenes/añadir.png" class="b">Registrar Venta</a></li>
                <li class="h"><a href="#tab3" class="x"><img src="imagenes/cerrar.png" class="b">Anular Pago</a></li>
                <li class="h"><a href="#tab3" class="x"><img src="imagenes/ojo.png" class="b">Visualizar Ventas</a></li>
            </ul>
        </li>
        <li class="submenu"><a href="#"><img src="imagenes/icon-nuevo.png" class="b">Gestion de cliente<img src="imagenes/abajo1.png" class="c"> </a>
            <ul>
                <li class="h"><a href="#tab5" class="x"><img src="imagenes/añadir.png" class="b">Registrar Cliente</a></li>
                <li class="h"><a href="#tab6" class="x"><img src="imagenes/ojo.png" class="b">Buscar Cliente</a></li>
                <li class="h"><a href="#tab7" class="x"><img src="imagenes/ojo.png" class="b">Buscar Historial de Compras</a></li>
                <li class="h"><a href="#tab8" class="x"><img src="imagenes/añadir.png" class="b">Generar Historial de Compras</a></li>
            </ul>
        </li>
        
    </ul>

</nav>

<!-- CONTENIDO DE LA PAGINA -->
<div class="secciones">
    <article id="tab1">
        <br><br>
        <h1><strong>INICIO</strong></h1>
        <br>
        <div class="usuarios"><h4><strong><em>GESTIONAR VENTAS</em></strong></h4></div>
        <br>
        <div class="reportes"><h4><strong><em>GESTIONAR CLIENTES</em></strong></h4></div>
             <br> <br>
    </article>
    <article id="tab2">
        <br><br>
        <h1><strong>MI INFORMACION</strong></h1>
    </article>
    <article id="tab3">
    <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">ORDEN DE ALQUILER</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Añadir Alquiler</a>
        </div>
        <div class="h2-titulo"><h2>Añadir Alquiler</h2></div>
        <div class="container">
        <h3>Nuevo Alquiler</h3>
        <form class="form-horizontal" action="php/save_alquiler.php" method="post" class="form-register" onsubmit="return validar()" name="form3" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Codigo Maquina:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="id_maquina" name="id_maquina" placeholder="Codigo_Maquina" required>
                    <button type="button" class="btn btn-primary" onclick="popup()">Buscar</button>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Nombre_Maquina">Nombre Maquina:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control"  id="nombre" name="nombre" placeholder="Nombre_Maquina" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="apellido">Marca Maquina:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca_Maquina" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="codigo_cliente">Codigo Cliente:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="id_cliente" name="id_cliente" placeholder="Nombre_Maquina" required>
                    <button type="button" class="btn btn-primary" onclick="popup1()">Buscar</button>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="cliente">Nombre Cliente:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="nom_cliente" name="nom_cliente" placeholder="Nombre_Cliente" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="apellido">Apellido Paterno:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="apPaterno" name="apPaterno" placeholder="ApellidoPaterno" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Dni">Dni:</label>
                <div class="col-sm-9">          
                    <input type="text" class="form-control" id="dni" name="dni" placeholder="Dni" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Cantidad:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Nº Dias:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="dias" name="dias" placeholder="Numero_dias" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="Descripcion">Descripcion:</label>
                <div class="col-sm-9">
                    <textarea class="form-control" rows="5" id="descripcion" name="descripcion" placeholder="Descripcion" required></textarea>
                </div>
            </div>
            <input type="submit" value="Registrar" class="btn__enviar">
            
        </form>
        </div> 
        <h3></h3><br><br>
    </article>

    <article id="tab4">
    	<div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">ORDEN DE ALQUILER</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Visualizar Alquiler</a>
        </div>
        <h2 class="h2-titulo">Visualizar Alquiler</h2>
        <div class="container">
        <h3>Lista de Alquileres</h3>
        <p>Lista de los Alquileres de la Empresa</p> 
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Maquina</th>
                        <th>Marca</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DNI</th>
                        <th>Cantidad</th>
                        <th>Días</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <?php
                include 'php/conexion.php';
                $sql="SELECT al.id_alquiler, m.nombre_maquina, m.marca, c.nombre_cliente, c.apPaterno, c.dni, al.cantidad ,al.ndias 
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
                    <td><?php echo $mostrar['ndias']  ?></td>
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
    <article id="tab5">
    <div class="nav-form">
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">GESTION DE CLIENTE</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Registrar Cliente</a>
        </div><br>
        <div class="h2-titulo"><h2>Registrar Cliente</h2></div>
        <br><br>
        <div class="container">
        <form class="form-horizontal" action="php/clientes.php" method="post" onsubmit="return validar()">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nombre_cliente">Nombres:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="nombre_cliente" placeholder="Ingrese nombre..." name="nombre_cliente" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="apPaterno">Apellidos:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="apPaterno" placeholder="Ingrese Apellidos..." name="apPaterno" required>
                </div>
            </div>

             <div class="form-group">
                <label class="control-label col-sm-2" for="nombre">Correo:</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="correo" placeholder="Ingrese su correo..." name="correo" required>
                    <br>
                    <button type="button" class="btn btn-primary">Verificar</button>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="dni">DNI:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="dni" placeholder="Ingrese su DNI..." name="dni" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="telefono">Teléfono:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="telefono" placeholder="Ingrese su Telefono..." name="telefono" required>
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
        <br>

        <form method='post'>
        <div class="form-group">
                <label class="control-label col-sm-2" for="txtFiltro">Ingrese Nombre o DNI:</label>
                <div class="col-sm-3">          
                    <input type="text" class="form-control" id="txtFiltro" name="txtFiltro" placeholder="Ingresar Nombre o DNI" required>
                </div>
                <input type="submit" name="btnBuscar" value="Buscar" class="btn btn-primary">
        </form>
        </div>
        <div class="container">
        <h3>Lista de Clientes</h3>
        <p>Lista de los Clientes de la Botica</p> 
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>DNI</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <?php
                include 'php/conexion.php';

                if (isset($_POST['btnBuscar'])) {
                	$filtro=$_POST['txtFiltro'];
                	$sql="SELECT * FROM cliente where dni_cliente='$filtro' or Nombre_clienTE like '%$filtro%'";
                }else{
                	$sql="";
                }

                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['id_cliente']  ?></td>
                    <td><?php echo $mostrar['nombre_cliente']  ?></td>
                    <td><?php echo $mostrar['apellidos_cliente']  ?></td>
                    <td><?php echo $mostrar['dni_cliente']  ?></td>
                    <td><?php echo $mostrar['telefono_cliente']  ?></td>
                    <td><?php echo $mostrar['correo_cliente']  ?></td>

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
        <a href="#" class="nav-a">INICIO</a><span class="nav-span">></span><a href="#" class="nav-a">GESTION DE CLIENTE</a><span class="nav-span">></span><a href="#tab" class="nav-a1">Buscar Historial de Ventas</a>
        </div><br>
        <div class="h2-titulo"><h2>Buscar Historial de Ventas</h2></div>
        <br><br>




        <div class="container">
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="colum-nombre">Nombre</th>
                        <th class="colum-nombre">Ap. Paterno</th>
                        <th>Correo</th>
                        <th>DNI</th>
                        <th>Telefono</th>
                        <th>Accion</th>
                    </tr>
                </thead>

                <div class="form-group">
                <label class="control-label col-sm-1" for="nombre">Nombre:</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" id="nombre_cliente" placeholder="Ingrese un Nombre..." name="nombre_cliente" required>
                    <br>
                    <button type="button" class="btn btn-primary">Buscar</button>
                </div>
                </div><br><br><br><br>

                <?php
                include 'php/conexion.php';
                $sql="SELECT * FROM cliente";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $mostrar['nombre_cliente']  ?></td>
                    <td><?php echo $mostrar['apellidos_cliente']  ?></td>
                    <td><?php echo $mostrar['correo_cliente']  ?></td>
                    <td><?php echo $mostrar['dni_cliente']  ?></td>
                    <td><?php echo $mostrar['telefono_cliente']  ?></td>
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
        <br>

        <form method='post'>
        <div class="form-group">
                <label class="control-label col-sm-2" for="txtFiltro2">Ingrese Nombre o DNI:</label>
                <div class="col-sm-3">          
                    <input type="text" class="form-control" id="txtFiltro2" name="txtFiltro2" placeholder="Ingresar Nombre o DNI" required>
                </div>
                <input type="submit" name="btnFiltrar" value="Buscar" class="btn btn-primary">
        </form>

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
					if (isset($_POST['btnFiltrar'])) {

	                	$filtro2=$_POST['txtFiltro2'];
	                	$sql2="select id_producto,nombre_producto,cantidad_producto,cantidad_producto,precio_producto from producto where id_producto in (select id_producto from ventas where id_cliente in (select id_cliente from cliente where dni_cliente = '$filtro2'))";
	                }else{
	                	$sql2="";
	                }
                
                $result2=mysqli_query($conexion,$sql2);

                while($mostrar=mysqli_fetch_array($result2)){
                ?>
                <tr>
                    <td><?php echo $mostrar['id_producto']  ?></td>
                    <td><?php echo $mostrar['nombre_producto']  ?></td>
                    <td><?php echo $mostrar['cantidad_producto']  ?></td>
                    <td><?php echo $mostrar['cantidad_producto']  ?></td>
                    <td><?php echo $mostrar['cantidad_producto*precio_producto']  ?></td>
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