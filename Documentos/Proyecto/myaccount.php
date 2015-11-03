<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<title>Mi Perfil</title>
	<link href="css/account.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php require('header.html')?>
<div id="wrapper">	
<h2>Informacion Personal</h2>


<div id="divcenter">
<form action="" method="post">
<div class="divinfo"><label for="name">Nombre:</label> <input id="name" name="name" type="text" class="texto" /></div>

<div class="divinfo"><label for="lastname">Apellidos:</label> <input id="lastname" name="lastname" type="text" class="texto"/></div>

<div id="gender">
<p>Sexo</p>

<div class="divinfo"><input id="f" name="sex" type="radio" value="femenino" /> <label for="f">Femenino</label></div>

<div class="divinfo"><input id="m" name="sex" type="radio" value="masculino" /> <label for="m">Masculino</label></div>
</div>

<div class="divinfo"> <label for="birthday">Fecha de Nacimiento</label> <input id="birthday" name="birthday" type="date" class="texto" /></div>

<div class="divinfo">
<p>Dirección:</p>

<div class="divinfo"><label for="address">Calle:</label> <input id="address" name="addres" type="text" class="texto" /></div>

<div class="divinfo"><label for="country">País:</label> <input id="country" name="counry" type="text" class="texto" /></div>

<div class="divinfo"><label for="state">Estado:</label> <input id="state" name="state" type="text" class="texto"/>
<div class="divinfo"><label for="town">Municipio:</label> <input id="town" name="town" type="text" class="texto"/></div>

<div class="divinfo"><label for="city">Ciudad:</label> <input id="city" name="city" type="text" class="texto"/></div>
</div>

<div class="divinfo"><label for="phone">Teléfono:</label> <input id="phone" name="phone" type="tel" />
 <input  type="image" id="plusphone" src="img/Plus-Icon.png" width="20" heigth="20" onclick="return false"/></div>
<div class="divinfo"><label for="mail">Correo:</label> <input id="mail" name="mail" type="email" /> 
<input type="image" id="plusmail" atl="#" src="img/Plus-Icon.png" heigth="20" width="20" onclick="return false"></div>

<div class="divinfo"><label for="avatar">Avatar:</label> <input accept="image/png" id="avatar" name="avatar" type="file" /></div>

<div id="articles">
<p>Articulos de interes</p>

<div class="divinfo"><input id="art1" name="art" type="checkbox" value="art1" /> <label for="art1"> articulo1</label></div>

<div class="divinfo"><input id="art2" name="art" type="checkbox" value="art2" /> <label for="art2"> articulo2</label></div>

<div class="divinfo"><input id="art3" name="art" type="checkbox" value="art3" /> <label for="art3"> articulo3</label></div>

<div class="divinfo"><input id="art4" name="art" type="checkbox" value="art4" /> <label for="art4"> articulo4</label></div>

<div class="divinfo"><input id="art5" name="art" type="checkbox" value="art5" /> <label for="art5"> articulo5</label></div>

<div class="divinfo"><input id="art6" name="art" type="checkbox" value="art6" /> <label for="art6"> articulo6</label></div>
</div>

<div class="divinfo"><button type="submit" class="boton">enviar</button></div>
</div>
</form>
</div>

<script src="js/validacuenta.js"></script>
<script src="js/multiples.js"></script>
</div>


<?php require('footer.html')?>
</body>

</html>