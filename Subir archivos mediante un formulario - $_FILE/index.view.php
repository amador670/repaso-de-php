<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/estilos.css">
 </head>
 <body>

  <h1 style="color:#0062ff">Enviar archivo mediante PHP</h1>

  <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data">

   <input type="text" placeholder="Nombre del archivo" name="nombreArchivo">
   <br>
   <input type="file" name="subirArchivo">
   <br><br>
   <input type="submit" value="Enviar archivo" name="enviarArchivo">

  </form>

  <?php enviarArchivo();?>

 </body>
</html>