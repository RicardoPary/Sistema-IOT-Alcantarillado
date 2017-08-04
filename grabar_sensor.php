<?php
include("config.php");/*llamar un archivo php*/
$i=$_POST['id'];
$iw=$_POST['id_w'];
$v=$_POST['val'];

$q="insert into sensor(id_sensor,id_wifi,valor) values ('$i','$iw','$v')";
$rs=mysql_query($q,$con) or die(mysql_error());/*variable boolean llamamos a la consulta y al ser*/

if($rs){/**/
	
	echo "
	<script>
	alert('sensor registrado');
	location.href='registro_sensor.php';
	</script>
	";
}
?>
