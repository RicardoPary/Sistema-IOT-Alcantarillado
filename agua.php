<?php
include("config.php");/*llamar un archivo php*/
$a=$_GET['a'];
$c=$_GET['b'];

$q="insert into dato(nivel,fecha,hora,id_sensor) values ('$a',CURDATE(),CURTIME(),'$c')";/*estamos haciendo el metodo inserccion*/
$rs=mysql_query($q,$con) or die(mysql_error());/*variable boolean llamamos a la consulta y al ser*/
	
?>