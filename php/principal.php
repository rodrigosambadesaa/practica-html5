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
      <h1 class="titulo">La magia del invierno</h1>
      <p class="texto">El invierno es una época mágica llena de nieve y frío.</p>
      <p class="texto">Disfruta de la belleza de los paisajes invernales y de las actividades propias de esta estación.</p>
      <p class="texto">En este apartado vamos a conocer la maquetación de páginas utilizando Hojas de estilos en cascada (CSS). Veremos cómo realizar este tipo de maquetación, junto con algunas ventajas e inconvenientes. Para muchos será todavía un campo por explorar. Aunque no vamos a entrar en grandes detalles, vamos a intentar dar a conocer la maquetación con CSS para que cubrir la posible laguna por parte del lector. En uso de hojas de estilo permite ajustar el formato de forma sencilla y clara.</p>
      <p class="texto">El invierno es una estación del año caracterizada por bajas temperaturas, nieve y un ambiente frío y acogedor.</p>
      <p class="texto">Durante el invierno, podemos disfrutar de actividades como esquiar, hacer muñecos de nieve, patinar sobre hielo y tomar bebidas calientes junto a la chimenea.</p>
      <p class="texto">Además, el invierno nos regala paisajes mágicos cubiertos de nieve, árboles adornados con escarcha y la posibilidad de ver auroras boreales en algunas regiones.</p>
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
