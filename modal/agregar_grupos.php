  <style type="text/css">
     .modal-open { overflow: hidden; position:fixed; width: 100%; height: 100%; } 
  </style>
	<div class="modal fade" id="nuevoGrupo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='fa fa-edit'></i> Agregar nuevo grupo</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_grupos" name="guardar_grupos">
			<div id="resultados_ajax"></div>
			 	<label>Nombre del grupo</label>
			  <div class="input-group mb-3">

                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="fa fa-users"></span></span>
                  </div>
                  <input type="text" class="form-control" name="grupo" placeholder="Nombre del grupo">
                </div>
                <label>Programa</label>
			  <div class="input-group mb-3">
			  	 <select class="form-control" name="programa" required>
                      <option value="0">--Seleccione programa--</option>
                      <?php
										$grup=mysqli_query($con,"select * from programas");
										while ($rw=mysqli_fetch_array($grup)){
											$id=$rw["id"];
											$programa=$rw["programa"];
											?>
											<option value="<?php echo $id?>"><?php echo $programa?></option>
											<?php
										}
									?>
                    </select>
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
	<script>

$(document).ready(function() {
  $("#select2insidemodal").select2({
    dropdownParent: $("#nuevoGrupo")
  });
});

</script>
