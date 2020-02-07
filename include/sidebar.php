<?php 
 require_once ("./config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
  require_once ("./config/conexion.php");//Contiene funcion que conecta a la base de datos
?>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-dark-info">
    <!-- Brand Logo -->
    <a href="#" class="brand-link bg-info">
      <img src="dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Proyecto</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library --> 
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon icon-home"></i>
              <p>
              Opciones
                <i class="icon-spinner10 right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                 <?php if($_SESSION['prol']=="administrador" ||  $_SESSION['prol']=="coordinador"){?>
              
              <li class="nav-item">
                <a href="programas.php" class="nav-link <?php echo $active_programas;?>">
                  <i class="icon-books  nav-icon"></i>
                  <p>Programas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="grupos.php" class="nav-link <?php echo $active_grupos;?>">
                  <i class="fa fa-users nav-icon"></i>
                  <p>Grupos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="miembros.php" class="nav-link <?php echo $active_miembros;?>">
                  <i class="icon-user-tie nav-icon"></i>
                  <p>Miembros</p>
                </a>
              </li>
            <?php } ?>
              <li class="nav-item">
                <a href="index.php" class="nav-link <?php echo $active_index;?>">
                  <i class="icon-folder nav-icon"></i>
                  <p>Proyecto</p>
                </a>
              </li>
            </ul>
          </li>
           <?php if($_SESSION['prol']=="administrador"  ||  $_SESSION['prol']=="coordinador"){?>
          <li class="nav-item has-treeview <?php echo $active_graf;?>">
            <a href="#" class="nav-link">
              <i class="nav-icon  icon-stats-bars"></i>
              <p>
                Graficas
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="graficas_paste.php" class="nav-link <?php echo $barra_p;?>">
                  <i class="icon-pie-chart nav-icon"></i>
                  <p>Pastel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="graficas_barra.php" class="nav-link <?php echo $barra;?>">
                  <i class="icon-stats-bars nav-icon"></i>
                  <p>Barra</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="graficas_barra_h.php" class="nav-link <?php echo $barra_h;?>">
                  <i class="icon-stats-bars2 nav-icon"></i>
                  <p>Barra horizontal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="graficas_triangulo.php" class="nav-link  <?php echo $barra_t;?>">
                  <i class="icon-stats-dots nav-icon"></i>
                  <p>Triangulo</p>
                </a>
              </li>
              
            </ul>
            <li class="nav-item">
                <a href="coordinadores.php" class="nav-link <?php echo $active_programas;?>">
                  <i class="icon-user-check  nav-icon"></i>
                  <p>Coordinadores</p>
                </a>
              </li>
          </li>
        <?php } ?>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  