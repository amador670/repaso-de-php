<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Unidad IV - Ingeniería de Software</title>

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
          <h1>Clases de Diseño</h1> 
          <h2>Unidad IV</h2> 

          <h2>4.1. Definición de clases de Diseño</h2>

          <p>En ingeniería de software un diagrama de clases es un tipo de diagrama de estructura estática que describe la estructura de un sistema mostrando las clases del sistema, sus atributos, operaciones (o métodos), y las relaciones entre los objetos.</p>

          <p>En informática, una clase es una plantilla para la creación de objetos de datos según un modelo predefinido. Las clases se utilizan para representar entidades o conceptos. Cada clase es un modelo que define un conjunto de variables, y métodos apropiados para operar con dichos datos. Cada objeto creado a partir de la clase se denomina instancia de la clase.</p>

          <p>Las clases son un pilar fundamental de la programación orientada a objetos. Los lenguajes de programación que soportan clases difieren sutilmente en su soporte para diversas características relacionadas con clases.</p> 

          <h2>4.2. Definición de Atributos</h2>

          <p>Las variables pertenecientes a una clase se definen como atributos, campos o propiedades. Éstas se definen usando una de las siguientes palabras reservadas:

          <ol>
            <li>public que son los atributos con los cuales se puede interactuar desde el exterior del entorno</li> 

            <li>protected son los atributos que permite el acceso completo desde las propias clases y todas las clases heredadas.</li>

            <li>private que son los atributos donde  las propiedades deben estar ocultas al entorno exterior, seguido de una declaración normal de variable.</li> 
          </ol>

          <h2>4.3. Definición de Funciones y Métodos</h2>

          <p>Las funciones en programación son un procedimiento, función o rutina que forma parte de un algoritmo principal que permite resolver una tarea específica. Una función es una parte del programa que contiene un nombre y puede ser involucrado o ejecutado desde cualquier parte del programa cuantas veces sea necesario, es un bloque de código que se ejecuta como unidad funcional, este puede recibir valores, ejecutarse y devolver un valor.</p>

          <p>Los métodos son una subrutina cuyo código es definido en una clase y puede pertenecer tanto a una clase, como a un objeto. Un método consiste generalmente de una serie de sentencias para llevar a cabo una acción, un juego de parámetros de entrada que regularán dicha acción o, posiblemente, un valor de salida de algún tipo.</p>

          <p>La diferencia entre una función y un método  es que una función es un bloque de código que se puede ejecutar en cualquier parte del programa y siempre ejecutara una acción determinada mientras que los métodos al estar asociado con un objeto o clase en particular, puede acceder y modificar los datos privados del objeto correspondiente de forma tal que sea consistente con el comportamiento deseado para el mismo.</p> 

          <h2>4.4. Metodologías Orientadas a Objetos</h2>

          <p>La programación orientada a objetos (POO) es actualmente usada en la programación, es un paradigma de programación que viene a innovar la forma de obtener resultados, permite trabajar de forma más rápida y más compleja mediante clases, propiedades y atributos.</p>

          <p>El elemento fundamental de POO es como su nombre lo indica el objeto, este permite definir un objeto como un conjunto complejo de datos y programas que poseen estructura y forman parte de una organización. La estructura de un objeto está dividida en tres partes y son las relaciones, propiedades y métodos, cada uno de estos componentes desempeña un papel totalmente independiente en la programación orientada a objetos.</p>

          <p>Las relaciones permiten que el objeto se inserte en la organización y están formadas esencialmente por punteros a otros objetos.</p>

          <p>Las propiedades distinguen un objeto determinado de los restantes que forman parte de la misma organización y tiene valores que dependen de la propiedad de que se trate. Las propiedades de un objeto pueden ser heredadas a sus descendientes en la organización.</p>

          <p>Los métodos son las operaciones que pueden realizarse sobre el objeto, que normalmente estarán incorporados en forma de programas (código) que el objeto es capaz de ejecutar y que también pone a disposición de sus descendientes a través de la herencia.</p>

          <h3>Descargar archivo: </h3>

          <a href="https://docs.google.com/document/d/1VM3JM4Yrl4Zrb9KM3LzxKXhTxJUs1Nt8bR8QC0jcSPo/edit?usp=sharing" target="_blank"><img src="../../img/microsoft_word_descarga.png" alt="descargar archivo de word" /></a>          
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