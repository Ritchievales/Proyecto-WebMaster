<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	<title>ZapateriaOnline</title>
	<meta name="description" content="Productos de tienda Online de zapatos" />
   	<meta name="keywords" 	 content="Calzado,Dama,Caballero,Infantil,Vestir,Casual" />
	 
	<link type="text/css" rel="stylesheet" href="css/estiloDetalleProd.css">
	<link href="../img/shoes.ico" rel="icon" type="image/x-icon" />
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="js/productosSlider.js"></script>
	<script src="../js/jsDetalleProducto.js"></script>
	
</head>
<body>

	<script type="text/javascript">
		  /* $(document).ready(function(){
                    try{              
                    	  var txtPrecioUnidad=$("#subtotalDProducto").text();
                          txtPrecioUnidad = $.trim(txtPrecioUnidad);
                    	  precioUnidad= txtPrecioUnidad.substring(2,((txtPrecioUnidad.length)-3));
                    	  var subtotal=0;
                    	  
                          $("select[name=cantidad]").change(function(){
                               //$('p[#subtotalDProducto]').text($(this).val());
                               subtotal = $(this).val()*precioUnidad;
                               document.getElementById('subtotalDProducto').innerHTML = '$ '+ subtotal+' MN';
                               //Asignar texto al nodo seleccionado
                               //$(#subtotalDProducto).text('$ '+ subtotal+' MN');
                          });
                    }catch(e) {
                        alert(e);
		    }	
                  });*/
	</script>

	<header id="header">
		<script src="../js/jquery-1.9.1.min.js"></script>
	 	<script type="text/javascript">
		      $('#header').load('../header.html');
		</script>	
	</header>
	<article class="producto">
	<?php
		include '../conexion.php';
		$re=mysql_query("select * from productos where IdProducto=".$_GET['id'])or die(mysql_error());
		while ($f=mysql_fetch_array($re)) 
		{
	?>
	<div class="sliderProducto">
		<section class="slider-container ">
			<ul id="slider" class="slider-wrapper">
				<li class="slide-current">
					<img src="../img/productos/<?php echo $f['Imagen'];?>" width="100%" height="100%" alt="varios zapatos" />
					<div class="caption">
						<h3 class="caption-title">Diseño web</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</li>
				<li>
					<img src="img/promocion3.jpg" width="100%" height="100%" alt="varios zapatos" />
					<div class="caption">
						<h3 class="caption-title">Desarrollo web</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</li>
				<li>
					<img src="img/promocion4.jpg" width="100%" height="100%" alt="varios zapatos" />
					<div class="caption">
						<h3 class="caption-title">Javascript</h3>
						<p>Lorem ipsum dolor sit amet</p>
					</div>
				</li>
			</ul>
			<!--<div class="shadow"></div>-->
			<ul id="slider-controls" class="slider-controls"></ul>
		</section>
		
	</div>
	<div class="infoProducto">  
		<div class="detalleProducto" >
			<h1 class="nombreProducto"><?php echo $f['Nombre'];?></h1>
			<p class="descripcion"><?php echo $f['Descripcion'];?> </p>
		</div>
		<div class="elegirProducto">
			<div class="ancho">
			  <div class="izq">
				<labe class="lblCantidad" for="cantidad">Cantidad:</label>
			  </div>
			  <div class="der">
			    <select class="slctCantidad" name="cantidad">
				<option value="1" selected>1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>				
			    </select>
			  </div>
			</div>
			<div class="ancho">
			  <div class="izq">	
				<labe class="lblTalla" for="talla">Talla:</label>
			  </div>
			  <div class="der">
			    <select class="slctTalla" name="talla">
				<option value="1" selected>22</option>
				<option value="2">23</option>
				<option value="3">24</option>
				<option value="4">25</option>
				<option value="5">26</option>	
				<option value="5">27</option>	
			    </select>
			  </div>
			</div>				
		</div>
		<div>
		       <p id="subtotalDProducto" class="precioProducto">$ <?php echo $f['Precio'];?> MN</p>
		</div>
		<div class="agregarProducto">
			<a href="http://pro-shoes.org/carrito_tablas.php?id=<?php  echo $f['IdProducto'];?>">
				<button type="button" class="botonProducto" >Agregar a carrito</button>
			</a>
		</div>			
	</div>
	<?php
		}
	?>
	</article>	
	
	
	<footer id="footer">
	 	<script src="../js/jquery-1.9.1.min.js"></script>
	    	<script type="text/javascript">
	      	$('#footer').load('../footer.html');
	    	</script>
	</footer>	
	<script src="js/jsDetalleProducto.js"></script>
</body>
<html>
