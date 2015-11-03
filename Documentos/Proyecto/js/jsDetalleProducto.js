	$(document).ready(function(){
                
           calcularSubtotal();
            
	 });
	 
	 function calcularSubtotal(){
               
                  try{
		 
                    	  var txtPrecioUnidad=$("#subtotalDProducto").text();
                          txtPrecioUnidad = $.trim(txtPrecioUnidad);
                    	  precioUnidad= txtPrecioUnidad.substring(2,((txtPrecioUnidad.length)-3));
                    	  var subtotal=0;
                    	  console.log(precioUnidad);
                    	  
                          $("select[name=cantidad]").change(function(){
                               //$('p[#subtotalDProducto]').text($(this).val());
                               //subtotal = document.getElementById('subtotalDProducto').value*precioUnidad;
                               subtotal = $(this).val()*precioUnidad;
                               document.getElementById('subtotalDProducto').innerHTML = '$ '+ subtotal+' MN';
                               //Asignar texto al nodo seleccionado
                               //$(#subtotalDProducto).text('$ '+ subtotal+' MN');
                          });
                    }catch(e) {
                        alert(e);
		    }	 
                
         };