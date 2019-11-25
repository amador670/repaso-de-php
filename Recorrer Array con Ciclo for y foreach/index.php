<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
   body{
    font-family: comic sans ms;
    font-size: 18px;
    text-align: justify;
    margin: 50px
   }
  </style>
 </head>
 <body>

  <h1 style="color:orange">Repaso de ciclo for  y foreach en PHP</h1>

  <h2>Mi familia es:</h2>
  <?php
  $familia = [
   "Papa",
   "Mama",
   "Hermana 1",
   "Hermana 2"
  ];

  for($i=0; $i<count($familia); $i++){
   echo $familia[$i] . "<br>";   
  }
  ?>

  <h2>Mi familia especificamente es:</h2>
  <?php
  $familia2 = [
   "Papa" => "Maximo",
   "Mama" => "Magdalena",
   "Hermana" => "Karen",
   "Hermana menor" => "Sarah"
  ];

  foreach($familia2 as $fraternidad => $nombre){
   echo $fraternidad . ", " . $nombre . "<br>";
  }
  
  echo "<br>";
  echo "Los quiero " . $familia2["Papa"] . " y  " . $familia2["Mama"]
  ?>


 </body>
</html>