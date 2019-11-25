<?php
function verificarEnvio(){
 if(!$_POST["nombre"] == "" && !$_POST["edad"] == ""){
  $datos = array(
   "nombre" => $_POST['nombre'],
   "edad" => $_POST['edad']
  );  

  echo "<h2 class='aviso'>Su nombre es: " . $datos["nombre"] . " y tiene " . $datos["edad"] . " años" . "</h2";   
 }
 else{
  echo "<h2 class='aviso'>Complete el formulario</h2>";
 }
}
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
   body{
    margin: 50px;
    font-size: 17px;
    font-family: comic sans ms;
   }
   .aviso{
    border:3px double blue; 
    color:#04bbff; 
    padding:5px; 
    background-color:#eaf8ff;
   }
  </style>
 </head>
 <body>

  <h1 style="color:blue">Practica de ciclo foreach() con input y array</h1>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
   <input type="text" placeholder="Nombre" name="nombre">
   <input type="edad" placeholder="Edad" name="edad">
   <input type="submit" name="enviar">
  </form>

  <?php 
  if(isset($_POST["enviar"])){
   verificarEnvio();
  }
  ?>

 </body>
</html>