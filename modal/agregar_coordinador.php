
	<div class="modal fade" id="nuevoCordinador" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='fa fa-edit'></i> Agregar coordinador</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_coordinador" name="guardar_coordinador">
			<div id="resultados2"></div>
			 	<label>Nombre del coordinador</label>
			  <div class="input-group mb-3">

                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="icon-user-tie"></span></span>
                  </div>
                  <input type="text" class="form-control" name="coordinador" placeholder="Nombre del cordinador">
                </div>
                <label>Contraseña</label>
			  <div class="input-group mb-3">

                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="icon-key"></span></span>
                  </div>
                  <input type="password" class="form-control" name="password" placeholder="contraseña">
                </div>
                
                <label>Repiter contraseña</label>
			  <div class="input-group mb-3">

                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="icon-key"></span></span>
                  </div>
                  <input type="password" class="form-control" name="ppassword" placeholder="Repetir contraseña">
                </div>
                
            </div>

		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-info" id="guardar_coordinador">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
