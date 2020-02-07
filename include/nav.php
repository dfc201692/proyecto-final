<link rel="stylesheet" href="style.css">
 <nav class="main-header navbar navbar-expand border-bottom navbar-dark bg-info" id="nav">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link"><span class="icon-folder"></span> Proyecto</a>
      </li>
         <?php if($_SESSION['prol']=="administrador" || $_SESSION['prol']=="coordinador"){?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="grupos.php" class="nav-link"><span class="fa fa-users"></span> Grupos</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="programas.php" class="nav-link"><span class="icon-books"></span> Programas</a>
      </li>
       <li class="nav-item d-none d-sm-inline-block">
        <a href="Miembros.php" class="nav-link"><span class="icon-user-tie"></span> Miembros</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="coordinadores.php" class="nav-link"><span class="icon-user-check"></span> Cordinadores</a>
      </li>
  <?php } ?>
    </ul>

<style type="text/css">

#caja_busqueda /*estilos para la caja principal de busqueda*/
{
width:400px;
height:25px;
border:solid 2px #979DAE;
font-size:16px;
}
#display {
    width: 300px;
    position: absolute;
    display: none;
    top: 44px;
    overflow: hidden;
    z-index: 10;
    border: solid 1px #666;

}
.display_box {
    padding: 6px;
    font-size: 18px;
    height: 55px;
    text-decoration: none;
    color: #3b5999;
    background: #fff;
}
.display_box:hover /*estilos para cada caja unitaria de cada usuario que se muestra. cuando el mause se pocisiona sobre el area*/
{
background: #415AB5;
color: #FFF;
}
.desc
{
color:#666;
font-size:16;
}
.desc:hover
{
color:#FFF;
}

/* Easy Tooltip */
</style>

    <!-- SEARCH FORM -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <script type="text/javascript">
        function logged ()
    {
    if (confirm("Realmente deseas cerrar session")){ 
    location.href="././ajax/logout.php";
    }
    }
      </script>
      <!-- Notifications Dropdown Menu -->
       
         <li class="nav-item dropdown">
        <a class="nav-link" data-target="#myModal3" data-toggle="modal" href="javascript:void(0);">
          <i class="icon-cog"></i>
        </a></li>
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="javascript:void(0);" onclick="logged();">
          <i class="icon-switch"></i>
        </a></li>
     
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fa fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <script type="text/javascript">
$( "#editar_password" ).submit(function( event ) {
  $('#actualizar_datos3').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_password.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax3").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax3").html(datos);
			$('#actualizar_datos3').attr("disabled", false);
			load(1);
		  }
	});
  event.preventDefault();
})
</script>