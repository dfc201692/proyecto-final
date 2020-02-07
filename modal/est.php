
	<div class="modal fade" id="nuevoEst" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='fa fa-edit'></i> Agregar estudiantes</h4>
		  </div>
		  <style>
#banner .seach-main-con .text-box{width:100%; height:45px; border-radius:5px; margin:3px 0; background-color:#fff; font-size:15px;}
#banner .seach-main-con option{padding:5px; font-size:15px;}
#banner .seach-main-con .search-btn{width:100%; height:50px; border-radius:5px; margin:15px 0; background-color:#d83318; color:#fff; font-size:20px; border:0;}
#banner .seach-main-con .dropdown-text{width:100%; height:45px; border-radius:5px; margin:3px 0; background-color:#fff; font-size:15px;}
#banner .seach-main-con datalist{padding:5px; font-size:15px;}
#banner .seach-main-con .datalist-option{width:100%; padding:5px; font-size:15px; background-color:#fff;}
</style>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar" name="guardar">
			<div id="resultados3"></div>
			 	<div class="input-group my-colorpicker2">
         <input type="hidden" class="form-control" value="<?php echo $_GET['cod'];?>" name="ce" id="ce">     
<select id=""  class="form-control"  name="estudiante" required>
	 <?php
										$inv=mysqli_query($con,"select * from miembros where rol='Estudiante'");
										while ($rw=mysqli_fetch_array($inv)){
											$id=$rw["id"];
											$nombre=$rw["nombre"].' '.$rw["apellidos"];
											?>
											<option value="<?php echo $id;?>"><?php echo $nombre?></option>
											<?php
										}
									?></select>
                    <div class="input-group-append">
                      <span class="input-group-text" style="cursor:pointer;"><i class="fa fa-user"></i></span>
                    </div>
                  </div>
                  
                  
            </div>

		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-info" id="guardar">Guardar datos</button>
		  </div>
		  </form>
		  <div class=""></div>
		</div>
	  </div>
	</div>
	<script type="text/javascript">
		$( "#guardar_est" ).submit(function( even) {
  var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/est.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados3").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados3").html(datos);
			$('#guardar_est').attr("disabled", false);
		  }
	});
  even.preventDefault();
})

	</script>
