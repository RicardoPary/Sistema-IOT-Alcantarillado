
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
	        background-image:url(imag/FOTOS-COMUNICADO-250-1.jpg);
            background-repeat:no-repeat;
			background-size:cover;
			}
            </style>
<body>

<?php include("hola.php");?>
<td><form action="grabar_sensor.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p>&nbsp;</p>
  <table width="300" border="1" cellspacing="5" cellpadding="5">
  <tbody>
    <tr>
      <th bgcolor="#428BCA" class="texto_centro" scope="row">SENSOR</th>
    </tr>
  </tbody>
</table>
<table width="300" border="1" cellspacing="5" cellpadding="5">
  <tbody>
    <tr>
      <th width="196" bgcolor="#6AAEE9" style="text-align: right; color: #000000;" scope="row">CODIGO:</th>
      <td width="263" bgcolor="#6AAEE9"><input type="text" name="id" id="id" /></td>
    </tr>
    <tr>
      <th bgcolor="#6AAEE9" class="texto_formulario" style="text-align: right" scope="row">CODIGO WIFI:</th>
      <td bgcolor="#6AAEE9"><input type="text" name="id_w" id="id_w" /></td>
    </tr>
    <tr>
      <th bgcolor="#6AAEE9" class="texto_formulario" style="text-align: right" scope="row">VALOR:</th>
      <td bgcolor="#6AAEE9"><input type="text" name="val" id="val" /></td>
    </tr>
  </tbody>
</table>
<table width="300" border="1" cellpadding="5" cellspacing="5">
  <tbody>
    <tr>
      <td bgcolor="#428BCA" style="font-size: 15px; text-align: center;">  <input type="submit" name="grabar_sensor" id="grabar_sensor" value="REGISTRAR" /></th>
    </tr>
  </tbody>
</table>
<p>&nbsp;</p>
</form>  </td>



</body>


