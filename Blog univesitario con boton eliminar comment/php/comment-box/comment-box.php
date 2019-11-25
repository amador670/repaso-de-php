<?php 
require "../../php/funciones.php";
require "../../php/eliminar-comment-box.php";

$errores = "";
$enviado = "";

if(isset($_POST["submit"])){
  //Variables del Metodo $_POST[]
  $nombre = $_POST["nombre"];
  $email =  strtolower($_POST["email"]);
  $mensajeDescripcion = $_POST["mensajeDescripcion"];

  //Verificacion de variables del Metodo $_POST[]
  $verificarNombre = preg_match("/^\S[a-zA-ZAEIOUáéíóúÑñ\s]+$/", $nombre);
  $verificarCorreo = preg_match("/^[-\w.%+]{1,50}@(?:[A-Z0-9-]{1,50}\.){1,50}[A-Z]{2,50}$/i", $email);
  $verificarMensaje = preg_match("/^\S[a-zA-ZAEIOUáéíóúÑñ\^$.*+-?!:|()\",;\s]+$/", $mensajeDescripcion);

  //Validacion del nombre
  if(isset($nombre) && strlen($nombre) >= 1 && strlen($nombre) <= 3){
    $errores .= "Nombre muy corto" . "<br>";
  } 
  elseif(isset($nombre) && strlen($nombre) >= 30){
    $errores .= "Nombre demasiado largo." . "<br>";
  }
  else{
    if(!empty($nombre) && $verificarNombre){
      $nombre = trim($nombre);
      $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    }
    else{
      $errores .= "Ingresa un Nombre." . "<br>";
    }
  }

  /*Validacion del email*/
  if(isset($email) && strlen($email) >= 1 && strlen($email) <= 11){
    $errores .= "Correo Electrónico muy corto." . "<br>";
  } 
  elseif(isset($email) && strlen($email) >= 60){
    $errores .= "Correo Electrónico demasiado largo." . "<br>";
  }
  else{
    if(!empty($email) && $verificarCorreo){
      $email = trim($email);
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    } 
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errores .= "Ingresa un Correo Electrónico." . "<br>";
    }
    else{
      $errores .= "Ingresa un Correo Electrónico." . "<br>";
    }
  }

  /*Validacion del Mensaje Descripcion*/
  if(isset($mensajeDescripcion) && strlen($mensajeDescripcion) >= 1 && strlen($mensajeDescripcion) <= 11){
    $errores .= "Mensaje muy corto." . "<br>";
  } 
  elseif(isset($mensajeDescripcion) && strlen($mensajeDescripcion) >= 800){
    $errores .= "Mensaje demasiado largo." . "<br>";
  }
  else{
    if(!empty($mensajeDescripcion) && $verificarMensaje){
      $mensajeDescripcion = htmlspecialchars($mensajeDescripcion);
      $mensajeDescripcion = stripslashes($mensajeDescripcion);
      $mensajeDescripcion = trim($mensajeDescripcion);
      $mensajeDescripcion = filter_var($mensajeDescripcion, FILTER_SANITIZE_STRING);
    } else{
      $errores .= "Ingresa un Mensaje." . "<br>";
    }
  }

  if(!$errores){    

    /*Enviar mensaje al correo*/
    $enviar_a = "amadorjosemartinezrivera600@gmail.com";
    $asunto = "Comentario del blog Aprendiendo Facil";
    $mensaje_de = "De: $nombre \n";
    $mensaje_de .= "Correo: $email \n";
    $mensaje_de .= "Mensaje: " . $mensajeDescripcion;

    mail($enviar_a, $asunto, $mensaje_de);
    $enviado = " ";

    /*Añadir mensaje en el blog*/
    try{
      /*Base de datos*/
      $conexion = new PDO("mysql:host=localhost;dbname=blog_aprendiendo_facil", "root", "");
      /*Creamos la sentencia SQL*/
      $sql = "INSERT INTO comentarios(nombre, email, mensaje)
            VALUES(:nombre, :email, :mensaje)";

      /*Preparamos la consulta*/
      $consulta = $conexion->prepare($sql);

      /*Ejecutamos la consulta*/
      $consulta->execute(array(
        ":nombre" => $nombre,
        ":email" => $email,
        ":mensaje" => $mensajeDescripcion
      ));
    }
    catch(PDOException $e){
      echo "Error al conectar: " . $e->getMessage();
    }
  }
}

/*Mostrar comentarios*/
function mostrarComentarios(){
  try{
    /*Base de datos*/
    $conexion = new PDO("mysql:host=localhost;dbname=blog_aprendiendo_facil", "root", "");

    /*Mostramos los datos*/
    $sqlMostrar = "SELECT * FROM comentarios";
    $consulta = $conexion->prepare($sqlMostrar);
    $consulta->execute();

    /*Mostramos los datos en forma de arreglo*/
    $resultados = $consulta->fetchAll();

    /*Ordenar de forma reversa*/
    $resultados = array_reverse($resultados);


    foreach($resultados as $resultado){
      echo "<div class='container-comentarios'>";
      echo "<div class='nombre'>" . $resultado["nombre"] . "</div>";
      echo "<div class='fecha'>" . fecha($resultado["fecha"]) . "</div>";
      echo "<div class='email'>" . $resultado["email"] . "</div>";
      echo "<div class='mensajeDescripcion'>" . $resultado["mensaje"] . "</div>";

      echo "<span class='btn-eliminar'>
            <a href='$_SERVER[PHP_SELF]?id=$resultado[id]'>Eliminar</a>
            </span>";

      echo "</div>";
    }
  }
  catch(PDOException $e){
    echo "Error al conectar: " . $e->getMessage();
  }
}

require "../../views/comment-box/comment-box.php";
?>