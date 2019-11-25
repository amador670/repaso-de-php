<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document 2</title>
  <style>
   body{
    font-family: comic sans ms;
    font-size: 19px;
    margin: 50px;
    text-align: justify;
   }
  </style>
 </head>
 <body>

  <h1 style="color: #08d100;">2.- Consultas en una base de datos.</h1>

  <p>Este metodo nos permite usar varios gestores de base de datos diferentes a MySQL. Es el mas recomendado y sugerido de usar ya que se puede implementar en diferentes base de datos, aparte de este metodo existen los metodos de conexion</p>

  <pre>
		$base_de_datos = "mysql:host=localhost;dbname=nombre de base de datos"; 
		$usuario = "usuario";
		$clave = "clave";

		$conexion = new PDO($base_de_datos, $usuario, $clave);
	</pre>

  <?php 
  try {
   $conexion = new PDO("mysql:host=localhost;dbname=conectando_mdb_pdo", "root", "");
   echo "Conectado a la base de datos correctamente.";

   //Prepare se encarga de precargar la tabla seleccionada de la base de datos
   $consulta = $conexion->prepare("SELECT * FROM usuarios_consulta");

   //Luego se ejecuta
   $consulta->execute();

   //Se añade la consulta en forma de arreglo
   $resultado = $consulta->fetchAll();

   echo "Los usuarios en la base de datos son: " . "<br>";
   foreach($resultado as $datos) {
    echo $datos["id"] . "- ";
    echo $datos["nombre"] . "<br>";
   }
  } 
  //PDOException representa un error generado por PDO
  catch(PDOException $error){
   echo "Error al conectar con la base de datos." . "<br>";
   echo "Error: " . $error->getMessage();
  }
  ?>	

 </body>
</html>
