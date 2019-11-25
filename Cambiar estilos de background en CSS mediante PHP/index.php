<?php
//Colores 
$color[0] = "green";
$color[1] = "tomato";
$color[2] = "#0495ff";
$color[3] = "green";
$color[4] = "orange";
$color[5] = "#ff9fb0";

//Valor aleatorio
$valorAleatorio = rand(0, 5);

//Cambiar background en el body
echo "<style>body{background: $color[$valorAleatorio];}</style>";

require "estilos.php";

?>