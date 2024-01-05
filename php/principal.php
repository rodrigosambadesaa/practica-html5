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
  <link rel="STYLESHEET" type="text/css" href="../css/estilo.css">
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
      <h1 class="titulo">Título de la página</h1>
      <p class="texto">En este apartado vamos a conocer la maquetación de páginas utilizando Hojas de estilos en cascada (CSS). Veremos cómo realizar este tipo de maquetación, junto con algunas ventajas e inconvenientes. Para muchos será todavía un campo por explorar. Aunque no vamos a entrar en grandes detalles, vamos a intentar dar a conocer la maquetación con CSS para que cubrir la posible laguna por parte del lector. En uso de hojas de estilo permite ajustar el formato de forma sencilla y clara.</p>
      <p class="texto">Como se ha podido aprender, las hojas de estilo en cascada ayudan a separar el contenido de la forma, es decir para el mismo contenido se hacen posibles diferentes visualizaciones.</p>
    </div>
    <div id="submenu">
      <div class="cabecera">
        Registro
      </div>
      <div class="celda_info" style="border-bottom:15px">
        <a href="#">Regístrese con nosotros</a><br>
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
