<?php
//Esta funcion se encarga de editar la fecha, de esta forma se visualizara de una forma mas estetica
function fecha($fecha){
  //Convierte una cadena de texto a tiempo
  $timestamp = strtotime($fecha);

  $meses = [
    "Enero",
    "Febrero",
    "Marzo",
    "Abril",
    "Mayo",
    "Junio",
    "Julio",
    "Agosto",
    "Septiembre",
    "Octubre",
    "Noviembre",
    "Diciembre"
  ];

  $dia = date("d", $timestamp);
  $mes = date("m", $timestamp)-1;
  $year = date("Y", $timestamp);

  $fecha = "$dia de $meses[$mes] de $year";
  return $fecha;
}


?>