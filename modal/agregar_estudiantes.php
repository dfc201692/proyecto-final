
	<div class="modal fade" id="nuevoMiembro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='fa fa-edit'></i> Agregar nuevo miembro</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_miembros" name="guardar_miembros">
			<div id="resultados_ajax"></div>
			 	<label>Nombre</label>
			  <div class="input-group mb-3">

                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="icon-user"></span></span>
                  </div>
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
			  <label>Apellidos</label>
			  <div class="input-group mb-3">

                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="icon-user"></span></span>
                  </div>
                  <input type="text" class="form-control" name="apellidos" placeholder="Apellidos">
                </div> 
                  <label>Rol</label>
                <div class="form-group">
                    <select class="form-control" name="rol">
                      <option value="estudiante">Estudiante</option>
                      <option value="investigador">Investigador</option>
                    </select>
                  </div>
            </div>

		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-info" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		  <div class="outer_div3"></div>
		</div>
	  </div>
	</div>
