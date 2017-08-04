<?php
include("config.php");/*llamar un archivo php*/
$i=$_POST['ci'];
$n=$_POST['nom'];
$t=$_POST['tipo'];
$u=$_POST['usr'];
$c=$_POST['pw1'];

$q="insert into empleado(id_empleado,nombre,tipo_e,usuario,contrasena) values ('$i','$n','$t','$u','$c')";/*estamos haciendo el metodo inserccion*/
$rs=mysql_query($q,$con) or die(mysql_error());/*variable boolean llamamos a la consulta y al ser*/
if($rs){/**/
	
	echo "
	<script>
	alert('empleado registrada');
	location.href='registro_empleado.php';
	</script>
	";
}


?>