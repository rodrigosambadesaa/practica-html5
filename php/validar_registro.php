<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web del Invierno - Validación del registro</title>
</head>
<body>

<?php
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $confirmar_contrasena = $_POST['confirmar_contrasena'];

    if ($contrasena != $confirmar_contrasena) {
        echo "<p>Las contraseñas no coinciden. Por favor, inténtelo de nuevo.</p>";
        echo "<p><a href='registro.php'>Volver al formulario de registro</a></p>";
    } else {
        


        echo "<p>El usuario $nombre $apellido1 $apellido2 con email $email se ha registrado correctamente.</p>";
        echo "<p><a href='principal.php'>Volver a la página principal</a></p>";
    }
    
</body>
</html>