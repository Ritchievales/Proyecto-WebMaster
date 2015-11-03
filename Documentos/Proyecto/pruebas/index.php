<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<h1>Carrito De Compras</h1>
		<a href="./pruebas/carritodecompras.php" title="ver carrito de compras">
			<img src="../pruebas/imagenes/carrito.png">
		</a>
	</header>
	<section>
		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>


			<div class="producto">
			<center>
				<img src="../img/productos/<?php echo $f['Imagen'];?>"><br>
				<span><?php echo $f['Nombre'];?></span><br>
				<a href="../pruebas/detalles.php?id=<?php  echo $f['IdProducto'];?>">ver</a>
			</center>
		</div>
	<?php
		}
	?>
		
		

		
	</section>
</body>
</html>