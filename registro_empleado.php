
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="estilo_admin.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>REPORTE DE CONTROL DE ALCANTARILLADOS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <style type="text/css">
    .btn-group-justified {
}
    </style>
</head>
 <style type="text/css">
			body {
/*colocamos un fondo de pantalla */	        background-image:url(imag/FOTOS-COMUNICADO-250-1.jpg);
            background-repeat:no-repeat;
			background-size:cover;
			}
            </style>

<body>
      <?php include("hola.php");?>
      


<td><form action="grabar.php" method="post" enctype="multipart/form-data" name="form1" id="form1" > 


    <table width="501" border="1"  align="left" cellpadding="1" cellspacing="2"  >
  <tbody>
    <tr>
      <td width="491" height="45" bgcolor="#428BCA"  class="text-center"  style="color: #000000; font-weight: bold; font-size: 18px; text-align: center;"><span class="titulo">REGISTRO DE EMPLEADO</td>
    </tr>
  </tbody>
</table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="500" border="1" align="left" cellpadding="5" cellspacing="5">
      <tbody>
      <tr bgcolor="#75B5EC">
        <td width="199" bgcolor="#75B5EC"  class="texto_formulario">CARNET</td>
        <td width="260"><input type="text" name="ci" id="ci" /></td>
      </tr>
      <tr>
        <td bgcolor="#75B5EC"  class="texto_formulario"><span style="color: #000000">NOMBRE:</span></td>
        <td bgcolor="#75B5EC"><input type="text" name="nom" id="nom" /></td>
      </tr>
      <tr bgcolor="#75B5EC">
        <td  class="texto_formulario">CARGO:</td>
        <td><select name="tipo" id="tipo" form="form1">
          <option>Seleccione...</option>
          <option value="GERENTE">ADMINISTRADOR</option>
          <option value="MANTENIMIENTO">SUPERVISOR</option>
          <option value="MANTENIMIENTO">TECNICO</option>
        </select></td>
      </tr>
      <tr bgcolor="#75B5EC">
        <td  class="texto_formulario">USUARIO:</td>
        <td><input type="text" name="usr" id="usr" /></td>
      </tr>
      <tr bgcolor="#75B5EC">
        <td  class="texto_formulario">CONTRASEÑA:</td>
        <td><input type="text" name="pw1" id="pw1" /></td>
      </tr>
       <tr bgcolor="#75B5EC">
        <td  class="texto_formulario">REPITA CONTRASEÑA:</td>
        <td><input type="text" name="pw2" id="pw2" /></td>
      </tr>
    </tbody>
</table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  
    <table width="500" border="1" align="left" cellpadding="5" cellspacing="5">
      <tbody>
      <tr>
        <td bgcolor="#428BCA" style="font-size: 15px; text-align: center;"><input type="submit" name="grabar" id="grabar" value="REGISTRAR EMPLEADO" /></td>
      </tr>
    </tbody>
</table>
  
   


</form>
   

  <p>&nbsp;</p>
</body>
</html>
