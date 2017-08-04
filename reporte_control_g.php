<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>REPORTE DE CONTROL DE ALCANTARILLADOS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">

  </head>
  <body>
  <?php include("hola.php");?>
    

  	<section class="main container">
     <div class="row">
       <section class="posts col-md-9">
         <div class="miga-de-pan">
           <ol class="breadcrumb">
             <li><a href="ingresa_g.php">Perfil</a></li>
             <li><a href="implementacion.php">Implementacion de sensores</a></li>
             <li class="active">Reporte de control</li>
           </ol>
         </div>

         <article class="clearfix">
           <a class="thumb pull-left">
             <img src="imag/3.jpg" alt="">
           </a>
         </article>
          </br> </br>

      <div class="container">
          <table class='table table-striped'>
              <thead>
                <tr>    
                  <th>Codigo de alerta</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Observacion</th>
                  <th>codigo de camara</th>
                  <th>Ubicación</th>
                </tr>
              </thead>
              <?php
                $link = mysql_connect("localhost","prueba","123456");
                mysql_select_db("sistema_alcantarillado");
                $sql="select distinct m.id_mantenimiento, m.fecha_m, m.hora_m,m.observacion,c.id_alcanta,u.distrito,u.zona,u.calle from alerta a, sensor s, alcantarillado c, mantenimiento m, ubicacion u where a.control='SI' and a.id_sensor=s.id_sensor and s.id_sensor=c.id_sensor and c.id_mantenimiento=m.id_mantenimiento and c.id_alcanta=u.id_alcanta";
                $data=mysql_query($sql,$link);
                while ($row=mysql_fetch_row($data))
                {
                  echo "<tr>";
                  echo "<td>".$row["0"]."</td><td>".$row["1"]."</td><td>".$row["2"]."</td><td>".$row["3"]."</td><td>".$row["4"]."</td><td>".$row["5"].", ".$row["6"].", ".$row["7"]."</td>";
                  echo "</tr>";
                }
              ?>
          </table>
      </div>


             </br> </br>




<form class="navbar-form navbar-left" role="search" method="POST" action="reporte_control_g.php">
    <p class="post.contenido navbar-text">Codigo de mantenimiento:</p>
        <input name="codigo_ma" type="text" class="form-control" id="codigo_ma">
            <!--ojo aqui esta el boton ver2-->

        <button type="submit" class="btn btn-primary">VER</button>
        </br>
    <h4>Empleados:</h4>

    <div class="container">
        <table class='table table-striped'>
              
              <?php
                $link = mysql_connect("localhost","prueba","123456");
                mysql_select_db("sistema_alcantarillado");

                
                if(empty($_POST['codigo_ma'])){
                 echo "vacio";
                }else{
                  $codigo_ma=$_POST['codigo_ma'];

                    $sql="select e.nombre from mantenimiento m, emple_manten em, empleado e where m.id_mantenimiento='".$codigo_ma."' and m.id_mantenimiento=em.id_mantenimiento and em.id_empleado=e.id_empleado";
                    $data=mysql_query($sql,$link);

                    while ($row=mysql_fetch_row($data))
                    {
                      echo "<tr>";
                      echo "<td>".$row["0"]."</td>";
                      echo "</tr>";
                    }
                }

                
              ?>
        </table>
    </div>

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