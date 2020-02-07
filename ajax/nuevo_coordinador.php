<?php
	
		if (empty($_POST['password'])){
			$errors[] = "Password vacío";
		} elseif (empty($_POST['ppassword'])){
			$errors[] = "Repetir password vacío";
		}  elseif (empty($_POST['coordinador'])) {
            $errors[] = "cordinador vacío";
        } elseif (empty($_POST['password']) || empty($_POST['ppassword'])) {
            $errors[] = "Contraseñas vacías";
        } elseif ($_POST['ppassword'] !== $_POST['password']) {
            $errors[] = "la contraseña y la repetición de la contraseña no son lo mismo";
        } elseif (
			!empty($_POST['password'])
			&& !empty($_POST['ppassword'])
			&& !empty($_POST['coordinador'])
            && ($_POST['ppassword'] === $_POST['password'])
        ) {
            require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
			require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
			
				// escaping, additionally removing everything that could be (html/javascript-) code
                $coordinador = mysqli_real_escape_string($con,(strip_tags($_POST["coordinador"],ENT_QUOTES)));
				$password = mysqli_real_escape_string($con,(strip_tags($_POST["password"],ENT_QUOTES)));
				$date_added=date("Y-m-d H:i:s");
                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
	
					
                // check if user or email address already exists
                $sql = "SELECT * FROM usuarios WHERE username = '" . $coordinador . "';";
                $query_check_user_name = mysqli_query($con,$sql);
				$query_check_user=mysqli_num_rows($query_check_user_name);
                if ($query_check_user == 1) {
                    $errors[] = "Lo sentimos , el nombre de usuario ya está en uso.";
                } else {
					// write new user's data into database
                    $sql = "INSERT INTO usuarios (username, password, rol, codigo_proyecto)
                            VALUES('".$coordinador."','".md5($password)."','coordinador', 'null');";
                    $query_new_user_insert = mysqli_query($con,$sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        $messages[] = "El coordinador ha sido creada con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                }
            
        } else {
            $errors[] = "Un error desconocido ocurrió.";
        }
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-info" role="alert">
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