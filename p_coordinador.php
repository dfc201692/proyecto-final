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

  <title>Graficas</title>

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
            <h1 class="m-0 text-dark">Graficas</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Principal</a></li>
              <li class="breadcrumb-item active">Graficas</li>
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
                
          <?php if($_SESSION['prol']=="administrador"  || $_SESSION['prol']=="coordinador"){?>
          <?php } ?>

          <div id="resultados"></div><!-- Carga los datos ajax -->
         
       
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

$(document).ready(function() {
  $(".select2").select2({
    dropdownParent: $("#nuevoProyecto")
  });
  $(".select3").select2({
    dropdownParent: $("#nuevoProyecto")
  });
});

</script>

<script>
    function upload_image(){
     
        var inputFileImage = document.getElementById("inputGroupFile01");
        var file = inputFileImage.files[0];
        if( (typeof file === "object") && (file !== null) )
        {
          $("#load_img").text('Cargando...'); 
          var data = new FormData();
          data.append('inputGroupFile01',file);
          
          
          $.ajax({
            url: "ajax/imagen_ajax.php",        // Url to which the request is send
            type: "POST",             // Type of request to be send, called as method
            data: data,         // Data sent to server, a set of key/value pairs (i.e. form fields and values)
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,        // To send DOMDocument or non processed data file it is set to false
            success: function(data)   // A function to be called if request succeeds
            {
              $("#load_img").html(data);
              
            }
          }); 
        }
        
        
      }
    </script>

</body>
</html>
