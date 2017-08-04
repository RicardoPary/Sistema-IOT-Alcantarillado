<!--

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>



<header>
    
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">       
        <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://wwww.epsas.com.bo/epsas/index.php/es/">EPSAS</a>

          </div>
          
          <nav class="navbar-collapse collapse" id="navigacion-fm">

         
      <?php session_start();?>
            <ul class="nav navbar-nav">
              
              <?php

                if($_SESSION['empleado']['tipo_e']=='MANTENIMIENTO'):
              ?>
                  <li class="active"><a href="ingresa_g.php">Perfil</a></li>
                  <li><a href="reporte_control_g.php">Reporte de Control</a></li>
                  <li><a href="reporte_alerta_g.php">Reporte de Alertas</a></li>
                  <li><a href="index.php">Salir</a></li>
               
              <?php else:?>
                  <li class="active"><a href="ingresa_g.php">Perfil</a></li>
                  <li><a href="registro_empleado.php">Registro Empleado</a></li>
                  <li class="dropdown">
                    <a href="registro_sensor.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro de sensores</a>
                      <ul class="dropdown-menu">
                        <li role="separator" class="divider"></li>
                        <li><a href="##">Registro del sensor de agua</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="##">Registro del sensor ultrasonido</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="##">Registro de camara</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="##">Registro de la ubicacion de la camara</a></li>
                      </ul>


                  </li>
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
        
    <section class="jumbotron">
      <div class="container">
        <h1>SistemaControlAlcantarillado</h1>
      </div>
    </section>

    </body>
</html>
    -->






<!--
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<head>
  <style>
  body {
      position: relative;
  }
  .affix {
      top: 20px;
  }
  div.col-sm-9 div {
      height: 250px;
      font-size: 28px;
  }
  #section1 {color: #fff; background-color: #1E88E5;}
  #section2 {color: #fff; background-color: #673ab7;}
  #section3 {color: #fff; background-color: #ff9800;}
  #section41 {color: #fff; background-color: #00bcd4;}
  #section42 {color: #fff; background-color: #009688;}
  
  @media screen and (max-width: 810px) {
    #section1, #section2, #section3, #section41, #section42  {
        margin-left: 150px;
    }
  }
  </style>

</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="15">



<div class="container-fluid" style="background-color:#2196F3;color:#fff;height:90px;">
  <h1>SistemaControlAlcantarillado</h1>
</div>

-->
    <section class="jumbotron">
      <div class="container">
        <h1>SistemaControlAlcantarillado</h1>
      </div>
    </section>







<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://www.epsas.com.bo/epsas/index.php/es/">EPSAS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">


      <?php session_start();?>
            <ul class="nav navbar-nav">
            <!-- <ul class="nav nav-pills">-->
              <?php

                if($_SESSION['empleado']['tipo_e']=='MANTENIMIENTO'):
              ?>
                  <li class="active"><a href="ingresa_g.php">Perfil</a></li>
                  <li class="active"><a href="reporte_control_g.php">Reporte de Control</a></li>
                  <li><a href="reporte_alerta_g.php">Reporte de Alertas</a></li>
                  <li><a href="index.php">Salir</a></li>
               
              <?php else:?>
                  <li class="active"><a href="ingresa_g.php">Perfil</a></li>
                  <li><a href="registro_empleado.php">Registro Empleado</a></li>
                  
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" >Registro de sensores<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Registro del sensor de agua</a></li>
                      <li><a href="#">Registro del sensor ultrasonido</a></li>
                      <li><a href="#">Registro de camara</a></li>
                      <li><a href="#">Registro de la ubicacion de la camara</a></li>
                    </ul>
                  </li>
                  
                  <li><a href="reporte_control_g.php">Reporte de Control</a></li>
                  <li><a href="reporte_alerta_g.php">Reporte de Alertas</a></li>
                  <li><a href="mostrarsensor.php">Estadisticas de alertas</a></li>
                  <li><a href="index.php">Salir</a></li>
              <?php endif;?>
             
            </ul>






      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  







<br>

<div class="container">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205">
        <li><a href="#section1">Section 1</a></li>
        <li><a href="#section2">Section 2</a></li>
        <li><a href="#section3">Section 3</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#section41">Section 4-1</a></li>
            <li><a href="#section42">Section 4-2</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <div class="col-sm-9">
      <div id="section1">    
        <h1>Section 1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section2"> 
        <h1>Section 2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>        
      <div id="section3">
        <h1>Section 3</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
      <div id="section41">
        <h1>Section 4-1</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>      
      <div id="section42">
        <h1>Section 4-2</h1>
        <p>Try to scroll this section and look at the navigation list while scrolling!</p>
      </div>
    </div>
  </div>
</div>









<div class="container">
  <h3>Collapsible Navbar</h3>
  <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
</div>
