<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Caja de comentarios</title>

    <link rel="stylesheet" href="../../estilos/comment-box.css">

  </head>
  <body>

    <div class="contenido row">
      <img src="../../img/hr.png" alt="hr" class="hr">

      <h2 class="col-xs-12">Añadir comentarios</h2>      

      <div class="formulario-container col-xs-12">

        <form class="form-comment-box" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"], ENT_QUOTES, "UTF-8");?>">

          <input type="text"  name="nombre" placeholder="Nombre y Apellido" minlength="4" maxlength="30" value="<?php if(!$enviado && isset($nombre)) echo $nombre?>">

          <input type="email"  name="email" placeholder="Correo electronico" maxlength="60" minlength="11" value="<?php if(!$enviado && isset($email)) echo $email?>">

          <textarea name="mensajeDescripcion" placeholder="Comentario" maxlength="800" minlength="11"><?php if(!$enviado && isset($mensajeDescripcion)) echo $mensajeDescripcion?></textarea>


          <?php if(!empty($errores)): ?>
          <div class="alert-formulario error">
            <?php echo $errores; ?>
          </div>
          <?php endif ?>

          <div class="row end-xs">
            <input type="submit" class="boton-enviar" value="Enviar Comentario" name="submit">
          </div>
        </form>

        <?php mostrarComentarios();?>   

      </div>
    </div>

  </body>
</html>