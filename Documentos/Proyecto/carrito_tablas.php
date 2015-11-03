

<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
	<title>ZapateriaOnline</title>
	<meta name="description" content="Productos de tienda Online de zapatos" />
   	<meta name="keywords" 	 content="Calzado,Dama,Caballero,Infantil,Vestir,Casual" />
	 
	<link type="text/css" rel="stylesheet" href="css/estiloCarrito_tablas.css"/>
	<link href="img/shoes.ico" rel="icon" type="image/x-icon" />
	<script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/jsCarrito_tablas.js"></script>
</head>
<body>

	<?php include('header.html')?>

	<script type="text/javascript">
	  $(document).ready(function(){
                    try{              
                    	  var precio1=$.trim($("#p1").text());
                    	  precio1= precio1.substring(2,((precio1.length)-3));
                    	  
                    	  var precio2=$.trim($("#p2").text());
                    	  precio2= precio2.substring(2,((precio2.length)-3));
                    	  
                    	  var precio3=$.trim($("#p3").text());
                    	  precio3= precio3.substring(2,((precio3.length)-3));
                    	  
                    	  var cantProd=0;
                    	  var cantProd= parseInt($.trim($("#cantProducto").text()));
                    	  
                    	  var subtotal=0;
                    	  
                          $("select[id=s1]").change(function(){
                               subtotal = $(this).val()*precio1;
                               cantProd = (parseInt($(this).val())-1)+cantProd;
                               document.getElementById('p1').innerHTML = '$ '+ subtotal+' MN';
                               document.getElementById('cantProducto').innerHTML = cantProd;
                          });
                          
                          $("select[id=s2]").change(function(){
                               subtotal = $(this).val()*precio2;
                               cantProd = (parseInt($(this).val())-1)+cantProd;
                               document.getElementById('p2').innerHTML = '$ '+ subtotal+' MN';
                               document.getElementById('cantProducto').innerHTML = cantProd;
                          });
                          
                          $("select[id=s3]").change(function(){
                               subtotal = $(this).val()*precio3;
                               cantProd = (parseInt($(this).val())-1)+cantProd;
                               document.getElementById('p3').innerHTML = '$ '+ subtotal+' MN';
                               document.getElementById('cantProducto').innerHTML = cantProd;
                          });
                          $("select").change(function(){
                               calcularTotal();
                          });
                          calcularTotal();
                    }catch(e) {
                        alert(e);
		    }	
         });
	
	//eliminar una fila 
	function Eliminar (i) {
		document.getElementsByTagName("table")[0].setAttribute("id","tableid");
   		document.getElementById("tableid").deleteRow(i);
    		document.getElementById("tableid").deleteRow(i-1);//eliminar renglon azul
    		
    		calcularTotal();
	}
	
       //eliminar todas las seleccionadas
       function eliminarRow(tableID) {
               try {
               var table = document.getElementById(tableID);
               var rowCount = table.rows.length;
               //console.log('renglones....'+rowCount);
               for(var i=0; i<rowCount  ; i++) 
                    {
                     if(table.rows[i] != null)
                     {
	                    var row = table.rows[i];
	                    var chkbox = row.cells[0].childNodes[0];
	                    //console.log('cheeeck:'+chkbox);
	                    if(null != chkbox && true == chkbox.checked) {
	                         
	                         table.deleteRow(i-1);//elimina fila row azul separador
	                         //ahora el row del producto ha tomado el lugar del renglon azul, por lo tanto se elimina i-1
	                         table.deleteRow(i-1);//elimina row de producto
	                         rowCount--;
	                         i--;
	                    calcularTotal();
	              }
                    }
               }
               }catch(e) {
                    alert(e);
               }
      }
      function calcularTotal(){
      
      		var totalCarrito = 0;
    		
    		if(document.getElementById("p1")!=null){
    			var precio1=$.trim($("#p1").text());
                	precio1= precio1.substring(2,((precio1.length)-3));
                	totalCarrito = parseFloat(precio1) + totalCarrito;
                }
                if(document.getElementById("p2")!=null){   	  
                	var precio2=$.trim($("#p2").text());
                	precio2= precio2.substring(2,((precio2.length)-3));
                	totalCarrito = parseFloat(precio2) + totalCarrito;
                }
                if(document.getElementById("p3")!=null){   	  
                  	var precio3=$.trim($("#p3").text());
                	precio3= precio3.substring(2,((precio3.length)-3));
                	totalCarrito = parseFloat(precio3) + totalCarrito;
                }
                totalCarrito=totalCarrito.toFixed(2); 
    		document.getElementById('subTotalCarrito').innerHTML = '$ '+ totalCarrito+' MN';
    		document.getElementById('granTotalCarrito').innerHTML = '$ '+ totalCarrito+' MN';
      }
      </script>
	<div class="modificarCarrito">
		<div class="divFiltro" >
			<div>
			</div>
			<div > 
				<select  class="botonC anchoBoton" name="ordenar">
					<option select value="0">Ordenar por</option>
					<option value="1">Menor a Mayor precio</option>
					<option value="2">Mayor a Menor precio</option>
					<option value="3">De Z...A</option>
					<option value="2">De A...Z</option>				
				</select>
			</div>
		</div>
		<div class="divSeleccionarTodos">			
			<input type="checkbox" name="seleccionaTodos" id="todos" value="seleccionaTodos" /> 
			<label for="seleccionaTodos"> Selecciona Todos </label>
		</div>
		<div class="divLimpiar">
			<input type="image" src="img/iconoBasura.jpg" onclick="eliminarRow('tblCarrito');" width="40" height="40" alt="eliminarVarios">		
		</div>
	</div>	
	<div class="divSeccProducto">
	<seccion class="productoCarrito">

	<table id="tblCarrito">
		<thead>
			<tr class="titulosProducto">
			     <th>
			     </th>
		   	     <th> Producto
			     </th>
		   	     <th> Preferencias
			     </th>
		   	     <th> Subtotal
			     </th>
			</tr>
		</thead>
		<tbody>
		
		
		
		
			<tr class="renglonAzul">
			      <td class="azul">
			      </td>
			      <td class="azul">
			      </td>
			      <td class="azul">
			      </td>
			      <td class="azul">
			      </td>
			     
			</tr>
			<tr   class="grupoProducto">
			      <TD><INPUT type="checkbox" NAME="chk"/></TD>
			      
			      <td class="divProducto union">
				<div class="imgProducto">
				    <img src="img/productos/dt1_1.jpg" width="100%" height="100%" alt="zapato" />
				</div>
				<p class="pNombreProducto">Zapatilla Nine West</p>
			      </td>
			      <td class="cantidadProducto">
				<div >
					<div class="mitad izq separarAbajo">
						<label class="lblTalla" for="talla">Talla:</label>
					</div>
					<div class="mitad der separarAbajo">
						<select class="slctTalla botonC" name="talla">
							<option value="1">22</option>
							<option value="2">23</option>
							<option value="3">24</option>
							<option value="4">25</option>
							<option value="5">26</option>			
						</select>
					</div>
				</div>
				<div>
					<div class="mitad izq">
	 					<label class="lblCant" for="cant">Cantidad:</label>
					</div>
					<div class="mitad der">
						<select id="s1" class="slctCant botonC" name="cant">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>			
						</select> 
					</div> 				   
				</div>
			      </td>
			      <td class="precioProducto">
				<div class="divEliminar">
					<input type="image" src="img/iconoTache.jpg" onclick="Eliminar(this.parentNode.parentNode.parentNode.rowIndex)"
					width="20" height="20" alt="eliminarUno">
				</div>
				<div class="espacioVertical">
				</div>
				<div class="precio">
					<div class="pPrecioPorProducto">
					<p id="p1" >$ 525.39 MN</p>
					</div>
				</div>
				
			      </td>
			</tr>
			
			
			
			<tr class="renglonAzul">
			      <td class="azul">
			      </td>
			      <td class="azul">
			      </td>
			      <td class="azul">
			      </td>
			      <td class="azul">
			      </td>
			     
			</tr>
			<tr   class="grupoProducto">
			      <TD><INPUT type="checkbox" NAME="chk"/></TD>
			      
			      <td class="divProducto union">
				<div class="imgProducto">
				    <img src="img/productos/dt1_1.jpg" width="100%" height="100%" alt="zapato" />
				</div>
				<p class="pNombreProducto">Zapatilla Nine West</p>
			      </td>
			      <td class="cantidadProducto">
				<div >
					<div class="mitad izq separarAbajo">
						<label class="lblTalla" for="talla">Talla:</label>
					</div>
					<div class="mitad der separarAbajo">
						<select class="slctTalla botonC" name="talla">
							<option value="1">22</option>
							<option value="2">23</option>
							<option value="3">24</option>
							<option value="4">25</option>
							<option value="5">26</option>			
						</select>
					</div>
				</div>
				<div>
					<div class="mitad izq">
	 					<label class="lblCant" for="cant">Cantidad:</label>
					</div>
					<div class="mitad der">
						<select id="s2" class="slctCant botonC" name="cant">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>			
						</select> 
					</div> 				   
				</div>
			      </td>
			      <td class="precioProducto">
				<div class="divEliminar">
					<input type="image" src="img/iconoTache.jpg" onclick="Eliminar(this.parentNode.parentNode.parentNode.rowIndex)"
					width="20" height="20" alt="eliminarUno">
				</div>
				<div class="espacioVertical">
				</div>
				<div class="precio">
					<div class="pPrecioPorProducto">
					<p id="p2" >$ 612.72 MN</p>
					</div>
				</div>
				
			      </td>
			</tr>
			
			
			
			<tr class="renglonAzul">
			      <td class="azul">
			      </td>
			      <td class="azul">
			      </td>
			      <td class="azul">
			      </td>
			      <td class="azul">
			      </td>
			     
			</tr>
			<tr   class="grupoProducto">
			      <TD><INPUT type="checkbox" NAME="chk"/></TD>
			      
			      <td class="divProducto union">
				<div class="imgProducto">
				    <img src="img/productos/dt1_1.jpg" width="100%" height="100%" alt="zapato" />
				</div>
				<p class="pNombreProducto">Zapatilla Generation</p>
			      </td>
			      <td class="cantidadProducto">
				<div >
					<div class="mitad izq separarAbajo">
						<label class="lblTalla" for="talla">Talla:</label>
					</div>
					<div class="mitad der separarAbajo">
						<select class="slctTalla botonC" name="talla">
							<option value="1">22</option>
							<option value="2">23</option>
							<option value="3">24</option>
							<option value="4">25</option>
							<option value="5">26</option>			
						</select>
					</div>
				</div>
				<div>
					<div class="mitad izq">
	 					<label class="lblCant" for="cant">Cantidad:</label>
					</div>
					<div class="mitad der">
						<select id="s3" class="slctCant botonC" name="cant">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>			
						</select> 
					</div> 				   
				</div>
			      </td>
			      <td class="precioProducto">
				<div class="divEliminar">
					<input type="image" src="img/iconoTache.jpg" onclick="Eliminar(this.parentNode.parentNode.parentNode.rowIndex)"
					width="20" height="20" alt="eliminarUno">
				</div>
				<div class="espacioVertical">
				</div>
				<div class="precio">
					<div class="pPrecioPorProducto">
					<p id="p3" >$ 875.53 MN</p>
					</div>
				</div>
				
			      </td>
			</tr>
		
		</tbody>
	</table>	
	</seccion>
	</div>
	<div class="totalCarrito">
	<seccion class="totalCarrito">
		<div class="espacioBlancoCarrito">
		</div>
		<div class="detallesTotalCarrito">
			<form class="formCarrito" method="post" action="checkout.php">
			<div class="tituloTotales">
				<div>
					<label>Pares:</label>
				</div>
				<div>
					<label>Subtotal:</label>
				</div>
				<div>
					<label>Descuento:</label>
				</div>
				<div>
					<label>Total:</label>
				</div>
			</div>
			<div class="infoTotales">
				<div>
					  <label id="cantProducto"> 3 </label>
				</div>
				<div>
					  <label id="subTotalCarrito">$ 1525 MN</label>
				</div>
				<div>
					   <label  >$0</label>
				</div>
				<div>
					   <label id="granTotalCarrito" class="rojo" >$ 1525 MN</label>
				</div>

			</div>
			<div class="btn"> 
				<button type="submit" class="botonC">Comprar</button>
			</div>
			<form>	
		  </div>		
	</seccion>
	</div>

       <?php include('footer.html')?>

</body>
<html>