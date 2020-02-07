<?php

				require_once("conexion/conexion.php");

?>

		<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Historic World Population by Region'
        },
        subtitle: {
            text: 'Source: Wikipedia.org'
        },
        xAxis: {
            categories: [
<?php
$sql=mysql_query("SELECT count(documento) as total, proyecto.nombre_proyecto  FROM `seguimientos`, proyecto where seguimientos.codigo_proyecto=proyecto.codigo group by nombre_proyecto");
while($res=mysql_fetch_array($sql)){			
?>
			
			['<?php echo $res['nombre_proyecto'] ?>'],
			
<?php
}
?>
			
			],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (millions)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 100,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Year 1800',
            data: [
			<?php
$sql=mysql_query("SELECT count(documento) as total, proyecto.nombre_proyecto  FROM `seguimientos`, proyecto where seguimientos.codigo_proyecto=proyecto.codigo group by nombre_proyecto");
while($res=mysql_fetch_array($sql)){			
?>			
			[<?php echo $res['total'] ?>],
		
<?php
}
?>			
			]
        }]
    });
});
		</script>
	
<script src="Highcharts-4.1.5/js/highcharts.js"></script>

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
