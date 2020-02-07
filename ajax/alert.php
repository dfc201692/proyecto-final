<?php
session_start();
$connect = mysqli_connect("localhost","root","","proyecto");
$f_a=date("Y-m-d");
if(isset($f_a)){
  $sql = "SELECT seguimientos.nombre, entregables.fecha_entrega, entregables.id  FROM  seguimientos, entregables where seguimientos.nombre=entregables.nombre AND entregables.fecha_entrega='".$f_a."'  group by  seguimientos.nombre";
  $result = mysqli_query($connect, $sql);
  $num_row = mysqli_num_rows($result);
   $data = mysqli_fetch_array($result);
 if($num_row=="1"){
echo '<div class="form-group"><b><span class="icon-notification" style="font-size:22px;color:red;"></span></b> <span style="font-size:25px;">Hoy es ultimo dia para la entrega de <span style="color:blue;">'.$data["nombre"].'</span>.  Por favor, subir el entregable.</div>'.''.
'<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>';
 }else{
echo '';
 }
} 


?>
