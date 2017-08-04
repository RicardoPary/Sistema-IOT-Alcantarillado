<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->


    <meta  http-equiv="Content-Type" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  

<title>Untitled Document</title>

<!--mimi-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>REPORTE DE CONTROL DE ALCANTARILLADOS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
<!--mimi-->


</head>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>



<?php
function humo(){
include("config.php");

$q="SELECT UNIX_TIMESTAMP(hora) fecha,nivel FROM dato";/*estamos haciendo el metodo inserccion*/
$rs=mysql_query($q,$con) or die(mysql_error());/*variable boolean llamamos a la consulta y al ser*/

//$consulta=$cn->prepare('SELECT UNIX_TIMESTAMP(hora) fecha,nivel FROM dato');
//$consulta->execute();

while($result=mysql_fetch_array($rs))
	{
		echo "["; 
		echo $result['fecha']*1000; 
		echo ",";
		echo $result['nivel'];
		echo "],";	      
	}
}
?>

<script>

$.getJSON('https://www.highcharts.com/samples/data/jsonp.php?filename=usdeur.json&callback=?', function (data) {

    Highcharts.chart('container', {
        chart: {
            zoomType: 'x'
        },
        title: {
            text: 'ESTADISTICAS DE ALERTAS'
        },
        subtitle: {
            text: document.ontouchstart === undefined ?
                    'Hacer click para aagrandar' : 'Pinch the chart to zoom in'
        },
        xAxis: {
            type: 'datetime'
        },
        yAxis: {
            title: {
                text: 'Nivel de Agua'
            }
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            area: {
                fillColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
                    stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                    ]
                },
                marker: {
                    radius: 2
                },
                lineWidth: 1,
                states: {
                    hover: {
                        lineWidth: 1
                    }
                },
                threshold: null
            }
        },

        series: [{
            type: 'area',
            name: 'USD to EUR',
            data: [<?php humo();?>]
        }]
    });
});


</script>
<body>

<!--mimi-->
<?php include("hola.php");?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<!--mimi-->

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

</body>
</html>
