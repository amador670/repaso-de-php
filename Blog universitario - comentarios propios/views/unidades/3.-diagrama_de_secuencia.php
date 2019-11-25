<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Unidad III - Ingeniería de Software</title>

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
          <h1>Diagrama de Secuencia</h1> 
          <h2>Unidad III</h2> 

          <h2>3.1. Concepto de Secuencia de datos</h2>

          <p>El diagrama de secuencia es un tipo de diagrama usado para modelar interacción entre objetos en un sistema, este muestra una interacción, que representa la secuencia de mensajes entre instancias de clases, componentes o actores. El tiempo fluye por el diagrama y muestra el flujo de control de un participante a otro. En algunos lenguajes de programación es utilizado para visualizar instancias y eventos, en lugar de clases y métodos.</p>

          <p>Un diagrama de secuencia muestra la interacción de un conjunto de objetos en una aplicación a través del tiempo y se modela para cada caso de uso, contiene detalles de implementación del escenario, incluyendo los objetos y clases que se usan para implementar el escenario y mensajes intercambiados entre los objetos.</p>

          <p>El diagrama de secuencia muestra la interacción de un conjunto de objetos de una aplicación a través del tiempo, en el cual se indicaran los módulos o clases que formaran parte del programa y las llamadas que se hacen cada uno de ellos para realizar una tarea determinada.</p>

          <h2>3.2. Actores y clases</h2>

          <p>Actores en ingeniería de software son los roles que pueden jugar los agentes que interactúan con el sistema. Los roles son jugados por personas, dispositivos, u otros sistemas. Podríamos distinguir entre actores primarios, para los cuales el objetivo del caso de uso es esencial y actores secundarios, que interactúan con el caso de uso, pero cuyo objetivo no es esencial.</p>

          <p>Se le llama actor a toda entidad externa al sistema que guarda una relación con éste y que le demanda una funcionalidad. Esto incluye a los operadores humanos pero también incluye a todos los sistemas externos, además de entidades abstractas, como el tiempo.</p>

          <p>En el caso de los seres humanos se pueden ver a los actores como definiciones de rol por lo que un mismo individuo puede corresponder a uno o más Actores. Sin embargo, que es el sistema quien va a tener interés en el tiempo. Es frecuente encontrar que nuestros sistemas deben efectuar operaciones automáticas en determinados momentos; y siendo esto un requisito funcional obvio, resulta de interés desarrollar alguna forma de capturar dicho requisito en el modelo de caso de uso final.</p>

          <p>En caso de uso de los actores son  pasos o actividades que deberán realizarse para llevar a cabo algún proceso. Los personajes o entidades que participarán en un caso de uso se denominan actores. Un caso de uso es una secuencia de interacciones que se desarrollarán entre un sistema y sus actores en respuesta a un evento que inicia un actor principal sobre el propio sistema. Su uso es común para la captura de requisitos funcionales, especialmente con el paradigma de la programación orientada a objetos.</p>

          <h3>Descargar archivo: </h3>
          
          <a href="https://docs.google.com/document/d/1au1lUwcKZ7tBeZPIBVSVJIan0wJhAk2-Xq8Q8j50ORg/edit?usp=sharing" target="_blank"><img src="../../img/microsoft_word_descarga.png" alt="descargar archivo de word" /></a>
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