	
	
	var pass = document.getElementById('pass');
		pass.addEventListener('blur',function(){
			if(inputRequired(pass))
				textValidator(pass);
		},true)
	
	var usuario = document.getElementById('user');
		usuario.addEventListener('blur',function(){
			if(inputRequired(usuario))
				textValidator(usuario);
		},true)

	
		function inputRequired(elemento){
			text = elemento.value;
			var existe = document.getElementById('search_error');
			if(!text && existe)
				return false;
			if(!text  && !existe){
				var caja = document.createElement('div');
				caja.setAttribute('class','error');
				caja.setAttribute('id','search_error');
				var error = document.createTextNode('No puedes dejar este campo vacio');
				caja.appendChild(error);
				elemento.parentNode.appendChild(caja);
				return false;
			}
			return true;
		}

		function textValidator(elemento){
			var existe = document.getElementById('search_error');
			
			var text = elemento.value;
			
			switch(elemento.id){
				case 'user':
					var regex = /^[a-zA-Z]+$/;
				 	break;
				 case 'pass':
				 	var regex = /^[a-zA-Z0-9ñÑ_\.\-]+$/
				 	break;
				
				 default:
				 break;
			}
			

			var existe = document.getElementById('search_error');
			if(!text.match(regex) && !existe){
				var caja = document.createElement('div');
				caja.setAttribute('class','error');
				caja.setAttribute('id','search_error');
				var error = document.createTextNode('Verifica lo que pide el campo por favor');
				caja.appendChild(error);
				elemento.parentNode.appendChild(caja);
		
			}
			else{
				var error_box = document.getElementById('search_error');
				if(error_box){
					error_box.parentNode.removeChild(error_box)
				}
			}
		}