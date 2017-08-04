<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>REPORTE DE CONTROL DE ALCANTARILLADOS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
  
  </head>
  
  <style type="text/css">
			body {
/*colocamos un fondo de pantalla */	        
      background-image:url(imag/FOTOS-COMUNICADO-250-1.jpg);
      background-repeat:no-repeat;
			background-size:cover;
			}
  </style>


  <body>
     <?php include("hola.php");?>
     
  	<section class="main container">
     <div class="row">
       <section class="posts col-md-9">
         <div class="miga-de-pan">
           <ol class="breadcrumb">
             <li class="active">Perfil</li>
           </ol>
         </div>

         <article class="clearfix">
           <a class="thumb pull-left">
             <img src="imag/persona.jpg" alt="">
         </a></article>
    <div class="container">
          <table class='table table-striped'>
              <thead>
                <tr>    
                  <th>Cedula de identidad</th>
                  <th>Nombre</th>
                  <th>Tipo</th>
                </tr>
              </thead>
              <tr>
                <td><?= $_SESSION['empleado']['id_empleado'] ?></td>
                <td><?php echo $_SESSION['empleado']['nombre'] ?></td>
                <td><?php echo $_SESSION['empleado']['tipo_e'] ?></td>
                
              </tr>
        </table>
    </div>


       </section>
     </div>


    </section>
      <div class="container"></div>
  	<footer></footer>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>