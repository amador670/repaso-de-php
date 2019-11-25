<?php
$tema=$_GET['thm'];

setcookie('_theme', $tema, time()+(86400*365), "/", "");

//Regresamos a la misma página donde estuvimos mediante $_SERVER[‘HTTP_REFERER’].
header("Location: ".$_SERVER['HTTP_REFERER']);
?>