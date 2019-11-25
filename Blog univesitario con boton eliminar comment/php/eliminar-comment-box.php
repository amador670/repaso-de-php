<?php 

if(isset($_GET["id"])){
  $id = $_GET["id"];

  $conexion = new PDO("mysql:host=localhost;dbname=blog_aprendiendo_facil", "root", "");
  $sqlEliminar = "DELETE FROM comentarios WHERE id = $id";
  $consulta = $conexion->prepare($sqlEliminar);
  $consulta->execute();
}

?>