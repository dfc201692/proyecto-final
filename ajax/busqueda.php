
<?php
include('../clase_conexion.php');
if($_POST){

$q=$_POST['palabra']; //se recibe la cadena que queremos buscar
$sql_res=mysql_query("select * from proyecto where nombre_proyecto like '%$q%'");
while($row=mysql_fetch_array($sql_res)){
$id=$row['id'];
$nombre=$row['nombre_proyecto'];
$codigo=$row['codigo'];


?>
<a href="info_proyeto.php?id=<?php echo $codigo; ?>" style="text-decoration:none;" > <!--Recuperamos el id para pasarlo a otra pagina -->
<div class="display_box" align="left">
<div style="float:left; margin-right:6px;"><?php ?></div> <!--Colocamos la foto Recuperada de la bd -->
<div style="margin-center:6px;"><b><?php echo $nombre; ?></b></div> <!--Recuperamos el nombre recuperado de la bd -->
<div style="margin-right:6px; font-size:14px;" class="desc"><?php echo $codigo; ?></div></div> <!--Recuperamos la direccion recuperada de la bd -->
</a>

<?php
}

}
else
{

}

?>


