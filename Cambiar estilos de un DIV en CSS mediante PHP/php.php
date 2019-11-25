<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Cambiar estilos mediante PHP</title>
  <style>
   body{
    margin: 50px;
    font-size: 18px;
    font-family: Arial;
   }

   form{
    background: #f8f8f8;
    padding: 10px;
   }

   form input[type="text"]{
    padding: 5px;
    margin: 5px;
   }

   form input[type="submit"]{
    margin: 5px;
   }

   #caja{
    margin-top: 10px;
    min-width: 10px;
    max-width: 100%;
    min-height: 10px;
    max-height: 1000px;
    width: <?php echo $ancho . "px";?>;
    height: <?php echo $alto . "px"; ?>;
    background: <?php echo $color;?>;
   }
  </style>
 </head>
 <body>

  <h1 style="color:orange;">Cambiar estilo a un elemento mediante CSS utilizando PHP.</h1>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  
   <input type="text" placeholder="Cambiar Ancho" name="ancho" value="<?php echo $ancho?>"><br>
   <input type="text" placeholder="Cambiar Alto" name="alto" value="<?php echo $alto;?>"><br>
   <input type="text" placeholder="Cambiar Color" name="color" value="<?php echo $color;?>"><br>

   <input type="submit" value="Cambiar Estilos" name="css">
  </form>

  <div id="caja"></div>

 </body>
</html>