
	$(document).ready(function(){
                fn_dar_eliminar();
				
            });
		
	function fn_dar_eliminar(){
               
                    try{
                    id = $(this).parents("tr").find("td").eq(3).html();
                    respuesta = confirm("Desea eliminar el usuario: " + id);
                    if (respuesta){
                        $(this).parents("tr").fadeOut("normal", function(){
                            $(this).remove();
                            alert("Usuario " + id + " eliminado")
                            /*
                                aqui puedes enviar un conjunto de datos por ajax
                                $.post("eliminar.php", {ide_usu: id})
                            */
                        })
                    }
                    }catch(e) {
                    alert(e);
               }
                
            };
		
		
		
		
	$(document).ready(function(){
	 
		//Checkbox
		$("input[name=seleccionaTodos]").change(function(){
			$('input[type=checkbox]').each( function() {			
				if($("input[name=seleccionaTodos]:checked").length == 1){
					this.checked = true;
				} else {
					this.checked = false;
				}
			});
		});
	 
	});

      /*function eliminarVariasFilax() {
               var idFila = 0;
	       $('#tblCarrito tr').each(function() {
	       	   $('input[name=seleccionProducto]').each(function() {
			   if(this.checked == true)
			   {
				   if (idFila > 0 && idFila < $('#tblCarrito').length)
				   {
				        
				        	$(this).remove();
				        
				    }
			   }
			   idFila++;
		   })
		});
      }*/
      
     /* function eliminarVariasFilas() {
      	  tab = document.getElementById('tblCarrito');
      	   console.log(tab.getElementsByTagName('input').length-1);
	  for (i=tab.getElementsByTagName('input').length-1; i>=1; i--) {
	    chk = tab.getElementsByTagName('input')[i];
	    if (chk.checked)
	      tab.removeChild(chk.parentNode.parentNode);
	      $(this).remove();
	    }console.log(i);
	   
	  console.log('entroooooo a borrabbbr');
      
      }*/
      
      
      
      
      
      
