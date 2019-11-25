<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Unidad I - Ingeniería de Software</title>

    <link rel="stylesheet" href="../../estilos/normalize-resetear-estandar-css/normalize.css">

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
          <h1>Fundamentos Básicos de la Ingeniería de Software</h1> 
          <h2>Unidad I</h2> 

          <h2>1.1. Definición de ingeniería de software</h2>

          <p>La ingeniería de software es una disciplina que está formada por métodos, herramientas y técnicas que son utilizadas para el desarrollo de programas informáticos y aplicaciones informáticas (software).</p>

          <p>Es una disciplina basada en la programación, es la actividad principal a la hora de crear un software, el ingeniero de software es el encargado de toda la elaboración del proyecto y es desarrollado en un plazo determinado.</p>

          <p>El ingeniero de software incluye un análisis previo de la situación y el  problema a solucionar, el diseño y apariencia, y su funcionalidad. Es el encargado de todas las pruebas necesarias para su correcto funcionamiento, se encarga de adoptar un enfoque sistemático y utilizar herramientas apropiadas para resolver el problema planteado.</p>

          <p>Los fundamentos básicos son la especificación del diseño, los datos tratados y la documentación que permite el desarrollo e instalación.</p>

          <h2>1.2. Herramientas de Modelado UML</h2>

          <p>Lenguaje unificado de modelado o en ingles unified modeling language (UML) es el lenguaje de sistemas de software más conocido y utilizado en la actualidad, respaldado por object management group (omg), es un lenguaje gráfico de visualización, especificar, construir y  documentar un sistema incluye aspectos conceptuales como procesos de negocios, funciones del sistema, y esquemas de bases de datos.</p> 

          <p>Cabe destacar que UML es un “lenguaje” para especificar y no para describir procesos y métodos, se una para construir, documentar y definir un sistema, en otras palabras es el lenguaje en el que esta descripto el modelo.</p>

          <p>Algunas de las herramientas más utilizadas son:</p> 

          <p><b>1.- DIA</b>, programa de creación de diagramas, inspirados en Windows Visio, dispone de una serie de extensiones para elaboración de diagramas de flujos, diagramas de red, entre otros.</p>

          <p><b>2.- UMBRELLO</b>, una herramienta intuitiva, permite guardar la estética común con todos los programas desarrollados, soportado por la generación de código a partir del modelo de elementos y diagramas de un gran número de lenguajes.</p> 

          <p><b>3.- ArgoUML</b>, Es basado en java y funciona en cualquier plataforma, y tiene una curva de aprendizaje media-rápida. Tiene soporte para base de datos, exportar diagramas en distintos formatos, soporte cognitivo y generación de código parcial.</p>

          <p>Entre otras herramientas que permite la elaboración de diagramas, creadores de base de datos y distintos formatos para construir procesos funcionales de sistema.</p>

          <h2>1.3. Metodologías para el diseño de Software</h2>

          <p>Existen diferentes metodologías que son las que nos permite la elaboración y diseño correcto de un software, las más utilizadas actualmente son:</p>

          <p><b>1.- El método de cascada</b>, el método más antiguo que se puede encontrar, es un método de desarrollo de software lineal que contiene diferentes fases de desarrollo y son:</p>

          <ul>
            <li>Análisis de requisitos</li>
            <li>Diseño de sistema</li>
            <li>Diseño de programa</li>
            <li>Modificación</li>
            <li>Ejecución de pruebas</li>
            <li>Codificación</li>
            <li>Mantenimiento</li>
          </ul>

          <p>El problema de la fase lineal es que después de que se pasa un proceso no se puede volver a la fase anterior.</p>

          <p><b>2.- Método de prototipos</b>, consiste en la elaboración de un prototipo antes de pasar al desarrollo del software, es un método de prueba que permite al cliente ver la versión, permite saber si al cliente le gusta entonces continuamos con el proceso o bien regresar atrás y realizar un nuevo prototipo.</p> 

          <p>Las fases del desarrollo en el método productivo son: </p>

          <ul>
            <li>Planeación</li>
            <li>Modelado</li>
            <li>Elaboración del prototipo</li>
            <li>Desarrollo entrega</li>
            <li>Retro-alimentación</li>
            <li>Comunicación con el cliente</li>
            <li>Entrega del producto final</li>
          </ul>

          <p><b>3.- Método incremental</b>, es una combinación del método en cascada y del método de prototipos, es una fase lineal que se puede volver a empezar y realizar una interacción. Este método es llamado incremental porque conforme avanza se tendrá una serie de códigos fuente listo para utilizar y al mismo tiempo puede ser utilizado como prototipo, por eso se dice que es una combinación de dos métodos.</p> 

          <p>Las fases de este modelo son:</p>

          <ul>
            <li>Inicialización</li>
            <li>Periodos de iteración</li>
            <li>Lista de control</li>
          </ul>

          <p><b>4.- Modelo en espiral</b>, Este método tiene las mismas fases que el lineal sin embargo permite saltarse las fases, no tiene orden alguno las fases, pueden ser utilizados los prototipos para ir avanzando y avanzando cada vez mas como si fuera un espiral.</p>

          <p>Sus fases son:</p> 

          <ul>
            <li>Determinar objetivo</li>
            <li>Análisis de riesgo</li>
            <li>Desarrollar validar</li>
            <li>Probar</li>
            <li>Planificación</li>
          </ul>

          <p>Una vez que se cumple una fase se puede empezar utilizando un prototipo y continuar con la siguiente fase y así sucesivamente.</p> 

          <h2>1.4. Casos de uso de sistemas de ingeniería de software</h2>

          <p>Los sistemas de ingeniería de software pueden ser utilizados en diferentes casos, algunos de ellos son:</p> 

          <p><b>1.- Sistemas software de gestión.</b> Son programas que utilizan grandes cantidades de información almacenada en bases de datos con objeto de facilitar las transacciones comerciales o la toma de decisiones, permite realizar tareas convencionales de procesamiento de datos e información.</p>

          <p>Este sistema se caracteriza por el gran volumen que controlan, el procesamiento es sencillo e implementado con software de alto nivel e interactividad con el usuario.</p> 

          <p>Un ejemplo de este sistema son los programas de facturación empresarial o administración y relaciones laborales que pasan por aplicaciones de base de datos e intercambio de información.</p> 

          <p><b>2.- Sistemas de software para ordenadores personales</b>. Son programas orientados a usuarios no profesionales, en sus requisitos se encuentran la facilidad de uso y el bajo costo.</p>

          <p>Un ejemplo de estos software son Procesadores de textos (Word, Wordperfect, AmiPro), Bases de datos (Access, Developer), Hojas de cálculo ( Excel, Lotus 123), Aplicaciones de diseño y tratamiento de imágenes (Corel Draw, Photoshop), Reproductores de sonido (Winamp, Real Player), Programas de grabación (Nero, CloneCd), ente software que son orientados a usuarios no profesionales.</p>

          <p><b>3.- Sistemas de software de ingeniería y científicos</b>. Se encarga de realizar complejos cálculos sobre datos numéricos de todo tipo. En este caso la corrección y exactitud de las operaciones que realizan es uno de los requisitos básicos que deben cumplir.</p>

          <p>Estos sistemas se suelen enfocar hacia los análisis estadísticos o cálculo de estructuras generando una aplicación típica de diseño asistido por ordenador. No suelen ser interactivos, por lo que tampoco disfrutan de una interfaz amigable.</p>

          <p>Un ejemplo de los software de ingeniería y científicos son los programas orientados al tratamiento de números o estadísticas (Mathematica, Statgraphic), diseño de planos o estructuras (AutoCad) o programas encargados de las predicciones meteorológicas.</p>

          <p><b>4.- Sistemas de software de tiempo real.</b> Estos son uno de los software más extenso, son capaces de responder a eventos externos con un tiempo de respuesta máximo determinado, tienen una interfaz con una gran cantidad de sensores, son confiables y contienen respuestas controladas, incluso en condiciones de sobrecarga, y por ultimo no pueden volver atrás y reiniciar su contexto preexistente.</p>

          <p>Estos sistemas de tiempo real suelen estar integrados en un sistema de ingeniería más general, en el que realizan funciones de control y/o monitorización.</p>

          <p>Algunos ejemplos de este software son: Control de Procesos Industriales, Control de Aeronaves en vuelo, Sistemas de Armas, Control de Redes de Comunicación, Procesamiento de Señales, Electrónica del automóvil, Robótica, Control de Plantas Nucleares.</p>

          <h3>Descargar archivo: </h3>
          
          <a href="https://docs.google.com/document/d/1pnSKIy5BQRmEmV-pM4WoVHeh1ksXpqqjb4P4RXf9mT0/edit?usp=sharing" target="_blank"><img src="../../img/microsoft_word_descarga.png" alt="descargar archivo de word" /></a>
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