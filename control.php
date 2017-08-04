<?php
include("config.php");/*aqui esta llamando a nuestros 2 primeros pasos */
$usr=$_POST['usr'];/*recuperando e lusuario*/
$pwd=$_POST['pwd'];/*recupera la contrasena*/

$q="select * from empleado where(usuario='$usr' and contrasena='$pwd')";/*estamos seleccionando de la base de datos todos los usuarios */
$rs=mysql_query($q,$con)
;
if(mysql_num_rows($rs)!=0 ){/*en  este if estamos preguntando si hay un usuario */
  session_start();/*con session_start esto estamos iniciando la sesion se realiza cuando queremos crear o utilizar variables de sesion*/
  $r=mysql_fetch_array($rs);/*con esto de la matris estamos recuperando al vector*/
  $_SESSION['usuario']=$r['usuario'];/*crea una variable de session asi y se recupera al usuario*/
  $_SESSION['tipo_e']=$r['tipo_e'];/*aqui estamos recuperando el nivel de usuario que nivel tiene de acceso y privilegio*/
  $_SESSION['ingreso']="si"; /*esta variable te permite verificar si el usuario esta ingresando correctamente para q esto no se vulnerable de entrar as i q en vez de si tiene q ser mas dificil para que nadie pueda entrar*/
$_SESSION['empleado'] = $r;
if($_SESSION['tipo_e']=='GERENTE'){
	header("Location:ingresa_g.php");
	}
	  header("Location:ingresa_g.php");
  
}
else{
	header("Location:index.php?error=1");/*nos redireccionaremos de control a la pagina principal un paso de valores */
	}
?>