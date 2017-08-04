<?php
include("config.php");/*llamar un archivo php*/
$i=$_POST['id'];
$t=$_POST['tipo'];
$d=$_POST['dimenson'];
$p=$_POST['profundidad'];
$c=$_POST['cant'];
$q="insert into alcantarillado(id_alcanta,tipo_a,dimension,profundidad,cant_tot_almacenaje) values ('$i','$t','$d','$p','$c')";
$rs=mysql_query($q,$con) or die(mysql_error());/*variable boolean llamamos a la consulta y al ser*/
if($rs){/**/
	
	echo "
	<script>
	alert('camara registrada registrado');
	location.href='registro_sensor.php';
	</script>
	";
}
?>
