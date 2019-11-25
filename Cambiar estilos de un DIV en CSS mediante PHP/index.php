<?php
if(isset($_POST["css"])){
 $ancho = $_POST["ancho"];
 $alto = $_POST["alto"];
 $color = $_POST["color"];
}

if(empty($_POST["ancho"])){
 $ancho = "200";
}
if(empty($_POST["alto"])){
 $alto = "200";
}
if(empty($_POST["color"])){
 $color = "#d6d6d6";
}

require "php.php";
?>