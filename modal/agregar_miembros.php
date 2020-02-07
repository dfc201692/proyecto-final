
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
                    <span class="input-group-text"><sapn class="fa fa-user"></sapn></span>
                  </div>
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre" required="">
                </div>
			   
                <label>Cedula</label>
			  <div class="input-group mb-3">

                  <div class="input-group-prepend">
                    <span class="input-group-text">#</span>
                  </div>
                  <input type="number" class="form-control" name="cedula" placeholder="Cedula" required="">
                </div> 
                  <label>Rol</label>
                <div class="form-group">
                    <select class="form-control" name="rol">
                      <option value="Estudiante">Estudiante</option>
                      <option value="Investigador">Investigador</option>
                    </select>
                  </div>
                   <label>Grupo</label>
                    <div class="input-group">
                      <select class="form-control" id="grupo" name="grupo" required>
                      <option value="0">--Seleccione un grupo--</option>
                      <?php
                    $programas=mysqli_query($con,"select * from grupos");
                    while ($rw=mysqli_fetch_array($programas)){
                      $id=$rw["id"];
                      $grupo=$rw["nombre_grupo"];
                      $programa=$rw["nombre_programa"];
                      ?>
                      <option value="<?php echo $id;?>"><?php echo $grupo;?></option>
                      <?php
                    }
                  ?>
                    </select>
                    <!-- /input-group -->
                  </div>
            </div>

		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-info" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
