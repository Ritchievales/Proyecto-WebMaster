<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<title>Confirmar Compra</title>
	<meta content="Confirmar compra" name="description" />
	<link href="css/checkout.css" rel="stylesheet" type="text/css" />
	<link href="img/shoes.ico" rel="icon" type="favicon.png" />
	
    

</head>
<body>

	<?php include('header.html')?>

<div id="compra">
<h1>Confimar Compra</h1>

<form id="f1" action="" method="post">
<h2 id="label1">Datos del Cliente</h2>
<div><label for="name">Nombre(s):</label><input id="name" name="name" required="" type="input" placeholder="Nombre(s)" /></div>

<div><label for="lastname">Apellidos:</label><input id="lastname" name="lastname" required="" type="input" placeholder="Apellidos" /></div>

<div><label for="phone">Telefono:</label><input id="lada" name="lada" required="" type="input" placeholder="Lada" /> <input id="phone" name="phone" required="" type="tel" placeholder="Telefono" /></div>

<div><label for="address">Dirección:</label><input id="address" name="address" required="" type="input" placeholder="Dirección" /></div>

<div><label for="state">Estado:</label><input id="state" name="state" required="" type="input" placeholder="Estado" /></div>

<div><label for="zip">Código Postal:</label><input id="zip-code" name="zip-code" required="" type="input" placeholder="Código Postal" /></div>
</form>

<form id= "f2" action="" method="post">
<h2 id="label2">Metodo de envío</h2>
<section id="options">
<div><input id="send1" name="send" type="radio" value="DHL" class="radio" /> <label for="send1">DHL</label></div>

<div><input id="send2" name="send" type="radio" value="Estafeta"  class="radio"/> <label for="send2">Estafeta</label></div>

<div><input id="send3" name="send" type="radio" value="UPS"  class="radio"/> <label for="send3">UPS</label></div>
</section>
<h2 id="label3">Forma de Pago</h2>

<div><select><option value="Mastercard">Mastercard</option><option value="Tarjeta2">Tarjeta2</option><option value="Tarjeta3">Tarjeta3</option><option value="Tarjeta4">Tarjeta4</option> </select></div>

<div><input id="cardnum" name="cardnum" required="" type="input" placeholder="xxxx-xxx-xxx" /></div>

<div><input id="cardmonth" name="cardmonth" required="" type="input" placeholder="xx" /> <input id="cardyear" name="cardyear" required="" type="input" placeholder="xx" /></div>
</form>

<form id="f3" action="" method="post">
<h2 id="label4">Confirmar Compra</h2>

<div id="product"><img heigth="100" src="img/product-1.jpg" width="100" /></div>

<div>
<p>Producto:xxx</p>

<p>Cantidad:xxx</p>

<p>Precio:</p>
</div>

<div id="total">
<p>Total:</p>
</div>

<!--<Embed src = "carrito.html">-->
<div><button id="bconfirma" type="submit">Confirmar Compra</button></div>
</form>
</div>

<?php include('footer.html')?>
<script src="js/ValidarCheckout.js"></script> 
</body>
</html>