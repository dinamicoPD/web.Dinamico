<?php
// HEAD
$HEAD =
'
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/cara.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap_5_3_0_min.css">
    <link rel="stylesheet" href="css/getbootstrap.com_docs_5.3_assets_css_docs.css">
    <script src="js/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_js_bootstrap.bundle.min.js"></script>
';
// MENU
$MENU =
'
<header>
    <nav class="navbar navbar-expand-lg bg-transparent navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand logoMenu" href="#"><img src="img/logoH.png" alt="DinamicoPD"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="linea"></div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbarNav">
                <li class="nav-item" id="m1">
                    <a class="nav-link menuFont" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item" id="m2">
                    <a class="nav-link menuFont" aria-current="page" href="#">Nosotros</a>
                </li>
                <li class="nav-item" id="m3">
                    <a class="nav-link tienda" aria-current="page" href="#">Tienda</a>
                </li>
                <li class="nav-item" id="m4">
                    <a class="nav-link menuFont" aria-current="page" href="#">Contactos</a>
                </li>
                <li class="nav-item dropdown" id="m5">
                    <label class="nav-link dropdown-toggle menuFont" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</label>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><label class="dropdown-item" for="select_21">Festivales</label></li>
                        <li><label class="dropdown-item" for="select_22">Libros</label></li>
                        <li><label class="dropdown-item" for="select_22">Juegos</label></li>
                    </ul>
                </li>
            </ul>
            <span class="navbar-text">
                <button type="button" data-bs-toggle="modal" data-bs-target="#plataformaModal" class="btnPlataforma">DINAMIC MOODLE</button>
            </span>
          </div>
        </div>
      </nav>
</header>
<!-- Modal Plataforma-->
<div class="modal fade" id="plataformaModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="SlideModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="SlideModalLabel">BIENVENIDO!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <a class="btnPlataforma" href="">Iniciar sesión</a>
            <hr>
            <button type="button" data-bs-toggle="modal" data-bs-target="#perfilModal" class="btnRegistro">Registro</button>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
    </div>
    </div>
</div>
<!-- Modal Perfil-->
<div class="modal fade" id="perfilModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="SlideModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="SlideModalLabel">SELECCIONA TIPO DE USUARIO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <a class="btnPlataforma" href="">Estudiante</a>
            <hr>
            <a class="btnRegistro" href="">Docente</a>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
    </div>
    </div>
</div>
<div class="margen"></div>
';
?>