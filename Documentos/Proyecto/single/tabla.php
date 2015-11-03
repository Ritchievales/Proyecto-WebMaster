<html>
<head>
</head>
<body>
<?php

/**
*1er param. num a iniciar (tabla) =1
*2do, cant de tablas =12
*3er, hasta q multimplicador =12
*
/
if(isset($a= $_GET['id'])){

}
$a2= $_GET['b'];
	
for ($t = 1; $t <= 10; $t++) {
		for ($n = 1; $n <= 10; $n++) {
    			echo "$t * $n = ".($t*$n)."<br/>";
		}
	}
	echo "<br/><br/>";

?>
</body>
</html>
