<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registro de asistencia</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="<?php echo RUTA . 'assets/'; ?>css/snackbar.min.css">
    <link href="<?php echo RUTA . 'assets/index/'; ?>css/styles.css" rel="stylesheet" />
    <style>
        body:before {
            display: none;
        }
    </style>
</head>

<body style="display: flex;  justify-content: center; align-items: center; background-color: black !important;">
    <div class="text-white">
        <div class="container-fluid">
            <div class="widget" style="margin: auto !important; padding-bottom: 1em;">
                <div class="fecha">
                    <p id="diaSemana" class="diaSemana"></p>
                    <p id="dia" class="dia"></p>
                    <p>de </p>
                    <p id="mes" class="mes"></p>
                    <p>del </p>
                    <p id="year" class="year"></p>
                </div>
                <div class="reloj">
                    <p id="horas" class="horas"></p>
                    <p>:</p>
                    <p id="minutos" class="minutos"></p>
                    <p>:</p>
                    <div class="caja-segundos">
                        <p id="segundos" class="segundos"></p>
                        <p id="ampm" class="ampm"></p>
                    </div>
                </div>
                <style>
                    .icono:hover path {
                        fill: #555; /* Cambia el color a plomo cuando pasa el cursor sobre el ícono */
                    }
                </style>

                <a class="d-flex gap-2 justify-content-center align-items-center" href="plantilla.php?pagina=login">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="height: 30px; width: 30px; margin-top: 10px;" class="bi bi-person-rolodex icono text-white" viewBox="0 0 16 16">
                        <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                        <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1z" />
                    </svg>
                </a>

            </div>
            <h1 class="fst-italic lh-1 ">Control de Asistencia</h1>
            <p class="">Monitoreo de asistencia de practicantes preprofesionales</p>
           
            <form id="contactForm" autocomplete="off">
            <div class="d-flex gap-2 justify-content-center align-items-center mb-2" style="color: #000080;">
                <label>
                    <input type="radio" name="radio" value="entrada" checked />
                    <span>Ingreso</span>
                </label>
                <label>
                    <input type="radio" name="radio" value="salida" />
                    <span>Salida</span>
                </label>
            </div>
                <!-- Email address input-->
                <div class="row input-group-newsletter">
                    <div class="col"><input class="form-control" id="codigo" name="codigo" type="text" placeholder="Ingrese código" /></div>
                    <div class="col-auto"><button class="btn btn-primary" id="submitButton" type="submit">Registrar</button></div>
                </div>

                <!-- Social Icons-->
                <div class="social-icons">
                    <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?php echo RUTA . 'assets/'; ?>js/snackbar.min.js"></script>
    <script src="<?php echo RUTA . 'assets/'; ?>js/axios.min.js"></script>
    <script>
          const ruta = '<?php echo RUTA; ?>';

        function message(tipo, mensaje) {
            
            Snackbar.show({
             text: mensaje,
             pos: 'top-right',
             backgroundColor: tipo == 'success' ? '#079F00' : '#FF0303',
            actionText: 'Cerrar'
            });
        }
    </script>
    <script src="<?php echo RUTA . 'assets/index/'; ?>js/scripts.js"></script>
</body>
</html>
