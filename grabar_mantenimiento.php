<?php
include("config.php");/*llamar un archivo php*/
$i=$_POST['id3'];
$f=$_POST['fech'];
$h=$_POST['hr'];
$o=$_POST['ob'];

$q="insert into mantenimiento(id_mantenimiento,fecha_m,hora_m,observacion) values ('$i','$f','$h','$o')";
$rs=mysql_query($q,$con) or die(mysql_error());/*variable boolean llamamos a la consulta y al ser*/
if($rs){/**/
	
	echo "
	<script>
	alert('mantenimiento registrado');
	location.href='registro_mantenimiento.php';
	</script>
	";
}
?>