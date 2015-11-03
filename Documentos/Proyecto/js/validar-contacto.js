$(document).ready(function(){
    var excorr = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9_\-]+\.[a-zA-Z]+$/;
    var exnom = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;

    $("#enviar").click(function(){

        var f = 0;
	var nombre = $("#nombre").val();
	var correo = $("#correo").val();
        var com= $("#comentario").val();

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



	if (com==""){
	$("#ecom").fadeIn("slow");
          if (f==0){
           $("#comentario").focus();
           f=1;
          } 
        }
         else{
          $("#ecom").fadeOut("slow");
         }

    });//click
});//ready
