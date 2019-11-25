<?php 

//Una clase es una plantilla donde podemos crear atributos (variables) y metodos (funciones)
class clase1{

  //Un atributo es una variable que puede tener una visibilidad que puede ser estatico, privado, publico, protegido
  static $atributo1 = "Soy un atributo.";


  //Creamos un metodo (Es igual a una funcion), este puede tener una visibilidad
  function metodo1(){
    echo "Soy una metodo o funcion.";
  }
}

/*Acceder de forma publico a una clase 

//Acceder a una clase o objeto:
$objeto = new clase1();

//Para acceder al atributo y mostrarlo:
echo $objeto->atributo1;

//Acceder a un metodo:
$objeto->metodo1();

*/

/*Acceder de forma estatica a una clase:*/
echo clase1::$atributo1 . "<br>";
//De esta forma tambien podemos acceder a los metodos (funciones) publicas:
clase1::metodo1();

?>