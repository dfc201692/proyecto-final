<?php

				require_once("conexion/conexion.php");

?>

        <script type="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript">
$(function () {
    $('#gp').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Porcentaje por entregables'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Entregables',
            data: [
			
			<?php
			$sql=mysql_query("SELECT count(documento) as total, proyecto.nombre_proyecto  FROM `seguimientos`, proyecto where seguimientos.codigo_proyecto=proyecto.codigo group by nombre_proyecto");
			while($res=mysql_fetch_array($sql)){
			?>
			
                ['<?php echo $res['nombre_proyecto']; ?>', <?php echo $res['total'] ?>],
			
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

<div id="gp"></div>

