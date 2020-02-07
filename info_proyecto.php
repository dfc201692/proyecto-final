<?php
require_once ("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
  require_once ("./config/conexion.php");//Contiene funcion que conecta a la base de datos
session_start();
  if (!isset($_SESSION['id_user'])) {
        header("location: login.php");
    exit;
  }
  
  
   $active_miembros="";
  $active_programas="";
  $active_grupos="";
  $active_index=""; 
  $barra_p="";
$active_graf="";
$barra="";
$barra_h="";
$barra_t="";?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Informacion del proyecto</title>

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
       include("modal/est_info.php");
        include("modal/inv_info.php");
           include("modal/alert.php");
           include("modal/cambiar_password.php");
    ?>
  <!-- Navbar -->
 <?php include('include/nav.php');?>
  <!-- Main Sidebar Container -->
  <?php
  include('include/sidebar.php');
  ?>
<?php
                    $cod=$_GET['cod'];
                    $proyecto=mysqli_query($con,"select * from proyecto where codigo='".$cod."'");
                   $rw=mysqli_fetch_array($proyecto);
                      $nombre=$rw["nombre_proyecto"];
                      $presupuesto=$rw["presupuesto"];
                     
                     $est=mysqli_query($con,"select count(*) as count from estudiantes_proyecto where codigo_proyecto='".$cod."'");
                   $rw=mysqli_fetch_array($est);
                    $estudiantes=$rw["count"];

                    $inv=mysqli_query($con,"select count(*) as count from investigadores_proyecto where codigo_proyecto='".$cod."'");
                   $rw=mysqli_fetch_array($inv);
                    $investigadores=$rw["count"];

                    $g=mysqli_query($con,"SELECT * FROM grupo_proyecto WHERE codigo_proyecto='".$cod."'");
                   $rw=mysqli_fetch_array($g);
                    $g=$rw["id_grupo"];
                      $gr=mysqli_query($con,"SELECT * FROM grupos WHERE id='".$g."'");
                   $rwd=mysqli_fetch_array($gr);
                    $gf=$rwd["nombre_grupo"];

                     $f=mysqli_query($con,"SELECT `programas`.id, `programas`.programa from programas,  programa_proyecto where programa_proyecto .codigo_proyecto='".$cod."'");
                   $rws=mysqli_fetch_array($f);
                    $p=$rws["programa"];
                  
                  $c=mysqli_query($con,"SELECT * from cronograma where codigo_proyecto='".$cod."'");
                   $rwst=mysqli_fetch_array($c);
                    $fi=$rwst["fecha_inicio"];
                    $ff=$rwst["fecha_fin"];                  
                  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Proyecto <?php echo $nombre;?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Principal</a></li>
              <li class="breadcrumb-item active"><?php echo $nombre;?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="icon-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Grupo</span>
                <span class="info-box-number">
                  <?php echo $gf;?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="icon-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Programa</span>
                <span class="info-box-number">  <?php echo $p;?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="icon-qrcode"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Codigo</span>
                <span class="info-box-text"><b>#<?php  echo $_GET['cod'];?></b></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="icon-credit-card"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Presupuesto</span>
                <span class="info-box-number">$<?php  echo number_format($presupuesto);?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
<style type="text/css">
  td{
    font-size: 18px;
  }
</style>
        
<?php 
          function fechaCastellano ($fecha) {
  $fecha = substr($fecha, 0, 10);
  $numeroDia = date('d', strtotime($fecha));
  $dia = date('l', strtotime($fecha));
  $mes = date('F', strtotime($fecha));
  $anio = date('Y', strtotime($fecha));
  $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
  $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
  $nombredia = str_replace($dias_EN, $dias_ES, $dia);
$meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
  $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
  $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
  return $nombredia." ".$numeroDia." de ".$nombreMes." de ".$anio;
}
           ?>
              <div class="row">
                  <div class="col-md-6">
            <!-- Line chart -->
            <div class="card card-primary card-info">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="icon-file-text2"></i>
                 Descripcion
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <?php
         $cd=$_GET['cod'];
        $descripcion=mysqli_query($con,"SELECT descripcion FROM proyecto where codigo='".$cd."'");
        $rwt=mysqli_fetch_array($descripcion);?>
<label style="color:#000;    font-size: 15px;"><?php echo $rwt["descripcion"];?></label>
 
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->  <div class="col-md-6">
            <!-- Line chart -->
            <div class="card card-primary card-info">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="icon-calendar"></i>
                 Cronograma
                </h3>
<input type="hidden" name="cx" id="cx" value="<?php echo $_GET['cod'];?>">
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
               <div class="col-md-8" style="font-size: 17px;"><b>Fecha Inicio</b></div>
               <div class="col-md-8"><?php echo fechaCastellano ($fi);?></div>
                  <div class="col-md-8" style="font-size: 17px;"><b>Fecha Fin</b></div>
                  <div class="col-md-8"><?php echo fechaCastellano ($ff);?></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->


          <div class="col-md-6">
            <!-- Line chart -->
            <div class="card card-primary card-info">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa fa-users"></i>
                 Investigadores
                </h3>

                <div class="card-tools">
                    <?php if($_SESSION['prol']=="administrador" || $_SESSION['prol']=="coordinador"){?>
                  <button type="button" class="btn btn-tool" data-target="#nuevoInv" id="inv" data-toggle="modal"><i class="fa fa-plus"></i>
                  </button>
                <?php }?>
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="result" id="result"></div>
                <div class="outer_divww" id="outer_divww">
              </div>
            </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

         
          <div class="col-md-6">
            <!-- Line chart -->
            <div class="card card-primary card-info">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fa fa-users"></i>
                Estudiantes
                </h3>

                <div class="card-tools">
                   <?php if($_SESSION['prol']=="administrador" || $_SESSION['prol']=="coordinador"){?>
                  <button type="button" class="btn btn-tool" data-target="#nuevoEst" id="est" data-toggle="modal"><i class="fa fa-plus"></i>
                  </button>
                <?php } ?>
                   <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="result1" id="result1"></div>
                 <div class="outer_divyy" id="outer_divyy">
              </div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>


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

  <?php include('include/footer.php'); ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.js"></script>
<script type="text/javascript">
  $("#est").click(function(){
$('#ce').val(<?php echo $_GET['cod']; ?>);
});

$("#inv").click(function(){
$('#c').val(<?php echo $_GET['cod']; ?>);
});
</script>
<script src="js/info.js"></script>
<!-- Bootstrap -->
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
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
