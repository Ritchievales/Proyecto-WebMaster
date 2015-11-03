$(document).ready(function(){

    var excorr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9_\-]+\.[a-zA-Z]+$/;
    var exnom = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
    var excon = /^[a-zA-Z0-9ñÑ_\.\-]+$/;

    $(".registrar").click(function(){

        var f = 0;
	var nombre = $("#nombre").val();
	var apellidos = $("#apellidos").val();
	var correo = $("#correo").val();
        var ccorreo= $("#correo2").val();
        var contra= $("#contrasena").val();
        var ccontra= $("#contrasena2").val();

	if (nombre == ""){
          $("#enombre").fadeIn("slow");
          if (f==0){
           $("#nombre").focus();
           f=1;
          } 
	}
         else if (exnom.test(nombre)){
          $("#enombre").fadeOut("slow");
         }
         else {
          $("#enombre").fadeIn("slow");
          if (f==0){
           $("#nombre").focus();
           f=1;
          } 
         }


	if (apellidos == ""){
	$("#eapellido").fadeIn("slow");
          if (f==0){
           $("#apellidos").focus();
           f=1;
          } 
        }
         else if (exnom.test(apellidos)){
          $("#eapellido").fadeOut("slow");
         }
         else {
          $("#eapellido").fadeIn("slow");
          if (f==0){
           $("#apellidos").focus();
           f=1;
          } 
         }


	if (correo==""){
	$("#ecorreo").fadeIn("slow");
          if (f==0){
           $("#correo").focus();
           f=1;
          } 
        }
         else if (excorr.test(correo)){
          $("#ecorreo").fadeOut("slow");
         }
         else{
          $("#ecorreo").fadeIn("slow");
           if (f==0){
           $("#correo").focus();
           f=1;
          } 
         }


	if (ccorreo == ""){
	$("#ecorreo2").fadeIn("slow");
          if (f==0){
           $("#correo2").focus();
           f=1;
          } 
        }
         else if (excorr.test(ccorreo)&&correo==ccorreo){
          $("#ecorreo2").fadeOut("slow");
         }
         else{
          $("#ecorreo2").fadeIn("slow");
          if (f==0){
           $("#correo2").focus();
           f=1;
          } 
         }


	if (contra == ""){
	$("#econtrasena").fadeIn("slow");
          if (f==0){
           $("#contrasena").focus();
           f=1;
          } 
        }
         else if (excon.test(contra)){
           if (contra.length > 5){
            $("#econtrasena").fadeOut("slow");
             console.log(contra.lenght);
            } 
           else{
             $("#econtrasena").fadeIn("slow");
             if (f==0){
             $("#contrasena").focus();
             f=1;
            } 
           }
         }
         else{
          $("#econtrasena").fadeIn("slow");
          if (f==0){
           $("#contrasena").focus();
           f=1;
          } 
         }


	if (ccontra == ""){
	$("#econtrasena2").fadeIn("slow");
          if (f==0){
           $("#contrasena2").focus();
           f=1;
          } 
        }
         else if (excon.test(ccontra)&&contra==ccontra){
          $("#econtrasena2").fadeOut("slow");
         }
         else{
          $("#econtrasena2").fadeIn("slow");
          if (f==0){
           $("#contrasena2").focus();
           f=1;
          } 
         }

    });//click
});//ready