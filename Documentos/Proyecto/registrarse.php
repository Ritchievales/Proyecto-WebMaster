<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Registrarse</title>
    <link rel="stylesheet" type="text/css" href="css/registrarse.css"/>
    <meta charset="utf-8">
    <meta name="Home" content="Bienvenido al mejor mercado online de zapatos">
    <meta name="keywords" content="Zapatos,Tenis,Zapatillas,Sandalias,Botas">
    <meta name="author" content="Equipo:Web Masters">
    <link href="img/shoes.ico" rel="icon" type="image/x-icon" />
  </head>
	
  <body>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="js/validar-registrarse.js"></script> 

    <?php include('header.html')?>

    <div>
      <form id="formulario" method="post" action="formulario.html">
        <div>
          <h2 class="etiqueta">Registrarse en Pro-Shoes</h2>
        </div>
         <fieldset style="border:0px">
	  <div class="m">
	    <label class="cuadro" for="nombre">Nombre: </label>
	    <input class="input" type="text" id="nombre" placeholder=" Nombre">
	  </div>
	  <div>
            <label class="error" id="enombre" style="display:none">▲Error al introducir tu nombre </label> 
	  </div>
	  <div class="m">
	    <label class="cuadro" for="apellidos">Apellidos: </label>
	    <input class="input" type="text" id="apellidos" placeholder=" Apellidos">
	  </div>
	  <div>
            <label class="error" id="eapellido" style="display:none">▲Error al introducir tus apellidos </label> 
          </div>
	  <div class="m">
	    <label class="cuadro" for="correo">Correo: </label>
	    <input class="input" type="email" id="correo" placeholder=" Ingresar una dirección de correo válida">
	  </div>
	  <div>
            <label class="error" id="ecorreo" style="display:none">▲Error al introducir tu correo </label> 
	  </div>
	  <div class="m">
	    <label class="cuadro" for="confirmarcorreo">Confirmar correo: </label>
	    <input class="input" type="email" id="correo2" placeholder=" Confirmar correo electrónico">
	  </div>
	  <div>
            <label class="error" id="ecorreo2" style="display:none">▲Error al confirmar correo </label> 
          </div> 
	  <div class="m">
	    <label  class="cuadro" for="contrasena">Contraseña: </label>
            <input class="input" type="password" id="contrasena" name="password" placeholder=" Ingresar contraseña (mínimo 6 caracteres)">
	  </div>
	  <div>
            <label class="error" id="econtrasena" style="display:none">▲Error al ingresar contraseña </label> 
          </div>
          <div class="m">
	    <label  class="cuadro" for="contrasena2">Confirmar contraseña: </label>
	    <input class="input" type="password" id="contrasena2" placeholder=" Confirmar contraseña">
	  </div>
	  <div>
            <label class="error" id="econtrasena2" style="display:none">▲Error al confirmar contraseña </label> 
          </div>
	  <div class="m">
            <input  id="cbox" type="checkbox" value="suscribir" class="radio" checked> 
            <label for="cbox">Suscríbeme para recibir ofertas, productos y anuncios</label>
	  </div>

          <div id="reg">
           <button type="button" class="registrar" >Registrar</button>
          </div>


       </fieldset>	
      </form>
    </div>

    <?php include('footer.html')?>

  </body>
</html>