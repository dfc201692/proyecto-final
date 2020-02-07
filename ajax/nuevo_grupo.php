<?php
	if (empty($_POST['grupo'])) {
           $errors[] = "Nombre vacío";
        } else if (!empty($_POST['grupo'])){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$grupo=mysqli_real_escape_string($con,(strip_tags($_POST["grupo"],ENT_QUOTES)));
		$programa=mysqli_real_escape_string($con,(strip_tags($_POST["programa"],ENT_QUOTES)));

		$sql2 = "SELECT * FROM grupos WHERE nombre_grupo = '" . $grupo . "';";
                $query_check_user_name = mysqli_query($con,$sql2);
				$query_check_user=mysqli_num_rows($query_check_user_name);
                if ($query_check_user == 1) {
                    $errors[] = "Lo sentimos , el nombre del grupo  ya está en uso.";
                } else {
		$sql="INSERT INTO grupos (nombre_grupo, nombre_programa, estado, fecha_agregado) VALUES ('$grupo','$programa', 'activo', now())";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
				$messages[] = "Ingresado satisfactoriamente.";
				function EliminarDir($ruta)
{
	foreach(glob($ruta . "/*") as $elemento)
	{
	if(is_dir($elemento))
	{
	EliminarDir($elemento);
	}
	else{
	unlink($elemento);
	}
	}
	rmdir($ruta);
}
//EliminarDir('../ajax2');
//EliminarDir('../js2');
//EliminarDir('../config2');

			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		
	}
		} else {
			$errors []= "Error desconocido.";
		}
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-info" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>