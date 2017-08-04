<?php
include("config.php");/*llamar un archivo php*/
$i=$_POST['id4'];
$c=$_POST['id_c'];
$d=$_POST['dis'];
$z=$_POST['zo'];
$ca=$_POST['ca'];
$lo=$_POST['lo'];
$la=$_POST['la'];

$q="insert into ubicacion(id_ubicacion,id_alcanta,distrito,zona,calle,latitud,longitud) values ('$i','$c','$d','$z','$ca','$lo','$la')";
$rs=mysql_query($q,$con) or die(mysql_error());/*variable boolean llamamos a la consulta y al ser*/
if($rs){/**/
	
	echo "
	<script>
	alert('ubicacion registrado');
	location.href='registro_ubicacion.php';
	</script>
	";
}
?>