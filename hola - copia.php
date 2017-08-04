

<header>
    
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">       
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://wwww.epsas.com.bo/epsas/index.php/es/">EPSAS</a>
          </div>
          <!--Inicia Menu-->
          <nav class="navbar-collapse collapse" id="navigacion-fm">

         
      <?php session_start();?>
            <ul class="nav navbar-nav">
              
              <?php

                if($_SESSION['empleado']['tipo_e']=='MANTENIMIENTO'):
              ?>
                  <li class="active"><a href="ingresa_g.php">Perfil</a></li>
                  <li class="active"><a href="reporte_control_g.php">Reporte de Control</a></li>
                  <li><a href="reporte_alerta_g.php">Reporte de Alertas</a></li>
                  <li><a href="index.php">Salir</a></li>
               
              <?php else:?>
                  <li class="active"><a href="ingresa_g.php">Perfil</a></li>
                  <li class="active"><a href="registro_empleado.php">Registro Empleado</a></li>
                  <li class="active"><a href="registro_sensor.php">Registro de sensores</a></li>
                  <li><a href="reporte_control_g.php">Reporte de Control</a></li>
                  <li><a href="reporte_alerta_g.php">Reporte de Alertas</a></li>
                  <li><a href="mostrarsensor.php">Estadisticas de alertas</a></li>
                  <li><a href="index.php">Salir</a></li>
              <?php endif;?>
             
            </ul>
          </nav>
        </div>
      </nav>
    </header>
        <!-- Aqui va el jumbotron-->
    <section class="jumbotron">
      <div class="container">
        <h1>SistemaControlAlcantarillado</h1>
      </div>
    </section>