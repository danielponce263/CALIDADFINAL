<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Validacion de Usuario.</title>
        <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/redmond/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="diseño/Admin.css" >
        <link rel="stylesheet" type="text/css" href="diseño/tablas.css">
        <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/alertify.css">
        <link rel="stylesheet" type="text/css" href="librerias/alertifyjs/css/themes/default.css">
    </head>
    <body>
        <div class="contenedor">
        <div id="formulario">
        <form method="POST" action="return false" onsubmit="return false">
            <div id="resultado"></div>
            <p><input type="text" name="usuario" id="usuario" value="" placeholder="Usuario"></p>
            <p><input type="password" name="contraseña" id="contraseña" value="" placeholder="Password"></p>
            <p><button onclick="Validar(document.getElementById('usuario').value);">Accesar</button></p>
        </form>
        <script>
 
        function Validar(usuario)
        {
            alert(usuario);
            $.ajax({
                url: "php/validateUser.php",
                type: "POST",
                data: "usuario="+usuario,
                success: function(resp){
                $('#resultado').html(resp)
                }       
            });
        }
        </script>

        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
    <script src="comportamiento/contenido.js"></script>
    <script src="comportamiento/contenidoMenu.js"></script>
    <script src="comportamiento/menu.js"></script>
    <script src="comportamiento/eliminarUsuario.js"></script>
    <script src="comportamiento/eliminarMaquina.js"></script>
    <script src="comportamiento/mainbusqueda.js"></script>
    <script type="text/javascript" src="comportamiento/jquery.min.js"></script>
    </body>
</html>