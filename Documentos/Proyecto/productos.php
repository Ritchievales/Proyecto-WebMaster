<html lang="es">
<head>
	<title>ZapateriaOnline</title>
	<meta name="description" content="Productos de tienda Online de zapatos" />
   	<meta name="keywords" 	 content="Calzado,Dama,Caballero,Infantil,Vestir,Casual" />
	<meta charset="UTF-8" /> 
	<link type="text/css" rel="stylesheet" href="css/estiloProductos.css">
	<link href="img/shoes.ico" rel="icon" type="image/x-icon" />
	<link rel="stylesheet" href="css/estiloSliderProd.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/productosSlider.js"></script>
</head>
<body>	
  	<header id="header">
		<script src="js/jquery-1.9.1.min.js"></script>
	 	<script type="text/javascript">
		      $('#header').load('header.html');
		</script>	
	</header>
	<div class="cuerpo" >
	<section class="slider-container ">
		<ul id="slider" class="slider-wrapper">
			<li class="slide-current">
				<img src="img/prommocion2.png" alt="varios zapatos" />
				<div class="caption">
					<h3 class="caption-title">Diseño web</h3>
					<p>Lorem ipsum dolor sit amet</p>
				</div>
			</li>

			<li>
				<img src="img/promocion3.jpg"  alt="varios zapatos" />
				<div class="caption">
					<h3 class="caption-title">Desarrollo web</h3>
					<p>Lorem ipsum dolor sit amet</p>
				</div>
			</li>

			<li>
				<img src="img/promocion4.jpg"alt="varios zapatos" />
				<div class="caption">
					<h3 class="caption-title">Javascript</h3>
					<p>Lorem ipsum dolor sit amet</p>
				</div>
			</li>

		</ul>
		<div class="shadow"></div>
		<ul id="slider-controls" class="slider-controls"></ul>
        </section>

		<section class="calzado">
		<?php
		include 'conexion.php';
		$re=mysql_query("select * from productos")or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
			<article class="producto">
				<div class="sliderProducto">
				<img src="img/productos/<?php echo $f['Imagen'];?>" width="100%" height="100%" alt="zapato" />
				</div>
				<div class="infoProducto">  
					<div>
						<p class="precioProducto">$ <?php echo $f['Precio'];?> MN<p>
						<p class="nombreProducto"><?php echo $f['Nombre'];?></p>
					</div>
					<div>
						<a href="http://pro-shoes.org/single/detalleProducto.php?id=<?php  echo $f['IdProducto'];?>">
							<button type="button" class="detalleProducto">Vista rápida</button>	
						</a>	
					</div>
				</div>
			</article>
		<?php
		   }
		?>
			
			

		</section>
		
	</div>
	<footer id="footer">
    		<script src="js/jquery-1.9.1.min.js"></script>
    		<script type="text/javascript">
      		$('#footer').load('footer.html');
    		</script>
	</footer>
</body>
<html>