<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Control de asistencia</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?php echo RUTA . 'assets/'; ?>vendor/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo RUTA . 'assets/'; ?>vendor/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo RUTA . 'assets/'; ?>css/style.css">
  <link rel="stylesheet" href="<?php echo RUTA . 'assets/'; ?>css/full-calendar.css">
  <link rel="stylesheet" href="<?php echo RUTA . 'assets/'; ?>vendor/DataTables/datatables.min.css">
  
  <link rel="stylesheet" href="<?php echo RUTA . 'assets/'; ?>css/snackbar.min.css">
  <link rel="stylesheet" href="<?php echo RUTA . 'assets/'; ?>css/jquery-ui.min.css">
  
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo RUTA . 'assets/'; ?>images/logo.png" />
</head>
<body>
  <div class="container-scroller d-flex">
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Panel</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="plantilla.php">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Inicio</span>
            <div class="badge badge-info badge-pill"></div>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Secciones</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-domain menu-icon"></i>
            <span class="menu-title">Administración</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="?pagina=usuarios">Usuarios</a></li>
              <li class="nav-item"> <a class="nav-link" href="?pagina=configuracion">Configuracion</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pagina=carreras">
            <i class="mdi mdi-school menu-icon"></i>
            <span class="menu-title">Carreras</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pagina=niveles">
            <i class="mdi mdi-tag menu-icon"></i>
            <span class="menu-title">Niveles</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pagina=estudiantes">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">Estudiantes</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pagina=asistencia">
            <i class="mdi mdi-calendar menu-icon"></i>
            <span class="menu-title">Asistencia</span>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
  <!-- partial:./partials/_navbar.html -->
  <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="mdi mdi-menu"></span>
      </button>
      <div class="navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="plantilla.php"><img src="<?php echo RUTA . 'assets/'; ?>images/logo.png" width="60" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="plantilla.php"><img src="<?php echo RUTA . 'assets/'; ?>images/logo.png" width="30" alt="logo"/></a>
      </div>
      <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1" style="margin-left: -17px;">Sistema de Control de Asistencia</h4> <!-- Ajusta el margen izquierdo negativo según sea necesario -->
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item">
          <div id="clock" class="font-weight-bold d-none d-xl-block"></div>
        </li>
</ul>

<script>
    function updateClock() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
        var day = now.getDate();
        var month = now.getMonth() + 1;
        var year = now.getFullYear();

        // Añadir ceros a la izquierda si es necesario
        hours = padZero(hours);
        minutes = padZero(minutes);
        seconds = padZero(seconds);
        month = padZero(month);
        day = padZero(day);

        var clock = document.getElementById('clock');
        clock.textContent = hours + ':' + minutes + ':' + seconds + ' - ' + day + '/' + month + '/' + year;
        }
            function padZero(num) {
              return (num < 10 ? '0' : '') + num;
            }
             // Actualizar cada segundo
            setInterval(updateClock, 1000);
             // Llamar a la función para mostrar la hora actual
            updateClock();
          </script>

          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <input type="text" id="buscarEstudiante" class="form-control" placeholder="Buscar..." aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
           <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
         <i class="fas fa-user-tie"></i> <!-- Icono de usuario -->
         <span class="nav-profile-name"><?php echo $_SESSION['nombre']; ?></span>
         </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
         <a class="dropdown-item" href="#" onclick="salir()">
        <i class="fas fa-sign-out-alt"></i> <!-- Icono de cerrar sesión -->
        &nbsp; Cerrar Sesión <!-- Espacio entre el icono y el texto -->
        </a>
           </div>
           </li>
      </ul>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
  