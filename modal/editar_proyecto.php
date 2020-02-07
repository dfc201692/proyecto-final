
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='fa fa-edit'></i> Editar proyecto</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_proyecto" name="editar_proyecto">
			<div id="resultados_ajax2"></div>
			  <div class="form-group">
				<label for="mod_nombre" class="col-sm-6 control-label">Nombre del proyecto</label>
				<div class="col-sm-12">
				  <input type="text" class="form-control" id="mod_nombre" name="mod_nombre"  required>
					<input type="hidden" name="mod_id" id="mod_id">
					<input type="hidden" name="mod_cod" id="mod_cod">
				</div>
			  </div>
			   <div class="form-group">
				<label for="mod_telefono" class="col-sm-3 control-label">Codigo</label>
				<div class="col-sm-12">
				  <input type="text" class="form-control" id="mod_codigo" name="mod_codigo">
				</div>
			  </div>
			   <div class="form-group">
				<label for="mod_telefono" class="col-sm-3 control-label">Presupuesto</label>
				<div class="col-sm-12">
				  <input type="text" class="form-control" id="mod_presupuesto" name="mod_presupuesto">
				</div>
			  </div>
			   <div class="form-group">
				<label for="mod_telefono" class="col-sm-3 control-label">Estado</label>
				<div class="col-sm-12">
					<select name="mod_estado"  id="mod_estado"  class="form-control">
					<option value="activo">Activo</option>
					<option value="inactivo">Inactivo</option>
					<option value="terminado">Terminado</option>
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
	