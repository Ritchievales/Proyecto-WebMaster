<?php
	session_start();
	include './conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
				        $arreglo=$_SESSION['carrito'];
					$encontro=false;
					$numero=0;
					for($i=0;$i<count($arreglo);$i++){
						if($arreglo[$i]['Id']==$_GET['id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
						$_SESSION['carrito']=$arreglo;
					}else{
						$nombre="";
						$precio=0;
						$imagen="";
						$re=mysql_query("select * from productos where IdProducto=".$_GET['id']);
						while ($f=mysql_fetch_array($re)) {
							$nombre=$f['Nombre'];
							$precio=$f['Precio'];
							$imagen=$f['Imagen'];
						}
						$datosNuevos=array('Id'=>$_GET['id'],
										'nombre'=>$nombre,
										'precio'=>$precio,
										'imagen'=>$imagen,
										'Cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;


					}
		}




	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysql_query("select * from productos where IdProducto=".$_GET['id']);
			while ($f=mysql_fetch_array($re)) {
				$nombre=$f['Nombre'];
				$precio=$f['Precio'];
				$imagen=$f['Imagen'];
			}
			$arreglo[]=array('Id'=>$_GET['id'],
							'nombre'=>$nombre,
							'precio'=>$precio,
							'imagen'=>$imagen,
							'Cantidad'=>1);
			$_SESSION['carrito']=$arreglo;
		}
	}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<h1>Carrito de compras</h1>
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		<?php
			$total=0;
			if(isset($_SESSION['carrito'])){
			$datos=$_SESSION['carrito'];
			
			$total=0;
			for($i=0;$i<count($datos);$i++){
				
	?>
				<div class="producto">
					<center>
						<img src="../img/productos/<?php echo $datos[$i]['imagen'];?>"><br>
						<span><?php echo $datos[$i]['nombre'];?></span><br>
						<span>Precio: <?php echo $datos[$i]['precio'];?></span><br>
						<span>Cantidad: <input type="text" value="<?php echo $datos[$i]['Cantidad'];?>"></span><br>
						<span>Subtotal:<?php echo $datos[$i]['Cantidad']*$datos[$i]['precio'];?></span><br>
						
										</center>
				</div>
			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['precio'])+$total;
			}
				
			}else{
				echo '<center><h2>No has añadido ningun producto</h2></center>';
			}
			echo '<center><h2>Total: '.$total.'</h2></center>';
		
		?>
		<center><a href="./">Ver catalogo</a></center>
	</section>
</body>
</html>