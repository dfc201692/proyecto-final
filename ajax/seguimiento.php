<?php
if (empty($_FILES["exampleInputFile"]["name"])) {
           $errors[] = "Documento vacío";
        } else if (!empty($_FILES["exampleInputFile"]["name"])){
		/* Connect To Database*/
		require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
		require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
		// escaping, additionally removing everything that could be (html/javascript-) code
		$codigo=mysqli_real_escape_string($con,(strip_tags($_GET["cd"],ENT_QUOTES)));
		$cdd=mysqli_real_escape_string($con,(strip_tags($_GET["cdd"],ENT_QUOTES)));
		$nomb=mysqli_real_escape_string($con,(strip_tags($_GET["nom"],ENT_QUOTES)));
			$descripcion=mysqli_real_escape_string($con,(strip_tags($_GET["descripcion"],ENT_QUOTES)));
		$tipo=mysqli_real_escape_string($con,(strip_tags($_GET["tip"],ENT_QUOTES)));
			$target_dir="../seguimientos/";
				$image_name = time()."_".basename($_FILES["exampleInputFile"]["name"]);
				$target_file = $target_dir . $image_name;
				$imageFileZise=$_FILES["exampleInputFile"]["size"];

		$sql="INSERT INTO seguimientos (codigo_proyecto, documento, nombre, tipo, descripcion) VALUES ('$cdd', '$image_name', '$nomb', '$tipo','$descripcion')";
		$query_new_insert = mysqli_query($con,$sql);
			if ($query_new_insert){
					move_uploaded_file($_FILES["exampleInputFile"]["tmp_name"], $target_file);
				$messages[] = "Ingresado satisfactoriamente.";
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
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