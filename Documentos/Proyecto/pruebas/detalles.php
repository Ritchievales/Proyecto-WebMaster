
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<h1>Detalles</h1>
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos where IdProducto=".$_GET['id'])or die(mysql_error());
		while ($f=mysql_fetch_array($re)) 
		{
	?>
			
			<center>
				<img src="../img/productos/<?php echo $f['Imagen'];?>"><br>
				<span><?php echo $f['Nombre'];?></span><br>
				<span>Precio: <?php echo $f['Precio'];?></span><br>
				<a href="./carritodecompras.php?id=<?php  echo $f['IdProducto'];?>">Añadir al carrito de compras</a>
			</center>
		
	<?php
		}
	?>		
	</section>
</body>
</html>