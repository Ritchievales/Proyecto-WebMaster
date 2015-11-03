<!DOCTYPE html>
<html lang="es">
  <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    <title>Contacto</title>
    
    <meta name="Home" content="Contáctanos">
    <meta name="author" content="Equipo:Web Masters">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/shoes.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="css/contacto.css"/>
  </head>
	
<body>
<!--***********************************************************Aqui se agrega el header-->
    <?php include('header.html')?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!--************************************************************************************************-->
    <script src="js/validar-contacto.js"></script> 

<div id="area">
    <h2 class="etiqueta">Contacto</h2>
    <p class="com">Dirección, Calle, Número, Teléfono, Colonia, Guadalajara, Jalisco</p>
    <p class="com">¡Déjanos tus dudas y comentarios!</p>
    <form id="form">
       <div class="field">
       <label class="conta" for="nombre">Nombre:</label>
       <input class="campo" id="nombre" type="text" placeholder=" Ingresa tu nombre">
       </div>
       <div>
       <label class="error" id="enombre" style="display:none">▲Error en Nombre</label>
       </div>
       <div class="field">
       <label class="conta" for="correo">Correo:</label>
       <input class="campo" id="correo" type="email" placeholder=" Ingresa tu correo">
       </div>
       <div>
       <label class="error" id="ecorreo" style="display:none">▲Error en Correo</label>
       </div>
       <div class="field">
       <label class="conta">Comentario:</label>
       <input class="campo2" id="comentario" type="textfield" placeholder=" Escribe aquí tu comentario">
       </div>
       <div>
       <label class="error" id="ecom" style="display:none">▲Escribe algún comentario</label>
       </div>
       <div>
       <button type="button" id="enviar">Enviar</button>
       </div>
    </form>

  <div id="mapa">
    <p class="com">Ubicación en el mapa</p>
    <img id="imginfo" src="img/contacto.jpg">
  </div>
</div>

<!--***********************************************************Aqui se agrega el footer-->
<?php include('footer.html')?>
<!--***********************************************************-->

</body>
</html>