<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Unidad V - Ingeniería de Software</title>

    <link rel="stylesheet" href="../../estilos/normalize-resetear-estandar-css/">
    <link rel="stylesheet" href="../../estilos/flexboxgrid.min.css">
    <link rel="stylesheet" href="../../estilos/estilos.css">

  </head>
  <body>

    <div class="container-master">

      <!--Menu-->
      <?php require "../menu.php";?>

      <!--Contenido-->
      <div class="contenido row">
        <div class="col-xs-12">
          <h1>Diagrama de Paquetes</h1> 
          <h2>Unidad V</h2> 

          <h2>5.1. Definición de paquetes de software</h2>

          <p>Un paquete de software es una serie de programas que se distribuyen conjuntamente. Algunas de las razones suelen ser que el funcionamiento de cada uno complementa que requiere de otros, además de que sus objetivos están relacionados como estrategia de mercadotecnia. Un ejemplo de paquete de software son los programas de Microsoft Office que por lo general un paquete incluye aplicaciones de oficina como Microsoft Office Excel, Microsoft Office Word, Microsoft Office PowerPoint y Microsoft Office Access.</p>

          <p>Por lo general los paquetes de software siempre incluyen una descripción o información de los programas que contienen y de la versión de cada uno, estos nos permite automatizar el proceso de instalación. Algunos paquetes de software tienen un programa principal que encapsula  los programas más pequeños, mientras que otros paquetes de software tienen un enfoque más fragmentado, compuesto de varios ejecutables pequeños que sirven para diferente propósito.</p>

          <h2>5.2. Definición de las capas del diagrama</h2>

          <p>Los diagramas de capas se identifican por los componentes primarios o las unidades funcionales del diseño. Cada nodo del diagrama, que se denomina capa, representa un grupo lógico de espacios de nombres, proyectos u otros artefactos.</p>

          <p>El objetivo de la programación por capas es la separación de las partes que componen un sistema software o también una arquitectura cliente-servidor: lógica de negocios, capa de presentación y capa de datos. De esta forma, por ejemplo, es sencillo crear diferentes interfaces sobre un mismo sistema sin requerirse cambio alguno en la capa de datos o lógica.</p>

          <p>La ventaja de trabajar por capas en programación es que permite uso sencillo mantenimiento, permiten modificar el software de forma sencilla y permite agregar nuevas características o cambios al sistema de forma rápida y completa, el desarrollo por capas se puede llevar a cabo en varios niveles y, en caso de que sobrevenga algún cambio, solo afectará al nivel requerido sin tener que revisar entre el código fuente de otros módulos, dado que se habrá reducido el Acoplamiento informático.</p>

          <p>También, permite distribuir el trabajo de creación de una aplicación por niveles; de este modo, cada programador se encargara de un parte del software totalmente abstraído del resto de niveles.</p>

          <h3>Descargar archivo: </h3>

          <a href="https://docs.google.com/document/d/16jt4DBLPb2ocbRLeSvN23FCy38tm79u6n3vktZtc98s/edit?usp=sharing" target="_blank"><img src="../../img/microsoft_word_descarga.png" alt="descargar archivo de word" /></a>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <?php require "../../php/comment-box/comment-box.php";?>
        </div>
      </div>
    </div>

  </body>
</html>