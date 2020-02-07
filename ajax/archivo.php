	<?php
				/* Connect To Database*/
				require_once ("../config/db.php");
				require_once ("../config/conexion.php");
				if (isset($_FILES["imagefile"])){
	
				$target_dir="../seg/";
				$image_name = time()."_".basename($_FILES["imagefile"]["name"]);
				$target_file = $target_dir . $image_name;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				$imageFileZise=$_FILES["imagefile"]["size"];
				
					
				
				/* Inicio Validacion*/
				// Allow certain file formats
				if(($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx") and $imageFileZise>0) {
				$errors[]= "<p>Lo sentimos, sólo se permiten archivos pdf , doc, docx.</p>";
				}  else
			{
				
				
				
				/* Fin Validacion*/
				if ($imageFileZise>0){
					move_uploaded_file($_FILES["imagefile"]["tmp_name"], $target_file);
					$logo_update="logo_url='img/$image_name' ";
				
				}	else { $logo_update="";}
                  
			}
		}	
				
				
				
		
	?>
	<?php 
		if (isset($errors)){
	?>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Error! </strong>
		<?php
			foreach ($errors as $error){
				echo $error;
			}
		?>
		</div>	
	<?php
			}
	?>
