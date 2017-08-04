<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>REPORTE DE CONTROL DE ALCANTARILLADOS</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>
  <body data-spy="scroll" data-target="#myScrollspy" data-offset="15">
    <?php include("hola.php");?>

  	<section class="main container">
     <div class="row">
       <section class="posts col-md-12">
        <div class="miga-de-pan">
           <ol class="breadcrumb">
             <li><a href="ingresa_e.php">Perfil</a></li>
             <li><a href="implementacion.php">Implementacion de sensores</a></li>
             <li><a href="reporte_control_g.php">Reporte de control</a></li>
             <li class="active">Reporte de alertas</li>
           </ol>
         </div>

        <article class="clearfix">
           <a class="thumb pull-left">
             <img src="imag/5.jpg" alt="">
           </a>
         </article>

         </br></br>

    <div class="container">
        <table class='table table-striped'>
            <thead>
                <tr>    
                  <th>Codigo de alerta</th>
                  <th>Hora</th>
                  <th>Codigo de camara</th>
                  <th>Ubicación</th>
                </tr>
            </thead>

            <?php
                $link = mysql_connect("localhost","prueba","123456");
                mysql_select_db("sistema_alcantarillado");
                $sql="select a.id_alerta, a.hora_a, c.id_alcanta,u.distrito,u.zona,u.calle from alerta a, sensor s, alcantarillado c, ubicacion u where a.control='NO' and a.id_sensor=s.id_sensor and s.id_sensor=c.id_sensor and c.id_alcanta=u.id_alcanta;";
                $data=mysql_query($sql,$link);
                while ($row=mysql_fetch_row($data))
                {
                  echo "<tr>";
                  echo "<td>".$row["0"]."</td><td>".$row["1"]."</td><td>".$row["2"]."</td><td>".$row["3"].", ".$row["4"].", ".$row["5"]."</td>";
                  echo "</tr>";
                }
            ?>

        </table>
     </div>

            </br>
            <!--ojo aqui esta el boton ver2-->
            <form action="reporte_alerta.php" method="POST">
                <button type="submit" class="btn btn-primary">ACTUALIZAR</button>
            </form>
           




       </section>
     </div>


    </section>
      <div class="container"></div>
    <footer></footer>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>