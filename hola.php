    <section class="jumbotron">
      <div class="container">
        <h1>SistemaControlAlcantarillado</h1>
      </div>
    </section>

<header>  
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">       
        <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
              <a class="navbar-brand" href="http://www.epsas.com.bo/epsas/index.php/es/">EPSAS</a>
            </div>
          <!--Inicia Menu-->
          <nav class="collapse navbar-collapse " id="myNavbar">
      <?php session_start();?>
            <ul class="nav navbar-nav">
              
              <?php

                if($_SESSION['empleado']['tipo_e']=='MANTENIMIENTO'):
              ?>
                  <li class="active"><a href="ingresa_g.php">Perfil</a></li>
                  <li class="active"><a href="reporte_control_g.php">Reporte de Control</a></li>
                  <li class="active"><a href="reporte_alerta_g.php">Reporte de Alertas</a></li>
                  <li class="active"><a href="index.php">Salir</a></li>
               
              <?php else:?>
                  <li class="active"><a href="ingresa_g.php">Perfil</a></li>
                  <li class="active"><a href="registro_empleado.php">Registro Empleado</a></li>
                  <li class="active"><a href="registro_sensor.php">Registro de nuevos sensores</a></li>
                  

<!--
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" >Registro de sensores<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li class="active"><a href="#">Registro del sensor de agua</a></li>
                      <li class="active"><a href="#">Registro del sensor ultrasonido</a></li>
                      <li class="active"><a href="#">Registro de camara</a></li>
                      <li class="active"><a href="#">Registro de la ubicacion de la camara</a></li>
                    </ul>
                  </li>
-->  

                  <li class="active"><a href="reporte_control_g.php">Reporte de Control</a></li>
                  <li class="active"><a href="reporte_alerta_g.php">Reporte de Alertas</a></li>
                  <li class="active"><a href="mostrarsensor.php">Estadisticas de alertas</a></li>
                  <li class="active"><a href="index.php">Salir</a></li>
              <?php endif;?>
             
            </ul>
          </nav>
        </div>
      </nav>
    </header>
        <!-- Aqui va el jumbotron-->
