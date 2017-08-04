<?php
  include("seguridad.php");
  if($_SESSION['tipo_e']=='GERENTE'){  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

</head>
<body>
<form action="grabar_mantenimiento.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>&nbsp;</p>
  <table width="600" border="1" cellspacing="5" cellpadding="5">
  <tbody>
    <tr>
      <th class="texto_centro" scope="row">MANTENIMIENTO</th>
    </tr>
  </tbody>
</table>
<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tbody>
    <tr>
      <th width="196" class="texto_formulario" scope="row">CODIGO MANTENIMIENTO:</th>
      <td width="263"><input type="text" name="id3" id="id3" /></td>
    </tr>
    <tr>
      <th class="texto_formulario" scope="row">FECHA DE REVISION:</th>
      <td><input type="text" name="fech" id="fech" /></td>
    </tr>
    <tr>
      <th class="texto_formulario" scope="row">HORA:</th>
      <td><input type="text" name="hr" id="hr" /></td>
    </tr>
     <tr>
      <th height="34" class="texto_formulario" scope="row">OBSERVACION:</th>
      <td><input type="text" name="ob" id="ob" /></td>
    </tr>
  </tbody>
</table>
<table width="600" border="1" cellpadding="5" cellspacing="5">
  <tbody>
    <tr>
      <th scope="row"><input type="submit" name="grabar_mantenimiento" id="grabar_mantenimiento" value="Enviar" /></th>
    </tr>
  </tbody>
</table>

</form>

</body>


<?php
  }/*aqui estammos cerrando la consulta*/
  else{
	  header("Location:admin.php");/*y por else si no es el usuario de nivel 8 lo manda y redirecciona al al admin.php*/
	  }
  ?>

