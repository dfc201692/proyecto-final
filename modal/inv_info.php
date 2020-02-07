
	<div class="modal fade" id="nuevoInv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header bg-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='fa fa-edit'></i> Agregar investigadores</h4>
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
			<form class="form-horizontal" method="post" id="guardar_inv" name="guardar_inv">
			<div id="resultados2"></div>
			 	<div class="input-group my-colorpicker2">
         <input type="hidden" class="form-control" value="<?php echo $_GET['cod'];?>" name="c" id="c">    
          <input type="hidden" class="form-control" name="q" id="q">     
<select id="browsers"  class="form-control"  name="investigador" required>
	 <?php
										$inv=mysqli_query($con,"select * from miembros where rol='Investigador'");
										while ($rw=mysqli_fetch_array($inv)){
											$id=$rw["id"];
											$nombre=$rw["nombre"].' '.$rw["apellidos"];
											?>
											<option value="<?php echo $id;?>"><?php echo $nombre?></option>
											<?php
										}
									?></select>
                    
                  </div>
                  <p></p>
                 <div class="form-group">
                  <select name="rol" id="rol">
                      <option value="Inv Principal" id="in" class="in">Inv Principal</option>
                    <option value="Coinvestigador" id="co" selected>Coinvestigador</option>
                  </select>
               
                 </div>
            </div>

		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-info" id="guardar_dato">Guardar datos</button>
		  </div>
		  </form>
		  <div class="outer_divinf"></div>
		</div>
	  </div>
	</div>
