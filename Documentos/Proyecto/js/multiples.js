var cont = 1 ;
var  phone = document.getElementById('phone');
var  mail = document.getElementById('mail');

var pmail = document.getElementById('plusmail');
		pmail.addEventListener('click',function(){
			if(requerido(mail))
				validatexto(mail);
		},true)
		
var pphone = document.getElementById('plusphone');
		pphone.addEventListener('click',function(){
			if(requerido(phone))
				validatexto(phone);
		},true)
		
		function requerido(elemento){
			
			text = elemento.value;
			var nuevo = document.getElementById('nuevo');
			
			var existe = document.getElementById('search_error');
			if(!text && existe)
				return false;
			if(!text && !existe){
				var caja = document.createElement('div');
				caja.setAttribute('class','error');
				caja.setAttribute('id','search_error');
				var error = document.createTextNode('Primero llena este');
				caja.appendChild(error);
				elemento.parentNode.appendChild(caja);
				return false;
			}
			else{
				var error_box = document.getElementById('search_error');
				if(error_box){
					error_box.parentNode.removeChild(error_box)
				}
			}
			if(nuevo){
				var text2 = nuevo.value;
				if(!text2 && existe)
				return false;
				
			if(!text2 && !existe){
				var caja = document.createElement('div');
				caja.setAttribute('class','error');
				caja.setAttribute('id','search_error');
				var error = document.createTextNode('Primero llena este');
				caja.appendChild(error);
				elemento.parentNode.appendChild(caja);
				return false;
				}
				else{
				var error_box = document.getElementById('search_error');
				if(error_box){
					error_box.parentNode.removeChild(error_box)
				}
				}
				}
			return true;
		}
		
		function validatexto(elemento){
			var existe = document.getElementById('search_error');
			
			var text = elemento.value;
			
			switch(elemento.id){
				case 'mail':
					var regex = /^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/;
				 	break;
				 case 'phone':
				 	var regex = /^([0-9]+){10}$/
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
				
				
				var id_div = 'new_div';
				id_div = id_div.concat(cont);
				
				var deletea = 'delete';
				deletea = deletea.concat(cont);
				
				var d = document.createElement('div');
				var l = document.createElement('label');
				var b = document.createElement('input');
				var i = document.createElement('input');
				
				b.setAttribute('id',deletea);
				b.setAttribute('class','delete');
				b.setAttribute('type','image');
				b.setAttribute('src','img/delete-icon.png');
				b.setAttribute('width',20);
				b.setAttribute('heigt',20);
				b.setAttribute('onclick', 'return false');
				
				i.setAttribute('class','nuevo');
				i.setAttribute('id','nuevo');
				
				d.setAttribute('id',id_div);
				d.setAttribute('class','new_div');
				
				l.setAttribute('for','nuevo');
				l.appendChild(document.createTextNode("Nuevo:"));
				
				d.appendChild(l);
				d.appendChild(i);
				d.appendChild(b);
				
				elemento.parentNode.appendChild(d);
				cont = cont + 1;
				
				var del = document.getElementById(deletea);

				if(del){
					del.addEventListener('click',function(){
						var new_box = document.getElementById(id_div);

						if(new_box){
							new_box.parentNode.removeChild(new_box)
						}
					},true)
				}
			}
		}

		