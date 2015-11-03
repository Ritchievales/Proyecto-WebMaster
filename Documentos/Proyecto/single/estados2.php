<?php

$estado =$_POST['estado'];

switch($estado){

case '1':
	echo json_decode(array('a1','a2','a3'))
	break;
default:
#code
break;

}
