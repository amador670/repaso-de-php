<?php

function enviarArchivo(){
 if($_POST){

  if(isset($_POST["enviarArchivo"]) && 
     !empty($_POST["nombreArchivo"]) &&
     strlen($_POST["nombreArchivo"]) > 4 && 
     !empty($_FILES['subirArchivo']['name'])){

   $extensionArchivo = pathinfo($_FILES["subirArchivo"]["name"], PATHINFO_EXTENSION);

   if($extensionArchivo == "jpg" || $extensionArchivo == "jpeg" || $extensionArchivo == "png"){

    //Esta variable contien el nombre que eliga el usuario
    $nombre_archivo = $_POST["nombreArchivo"] . "." . pathinfo($_FILES["subirArchivo"]["name"], PATHINFO_EXTENSION);
    //Creamos una variable con la direccion donde se guardaran los archivos
    $destino = "archivos_subidos/";
    //Elegimos el input="file" 
    $archivo = $_FILES["subirArchivo"]["name"];
    //Seleccionamos el archivo temporal
    $nombre_tmp =  $_FILES["subirArchivo"]["tmp_name"];

    //Este metodo nos permite mover el archivo, en este caso movemos el archivo temporal, a la carpeta destino con el nombre del archivo elegido por el usuario
    move_uploaded_file($nombre_tmp, $destino . $nombre_archivo);

    echo "<div class='success'>El archivo se envio correctamente.</div>";
   } 
   else{
    echo "<div class='error'>Error, eliga solo formatos jpg, jpeg o png.</div>";
   }
  }
  else{
   echo "<div class='error'>Error, vuelva a intentar enviar el archivo.</div>";
  }
 }
}
require "index.view.php";
?>