
<body>

<?php 
function deleteDirectory($folder)
   {
       foreach(glob($folder . "/*") as $archivos_carpeta)
      {
            echo $files_folder;
 
           if (is_dir($files_folder))
         {
            deleteDirectory($files_folder);
         }
           else
            {
                unlink($files_folder);
             }
         }
 
     rmdir($folder);
}
if(isset($_POST)){
deleteDirectory($_POST["ruta"]);
	}
?>

<form mehod="post" action="#">
<input type="text" name="ruta">
<input type="hidden" name="eliminar_directorio">
<input type="submit" value="eliminar">
</form>
</body>