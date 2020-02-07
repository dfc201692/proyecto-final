<?php session_start();
  if (!isset($_SESSION['id_user'])) {
        header("location: login.php");
    exit;
  }

   if (isset($_SESSION['id_user']) and $_SESSION['prol']=="Inv Principal") {
        header("location: index.php");
    exit;
  }
  if (isset($_SESSION['id_user']) and $_SESSION['prol']=="Coinvestigador") {
        header("location: index.php");
    exit;
  }
   if (isset($_SESSION['id_user']) and $_SESSION['prol']=="coordinador") {
        header("location: p_coordinador.php");
    exit;
  }
  if (isset($_SESSION['id_user']) and $_SESSION['prol']=="administrador") {
        header("location: index.php");
    exit;
  }
   if (isset($_SESSION['id_user']) and $_SESSION['prol']=="estudiante") {
        header("location: index.php");
    exit;
  }
  /* Connect To Database*/
  require_once ("config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
  require_once ("config/conexion.php");//Contiene funcion que conecta a la base de datos
?>