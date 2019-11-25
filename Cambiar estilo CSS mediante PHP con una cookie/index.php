<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Change Styte CSS with PHP</title>
  <?php 
  if(!empty($_COOKIE['_theme'])) $style = $_COOKIE['_theme'];
  else $style = "none";
  ?>
  <link rel="stylesheet" href="<?php echo $style ?>.css" type="text/css" media="screen" />
 </head>

 <body>
  <h1>Lorem ipsum dolor sit amet</h1>
  <a href="theme.php?thm=style">Estilo 1</a> 
  <a href="theme.php?thm=style1">Estilo 2</a>

  <p>Lorem ipsum dolor sit amet, consectetur  adipiscing elit. Fusce facilisis viverra sapien. Sed sapien ligula,  scelerisque nec, blandit nec, elementum at, nulla. Pellentesque ligula  mauris, fermentum eu, fermentum eu, fringilla consequat, enim.  Curabitur metus tortor, semper a, eleifend et, volutpat eu, sem. Donec  ante nulla, tempus accumsan, tempus in, lobortis a, lectus. Vestibulum  tristique, purus quis porta pulvinar, urna ligula imperdiet est, quis  molestie ipsum mauris vel neque. Nulla posuere purus id neque. Mauris  libero nulla, hendrerit a, consectetur ut, porttitor eu, augue. Donec  aliquam rhoncus urna. Fusce facilisis porta odio. In ac nisi non arcu  dapibus scelerisque. Vestibulum a nibh. Vestibulum vitae ligula. Etiam  id mi. Duis a risus sed elit blandit scelerisque. Duis enim.  Pellentesque sodales. Fusce quis ipsum.</p>

  <p>Suspendisse neque tellus, malesuada in, facilisis et, adipiscing sit  amet, risus. Sed egestas. Quisque mauris. Duis id ligula. Nunc quis  tortor. In hendrerit, quam vitae mattis interdum, turpis augue viverra  justo, sed semper sem lorem sed ligula. Curabitur id urna nec risus  volutpat ultrices. Aliquam nec sem. Etiam eu diam. Aenean turpis enim.</p>
 </body>
</html>
