<?php
$mysqli = new mysqli("localhost","root","", "proyecto");

if($mysqli -> connect_errno){
echo "BD".$mysqli->connect_error;
}

 $query = mysqli_query($mysqli, "SELECT * FROM `proyecto` WHERE codigo='sfdsd'"); 
    $result = mysqli_fetch_array($query); 
    echo $result['id'];
	
	?>