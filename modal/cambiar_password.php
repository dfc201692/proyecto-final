	<?php
		if (isset($con))
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='icon icon-edit'></i> Cambiar contraseña</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="editar_password" name="editar_password">
			<div id="resultados_ajax3"></div>
			 
			 
			 
			 
			  <div class="form-group">
				<label for="user_password_new3" class="col-sm-12 control-label">Nueva contraseña</label>
				<div class="col-sm-12">
				  <input type="password" class="form-control" id="user_password_new3" name="user_password_new3" placeholder="Nueva contraseña" pattern=".{5,}" title="Contraseña ( min . 5 caracteres)" required>
					<input type="hidden" id="user_id_mod" name="user_id_mod" value="<?php echo $_SESSION['id_user'];?>">
				</div>
			  </div>
			  <div class="form-group">
				<label for="user_password_repeat3" class="col-sm-12 control-label">Repite contraseña</label>
				<div class="col-sm-12">
				  <input type="password" class="form-control" id="user_password_repeat3" name="user_password_repeat3" placeholder="Repite contraseña" pattern=".{5,}" required>
				</div>
			  </div>
			 
			  

			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-info" id="editar_password">Cambiar contraseña</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>	