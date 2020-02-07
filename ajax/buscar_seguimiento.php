<?php
	/* Connect To Database*/
	require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
	require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
	
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if (isset($_GET['id'])){
		$idd=intval($_GET['id']);
			if ($delete1=mysqli_query($con,"DELETE FROM grupos WHERE id='".$idd."'")){
			?>
			<div class="alert alert-success alert-dismissible" role="alert">
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
          $ce = mysqli_real_escape_string($con,(strip_tags($_REQUEST['ce'], ENT_QUOTES)));
		 $aColumns = array('nombre');//Columnas de busqueda
		 $sTable = "seguimientos";
		 $sWhere = "WHERE codigo_proyecto=".$ce."";
		if ( $_GET['ce'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= "codigo_proyecto='".$ce."' OR";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		$sWhere.=" order by nombre";
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
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $offset,$per_page";
		$query = mysqli_query($con, $sql);
		//loop through fetched data
		if ($numrows>0){
			
			?>
			<div class="table-responsive">
			  <table class="table">
				<tr  class="info">
					<th>#</th>
					<th>Nombre del seguimiento</th>
					<th>Descripcion</th>
						<th>Tipo</th>
					
				</tr>
				<?php
				$count=1;
				while ($row=mysqli_fetch_array($query)){
						$id=$row['id'];
						$nombre=$row['nombre'];
						$tipo=$row['tipo'];
						$documento=$row['documento'];
						$descripcion=$row['descripcion'];
						
						
					?>
				
					<tr>
						
						<td><?php echo $count++; ?></td>
						<td><a href="javascript:void('<?php echo $documento; ?>');" download="dgdgfg" onclick="window.open('seguimientos/<?php echo $documento; ?>')"><?php echo $nombre; ?></a></td>
						<td><?php echo $descripcion; ?></td>
						<td><?php echo $tipo; ?></td>
					
					</tr>
					<?php
					
				}
				?>
				<tr>

					
						<td colspan="7"><span class="pull-right">	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button></span></td>
					<td colspan=7><span class="pull-right"><?
					 echo paginate($reload, $page, $total_pages, $adjacents);
					?></span></td>
				</tr>
			  </table>
			</div>
			<?php
		}else{
			echo "  No hay ningun entregable";
		}
	}
?>