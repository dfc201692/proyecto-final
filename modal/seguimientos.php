
<meta charset="utf-8">
	<div class="modal fade" id="seguim" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='fa fa-edit'></i> Seguimientos</h4>
		  </div>
		  <div class="modal-body">
		  
		  	<form class="form-horizontal" name="seg" id="seg" method="post"> <?php if($_SESSION['prol']=="administrador" || $_SESSION['prol']=="coordinador"){?>
			<div id="resultados_ajax11"></div>
                <div class="col-lg-12">
                <div class="form-group">
                    <textarea class="form-control" placeholder="Descripcion del proyecto" name="descripcion" id="descripcion"></textarea>
                  </div>
          </div>
			<div class="col-sm-12">
			 <div class="form-group">
                    <label for="exampleInputFile">Documento</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" onkeyup="loaddds(1);"  class="custom-file-input" id="exampleInputFile" name="exampleInputFile" required>
                        <label class="custom-file-label" for="exampleInputFile">Documento</label>
                      </div>
                    </div>
                  </div>
              </div>
						<div class="form-group">
							

				<div class="col-sm-12">
					<select name="tipo"  id="tipo" onkeyup="loaddds(1);"  class="form-control" required>
					<option value="parcial" selected>Parcial</option>
					<option value="final">Final</option>
					</select>
				</div>
			  </div>
			  <div class="col-sm-12">
					<select name="nomb"  id="nomb" onkeyup="select();"  class="form-control" required>
						
					
					</select>
				<input type="hidden" name="cd" placeholder="Nombre del seguimiento"  id="cd"  class="form-control">
				<input type="hidden" name="cdd" placeholder="Nombre del seguimiento"  id="cdd"  class="form-control">
			  </div>
            </div>

		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-info" id="seg" name="seg">Guardar datos</button>	<?php }else{?>
			<input type="hidden" name="cd" placeholder="Nombre del seguimiento"  id="cd"  class="form-control">
				<input type="hidden" name="cdd" placeholder="Nombre del seguimiento"  id="cdd"  class="form-control"><?php }?>
		  </div>
		  </form>

		     <div class='outer_div11'> 
		   </div><!-- Carga los datos ajax -->
		</div>
	  </div>
	</div>
	
