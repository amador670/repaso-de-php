<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Unidad II - Ingeniería de Software</title>

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
          <h1>Clases de Análisis</h1> 
          <h2>Unidad II</h2> 

          <h2>2.1. Definición de clases de Análisis</h2>

          <p>Las clases son un modelo que define un conjunto de variables, y métodos apropiados para operar con dichos datos. Cada objeto creado a partir de la clase se denomina instancia de la clase.</p> 

          <p>Las clases son  una construcción que permite crear datos personalizados mediante la agrupación de variables de otros tipos, métodos y eventos.  Se definen los datos y el comportamiento de un tipo.  Las clases son un pilar fundamental de la programación orientada a objetos, la clase se define como  un tipo de objeto, pero no es propiamente un objeto. Un objeto es una entidad concreta basada en una clase y, a veces, se denomina instancia de una clase.</p>

          <h2>2.2. Tipos de Clases</h2>

          <p>Las clases son una parte muy importante de la programación orientada a objetos (POO), si no existieran las clases no harían objetos. Cada clase tiene sus propias características y ventajas, y dependiendo de la acción que se quiere determinar se determina cuando debe ser usado cada una, de esta manera se logra el desarrolla un buen software.</p>

          <p>Las clases se declaran mediante la palabra clave class. El nivel de acceso precede de la palabra clave que se le añade seguidamente de class. Los campos, propiedades, métodos y eventos de una clase se conocen colectivamente como miembros de clase.</p>

          <p>Los tipos de clases son:</p> 

          <ul>
            <li><b>Class. Public</b>: Son muy comunes, accesibles desde cualquier otra clase en la misma librería (de otro modo hay que importarlas). </li>

            <li><b>Class. Abstract</b>: Aquellas que tienen por lo menos un método abstracto. No implementan sus métodos, sino que dan las bases para que sean implementados en la herencia. </li>

            <li><b>Class. Final</b>: Son las que terminan la cadena de herencia. Útiles por motivos de seguridad y eficiencia de un programa, ya que no permiten crear más sub-divisiones por debajo de esta clase. </li>

            <li><b>Class. Synchronizable</b>: Especifica que sus métodos son sincronizados, evitando problemas con los hilo de ejecución, de forma que estos no pueden empezar a correr un método si no ha acabado el otro. </li>
          </ul>

          <h2>2.3. Actores del Diagrama</h2>

          <p>Un diagrama es una representación gráfica que sirve para representar la estructura de un sistema que será implementado utilizando un lenguaje orientado a objetos (POO). Los diagramas de clases se realizan en la fase de diseño del software después de la fase de requisitos.</p> 

          <p>La idea de estos diagramas es representar las clases que tendrá el sistema así como su contenido y sus relaciones con otras clases. Los componentes de un diagrama de clases son los que se incluyen en UML (Unified Modeling Language) que es el lenguaje de modelado más extendido.</p> 

          <h2>2.4. Relación de Herencia</h2>

          <p>La herencia comúnmente usada en programación orientada a objeto, es el mecanismo más utilizado para alcanzar objetivos precisos en el desarrollo de software, estos permiten la reutilización y extensibilidad de una clase. A través de la herencia los programadores pueden crear clases partiendo de una clase preexistente evitando así el rediseño y modificación de la parte ya implementada.</p>

          <p>La herencia es una propiedad que nos facilita la creación de objetos a partir de otros ya existentes e implica que una subclase obtiene todo el comportamiento (métodos) y eventualmente.</p> 

          <p>Las ventanas de la herencia son que ayuda al programador a ahorrar código y tiempo ya que se utiliza una clase implementada y verificada anteriormente, las clases derivadas heredan el comportamiento y atributos de la clase base y solo consta modificar el heredado, y la última ventaja es que todas las clases pueden servir como clase base para crear otras.</p>

          <p>Sin embargo existen algunas desventajas y la más común de ellas es que una clase extensa y demasiado completa puede ocasionar problemas al programador para comprender su funcionamiento, además que se vuelve complejo detectar y resolver errores de programación.</p>
          
          <h3>Descargar archivo: </h3>
          
          <a href="https://docs.google.com/document/d/13xTNmOqQHRi-Mho9GBrNmhjQ-Ynq-RT231g9nsKhhd0/edit?usp=sharing" target="_blank"><img src="../../img/microsoft_word_descarga.png" alt="descargar archivo de word" /></a>
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