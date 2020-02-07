
	  <style type="text/css">
     .modal-open { overflow: hidden; position:fixed; width: 100%; height: 100%; } 
  </style>
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='fa fa-edit'></i> Editar miembros</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_estudiante" name="editar_estudiante">
			<div id="resultados_ajax2"></div>
			  <div class="form-group">
				<label for="mod_nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-12">
				  <input type="text" class="form-control" id="mod_nombre" name="mod_nombre"  required>
					<input type="hidden" name="mod_id" id="mod_id">
				</div>
			  </div>
			   
			  <div class="form-group">
				<label for="mod_telefono" class="col-sm-3 control-label">Cedula</label>
				<div class="col-sm-12">
				  <input type="number" class="form-control" id="mod_cedula" name="mod_cedula" required="">
				</div>
			  </div>
<div class="form-group">
				<label for="mod_telefono" class="col-sm-3 control-label">Rol</label>
				<div class="col-sm-12">
				<select class="form-control" name="mod_rol" id="mod_rol">
                      <option value="Estudiante" selected>Estudiante</option>
                      <option value="Investigador">Investigador</option>
                    </select>
				</div>
			  </div>
			  <div class="input-group">
			  	<label for="mod_telefono" class="col-sm-3 control-label">Grupo</label>
			  	<div class="col-sm-12">
                      <select class="form-control" id="mod_grupo" name="mod_grupo" required>
                      <option value="0">--Seleccione un grupo--</option>
                      <?php
                    $gf=mysqli_query($con,"select * from grupos");
                    while ($rw=mysqli_fetch_array($gf)){
                      $idd=$rw["id"];
                      $grupo=$rw["nombre_grupo"];
                      ?>
                      <option value="<?php echo $idd;?>"><?php echo $grupo;?></option>
                      <?php
                    }
                  ?>
                    </select>
                </div>
                    <!-- /input-group -->
                  </div>
			  <div class="form-group">
				<label for="mod_telefono" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-12">
					<select name="mod_estado"  id="mod_estado"  class="form-control">
					<option value="activo">Activo</option>
					<option value="inactivo">Inactivo</option>
					</select>
				</div>
			  </div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-info" id="actualizar_datos">Actualizar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<script>

$(document).ready(function() {
  $("#select2insidemodal").select2({
    dropdownParent: $("#myModal2")
  });
});

</script>