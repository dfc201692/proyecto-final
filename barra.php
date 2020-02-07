<?php

				require_once("conexion/conexion.php");

?>


		<script type="text/javascript">
$(function () {
    $('#gb_f').highcharts({
        chart: {
            type: 'column',
            margin: 95,
            options3d: {
                enabled: true,
                alpha: 10,
                beta: 25,
                depth: 70
            }
        },
        title: {
            text: 'Entregables por proyecto'
        },
        subtitle: {
            text: ''
        },
        plotOptions: {
            column: {
                depth: 25
            }
        },
        xAxis: {
            categories: [
			<?php
$sql=mysql_query("SELECT count(documento) as total, proyecto.nombre_proyecto  FROM `seguimientos`, proyecto where seguimientos.codigo_proyecto=proyecto.codigo group by nombre_proyecto");
while($res=mysql_fetch_array($sql)){			
?>					
			
			['<?php echo $res['nombre_proyecto']; ?>'],
<?php
}
?>
			]
        },
        yAxis: {
            title: {
                text: null
            }
        },
        series: [{
            name: 'Entregables',
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
<script src="Highcharts-4.1.5/js/highcharts-3d.js"></script>

<div id="gb_f"></div>
<br>



