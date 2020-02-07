<?php session_start();
  if (!isset($_SESSION['id_user'])) {
        header("location: login.php");
    exit;
  }
  /* Connect To Database*/
  require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
  require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
  
  $active_miembros="";
  $active_programas="";
  $active_grupos="active";
  $active_index="";  
  $barra_t="active";  
  $barra="";
  $barra_h="";
     $barra_p="";
   $active_graf="menu-open"; 
  ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Grafica de piramide</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
   <?php 
      include("modal/agregar_grupos.php");
         include("modal/cambiar_password.php");
       include("modal/editar_grupos.php");
         include("modal/alert.php");
    ?>
  <!-- Navbar -->
 <?php include('include/nav.php');?>
  <!-- Main Sidebar Container -->
  <?php
  include('include/sidebar.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Piramide por proyecto</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Principal</a></li>
              <li class="breadcrumb-item active">Piramide por proyecto</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"> 
        <div class="row">
          <div class="col-md-12">
            <div class="card" style="padding: 15px;">
             
          <div id="resultados"></div><!-- Carga los datos ajax -->
        <div class='gbgg' id="pry">
          
        </div><!-- Carga los datos ajax -->
              </div>
              
       
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

       
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
   <?php include('include/footer.php'); ?>
</div>
<!-- ./wrapper -->
<?php

        require_once("conexion/conexion.php");

?>

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>


    <script type="text/javascript">
$(function () {

    $('#pry').highcharts({
        chart: {
            type: 'pyramid',
            marginRight: 200
        },
        title: {
            text: 'Piramide por proyecto',
            x: -50
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b> ({point.y:,.0f})',
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black',
                    softConnector: true
                }
            }
        },
        legend: {
            enabled: false
        },
        series: [{
            name: 'entregables',
            data: [
      
      <?php
      $sql=mysql_query("SELECT count(documento) as total, proyecto.nombre_proyecto  FROM `seguimientos`, proyecto where seguimientos.codigo_proyecto=proyecto.codigo group by nombre_proyecto");
      while($res=mysql_fetch_array($sql)){
      ?>      
      
['<?php echo $res['nombre_proyecto'] ?>', <?php echo $res['total'] ?> ],

      <?php
      }
      ?>

            ]
        }]
    });
});
    </script>

<script src="Highcharts-4.1.5/js/highcharts.js"></script>
<script src="Highcharts-4.1.5/js/modules/funnel.js"></script>
<script src="Highcharts-4.1.5/js/modules/exporting.js"></script>


<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- SparkLine -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jVectorMap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.2 -->
<script src="plugins/chartjs-old/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
