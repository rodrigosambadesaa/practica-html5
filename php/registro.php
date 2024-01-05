<!DOCTYPE html>
<html lang="es">
<head>
    <title>La web del invierno</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Rodrigo Sambade Saá">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="STYLESHEET" type="text/css" href="../css/estilos_registro.css">
    <?php
    function random_pic() {
        $files = glob("../archivos/publicidad/*.*");
        $file = array_rand($files);
        echo $files[$file];
    }
  ?>
</head>
<body>
    <div id="publicidad">
        <div id="imagen"><img alt="publicidad" id="img" src=<?php random_pic()?>></div>
        <div id="cerrar">
            <a id="enlace_publicidad" href="#" onclick="document.getElementById('publicidad').style.display='none'; return false;"><span id="boton_cerrar">Cerrar X</span></a>
        </div>
    </div>
    <div id="contenedor">
        <div id="tabla_principal"><img src="../archivos/cabecera.jpg" alt="cabecera"></div>
        <div id="menu">
            <a href="#">Portada</a> | <a href="#">Invierno</a>
        </div>
        <div class="cuerpo" id="div_cuerpo">
            <h1 class="titulo">La magia del invierno</h1>
            <form action="validar_registro.php" method="post">
                <fieldset>
                    <legend>Registro</legend>
                    <div>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                    </div>
                    <div>
                        <label for="apellido1">Primer Apellido:</label>
                        <input type="text" id="apellido1" name="apellido1" required>
                    </div>
                    <div>
                        <label for="apellido2">Segundo Apellido:</label>
                        <input type="text" id="apellido2" name="apellido2" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="contrasena">Contraseña:</label>
                        <input type="password" id="contrasena" name="contrasena" required>
                    </div>
                    <div>
                        <label for="confirmar_contrasena">Confirmar Contraseña:</label>
                        <input type="password" id="confirmar_contrasena" name="confirmar_contrasena" required>
                    </div>
                    <div>
                        <input type="submit" value="Registrarse">
                    </div>
                </fieldset>
            </form>
        </div>
        <div id="submenu">
            <div class="cabecera">
                Registro
            </div>
            <div class="celda_info" style="border-bottom:15px">
                <a href="registro.php">Regístrese con nosotros</a><br>
                <strong>obtenga muchas ventajas</strong>
            </div>
            <div class="cabecera">
                Otras informaciones
            </div>
            <div class="celda_info" style="border-top:30px; text-align:left">
                <ul class="lista">
                    <li>
                        <a href="#">Quiénes somos</a>
                    </li>
                    <li>
                        <a href="#">Nuestra misión</a>
                    </li>
                    <li>
                        <a href="#">Agenda de eventos</a>
                    </li>
                    <li>
                        <a href="#">Contactar</a>
                    </li>
                </ul>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
</body>
</html>
