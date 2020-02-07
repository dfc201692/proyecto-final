<?php
	/* Connect To Database*/
	session_start();
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if (isset($_GET['id'])){
		$idd=intval($_GET['id']);
			if ($delete1=mysqli_query($con,"DELETE FROM investigadores_proyecto WHERE id='".$idd."'")){
			?>
			<div class="alert alert-info alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Aviso!</strong> Datos eliminados exitosamente.
			</div>
			<?php 
		}else {
			?>
			<div class="alert alert-danger alert-dismissible" role="alert">
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  <strong>Error!</strong> Lo siento algo ha salido mal intenta nuevamente.
			</div>
			<?php
			
		}
			
		
		
	}
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $qq = mysqli_real_escape_string($con,(strip_tags($_REQUEST['qq'], ENT_QUOTES)));
          $c = mysqli_real_escape_string($con,(strip_tags($_REQUEST['c'], ENT_QUOTES)));
		 $aColumns = array('investigador');//Columnas de busqueda
		 $sTable = "investigadores_proyecto, miembros";
		 $sWhere = "WHERE codigo_proyecto=".$c."";
		if ( $_GET['c'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= "miembros.id=investigadores_proyecto.investigador and codigo_proyecto='".$c."' OR";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		$sWhere.=" order by investigador";
		include 'pagination.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 10; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = './miembros.php';
		//main query to fetch the data
		$sql="SELECT investigadores_proyecto.rol as roll, miembros.id, miembros.nombre  FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			
			?>
			<div class="table-responsive">
			  <table class="table">
				<tr  class="info">
					<th>#</th>
					<th>Nombre del inestigador</th>
					<th>Rol</th>
					<?php if($_SESSION['prol']=="administrador" || $_SESSION['prol']=="coordinador"){?>
					<th>Accion</th>
					<?php } ?>
				</tr>
				<?php
				$count=1;
				while ($row=mysqli_fetch_array($query)){
						$id=$row['id'];
						$nombre=$row['nombre'];
						$rol=$row['roll'];
						
					?>
				
					<tr>
						<td><?php echo $count++; ?></td>
						<td><?php echo $nombre; ?></td>
						<td><?php echo $rol; ?></td>
						<?php if($_SESSION['prol']=="administrador" || $_SESSION['prol']=="coordinador"){?>
						<td><button type="button" class="btn btn-info"  onclick="eliminar(<?php echo $id; ?>);">
             <span class="icon-bin"></span>
            </button></td>
        <?php } ?>
					</tr>
					<?php
					if($rol=='Inv Principal'){
						?>
<style type="text/css">.inp{display: none;}</style>
						<?php
					}
					 
				}
				?>
				<tr>
					<td colspan=7><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}
	}
?>