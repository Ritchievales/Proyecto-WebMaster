$(document).ready(function(){
    var exnom = /^[a-zA-Z0-9ñÑ_\.\-]+$/;
    var excon = /^[a-zA-Z0-9ñÑ_\.\-]+$/;

    $("#accesar").click(function(){

        var f = 0;
	var nombre = $("#nombre").val();
	var contra = $("#contrasena").val();

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


	
        if (contra == ""){
	$("#econtrasena").fadeIn("slow");
          if (f==0){
           $("#contrasena").focus();
           f=1;
          } 
        }
         else if (excon.test(contra)){
            $("#econtrasena").fadeOut("slow");
           }
           else{
             $("#econtrasena").fadeIn("slow");
             if (f==0){
             $("#contrasena").focus();
             f=1;
            } 
           }


       if (nombre=="admin"&&contra=="admin"){
           window.location = 'adminpage.html';
         }
    });//click
});//ready
