
<?php 
$ejemplo = true;
$ciclo = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>
		body{
			font-family: comic sans ms;
			font-size: 19px;
			text-align: justify;
			margin:  50px;
		}
	</style>
</head>
<body>

	<h1 style="color: blue">Codigo php fuera de las etiquetas</h1>

	<!-- Condicional while -->
	<?php if($ejemplo == true):?>
		<h2>Ejemplo 1. Propiedad true</h2>
	<?php else: ?>
		<h2>Ejemplo 2. Propiedad false</h2>
	<?php endif; ?>
	
	<!-- Ciclo -->
	<?php while ($ciclo <= 3):?>
		<p><?php echo $ciclo . "- ";?> Parrafo</p>
		<?php $ciclo++;?>
	<?php endwhile;?>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptatem laboriosam quod placeat sint at consequuntur assumenda nobis consequatur blanditiis iure doloremque, fuga, excepturi, aut hic molestiae sed. Iste, dicta!</p>
	<p>Maiores laborum quo, quas esse laudantium nulla earum ipsam magni itaque facilis ullam, nesciunt quidem velit consequuntur molestias! Commodi aliquam sapiente, officiis quae! Obcaecati expedita tempore possimus doloribus officia, sed.</p>
	<p>Eligendi quia officia ipsam nisi numquam sapiente deserunt sunt architecto, necessitatibus atque quis eaque omnis voluptatum pariatur facere sequi rerum voluptatem, animi commodi odio doloribus. Voluptate non officiis, laboriosam adipisci.</p>
	<p>Fugiat facilis, asperiores perspiciatis reiciendis officia ullam, temporibus, quas vel obcaecati amet dignissimos enim architecto pariatur laudantium! Consequatur optio incidunt repudiandae explicabo, cupiditate corrupti ducimus velit quis quasi aliquam, architecto!</p>
	<p>Harum nam unde blanditiis autem maiores consectetur, magnam ratione quisquam! Iste voluptatibus ipsum, quis eaque placeat labore! Doloremque ex facilis ipsum aliquam aperiam voluptatum quas repudiandae provident soluta. Necessitatibus, temporibus.</p>

</body>
</html>