<html>
<body>

	<?php
		for($i=1; $i<=10; $i++) {
 			echo "Tabla del $i <br/><br/>";
 			for($j=1; $j<=10; $j++) {
  				echo "$i x $j = ". ($i*$j) . "<br/>";
 			}
 			echo "<br/>";
		}
	?>
</body>   
</html>