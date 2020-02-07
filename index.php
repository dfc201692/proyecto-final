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
  $active_grupos="";
  $active_index="active"; 
   $active_graf=""; 
   $barra="";
   $barra_p="";
   $barra_h="";
   $barra_t=""; ?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Proyectos</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  
 <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

   <?php 
      include("modal/agregar_proyecto.php");
       include("modal/editar_proyecto.php");
        include("modal/editar_coordinador.php");
         include("modal/inv.php");
          include("modal/seguimientos.php");
             include("modal/cambiar_password.php");
                include("modal/alert.php");
       include("modal/est.php");
         include("modal/agregar_coordinador.php");
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
                  <div id="display"></div> 
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Proyectos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Principal</a></li>
              <li class="breadcrumb-item active">Proyectos</li>
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
        <?php if($_SESSION['prol']=='coordinador'){?>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-6"  id="gb">
           
          </div>
          <!-- /.col -->
          <!-- /.col -->

          <!-- fix for small devices only -->

          <div class="col-12 col-sm-12 col-md-6" style="height:398px;" id="gp">
            
          </div>
          <!-- /.col -->
        </div>
        <?php }?>
        <!-- /.row -->
<style type="text/css">
  td{
    font-size: 18px;
  }
</style>
        <div class="row">
          <div class="col-md-12">
            <div class="card" style="padding: 15px;">
                 <?php if($_SESSION['prol']=="administrador" || $_SESSION['prol']=="coordinador"){?>
                  <div class="pull-right" style="padding: 3px;">
            <button type="button" class="btn btn-info" style="float:right;" onkeyup="loadd(1);" data-toggle="modal" data-target="#nuevoProyecto" id="nuevoProyecto">
             <span class="glyphicon glyphicon-plus"></span> Nuevo Proyecto
            </button>
          </div>
        <?php } ?>
          <?php if($_SESSION['prol']=="administrador"  || $_SESSION['prol']=="coordinador"){?>
          <form class="form-horizontal" role="form" id="">
        
            <div class="form-group row">
              <p style="padding-left:5px;"></p><label for="q" class="col-md-0 control-label"></label>
              <div class="col-md-8">
                <input type="text" class="form-control" id="q" placeholder="Nombre del proyecto" onkeyup='load(1);'>
              </div>
              
            </div>
        
        
        
      </form> <?php } ?>
          <div id="resultados"></div><!-- Carga los datos ajax -->
           <?php if($_SESSION['prol']=="administrador"  || $_SESSION['prol']=="coordinador"){?>
        <div class='outer_div'></div><!-- Carga los datos ajax -->
      <?php }else{?>
        <input type="hidden" id="cx" value="<?php echo $_SESSION['username'];?>">
        <div class='outer_divx'></div><!-- Carga los datos ajax -->
      <?php } ?>
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

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->

<script src="plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="js/proyecto.js"></script>
<!-- PAGE PLUGINS -->

<script>
var _0xba39=["\x23\x6E\x75\x65\x76\x6F\x50\x72\x6F\x79\x65\x63\x74\x6F","\x73\x65\x6C\x65\x63\x74\x32","\x2E\x73\x65\x6C\x65\x63\x74\x32","\x2E\x73\x65\x6C\x65\x63\x74\x33","\x72\x65\x61\x64\x79","\x69\x6E\x70\x75\x74\x47\x72\x6F\x75\x70\x46\x69\x6C\x65\x30\x31","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x66\x69\x6C\x65\x73","\x6F\x62\x6A\x65\x63\x74","\x43\x61\x72\x67\x61\x6E\x64\x6F\x2E\x2E\x2E","\x74\x65\x78\x74","\x23\x6C\x6F\x61\x64\x5F\x69\x6D\x67","\x61\x70\x70\x65\x6E\x64","\x61\x6A\x61\x78\x2F\x69\x6D\x61\x67\x65\x6E\x5F\x61\x6A\x61\x78\x2E\x70\x68\x70","\x50\x4F\x53\x54","\x68\x74\x6D\x6C","\x61\x6A\x61\x78"];$(document)[_0xba39[4]](function(){$(_0xba39[2])[_0xba39[1]]({dropdownParent:$(_0xba39[0])});$(_0xba39[3])[_0xba39[1]]({dropdownParent:$(_0xba39[0])})});function upload_image(){var _0x6575x2=document[_0xba39[6]](_0xba39[5]);var _0x6575x3=_0x6575x2[_0xba39[7]][0];if(( typeof _0x6575x3=== _0xba39[8])&& (_0x6575x3!== null)){$(_0xba39[11])[_0xba39[10]](_0xba39[9]);var _0x6575x4= new FormData();_0x6575x4[_0xba39[12]](_0xba39[5],_0x6575x3);$[_0xba39[16]]({url:_0xba39[13],type:_0xba39[14],data:_0x6575x4,contentType:false,cache:false,processData:false,success:function(_0x6575x4){$(_0xba39[11])[_0xba39[15]](_0x6575x4)}})}}
    </script>

</body>
</html>
