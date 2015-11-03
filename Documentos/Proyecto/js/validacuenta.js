var names = document.getElementById('name');
		names.addEventListener('blur',function(){
			if(inputRequired(names))
				textValidator(names);
		},true)
	
	var lastname = document.getElementById('lastname');
		lastname.addEventListener('blur',function(){
			if(inputRequired(lastname))
				textValidator(lastname);
		},true)

	var phone = document.getElementById('phone');
		phone.addEventListener('blur',function(){
			if(inputRequired(phone))
				textValidator(phone);
		},true)
	var address = document.getElementById('address');
		address.addEventListener('blur',function(){
			if(inputRequired(address))
				textValidator(address);
		},true)
	var state = document.getElementById('state');
		state.addEventListener('blur',function(){
			if(inputRequired(state))
				textValidator(state);
		},true)
	/*var zip = document.getElementById('zip-code');
		zip.addEventListener('blur',function(){
			if(inputRequired(zip))
				textValidator(zip);
		},true)*/
	var town = document.getElementById('town');
		town.addEventListener('blur',function(){
			if(inputRequired(town))
				textValidator(town);
		},true)
	
	var country = document.getElementById('country');
		country.addEventListener('blur',function(){
			if(inputRequired(country))
				textValidator(country);
		},true)
	var mail = document.getElementById('mail');
		mail.addEventListener('blur',function(){
			if(inputRequired(mail))
				textValidator(mail);
		},true)
	var city = document.getElementById('city');
		city.addEventListener('blur',function(){
			if(inputRequired(city))
				textValidator(city);
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
				case 'name':
				 	var regex = /^[a-zA-Z]+$/;
				 	break;
				 case 'lastname':
				 	var regex = /^[A-Za-záéíóúñ]{2,}([\s][A-Za-záéíóúñ]{2,})+$/;
				 	break;
				 case 'phone':
				 	var regex = /^([0-9]+){10}$/;
				 	break;
				 case 'address':
				 	var regex = /^.*(?=.*[0-9])(?=.*[a-zA-ZñÑ\s]).*$/;
				 	break;
				 case 'state':
				 	var regex = /^[a-zA-Z]+$/;
				 	break;
				 case 'town':
				 	var regex = /^[a-zA-Z]+$/;
				 	break;	
				  case 'city':
				 	var regex = /^[a-zA-Z]+$/;
				 	break;	
				  case 'country':
				 	var regex = /^[a-zA-Z]+$/;
				 	break;	
				 case 'mail':
				 	var regex = /^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$/;
				 	break;		
				 case 'zip-code':
				 	var regex =/^([1-9]{2}|[0-9][1-9]|[1-9][0-9])[0-9]{3}$/;
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