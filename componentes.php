<?php
// HEAD
$HEAD =
'
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/cara.png" type="image/x-icon">
    <link rel="stylesheet" href="css/8_0_1_normalize.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap_5_3_0_min.css">
    <link rel="stylesheet" href="css/getbootstrap.com_docs_5.3_assets_css_docs.css">
    <link rel="stylesheet" href="css/menu.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
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
// imgenes
$CHECK = '
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
viewBox="0 0 53.22 49.72" style="enable-background:new 0 0 53.22 49.72;" xml:space="preserve">
<style type="text/css">
    .st0{opacity:0.4;fill:#ACABB2;}
    .st1{fill:#ED9502;}
    .st2{fill:#FFFFFF;}
    .st3{opacity:0.08;fill:#FFFFFF;}
</style>
<g id="XMLID_00000083783220543813038690000005350770967306699676_">
    <path id="XMLID_00000030446056605237924850000008037602890752380078_" class="st0" d="M48.48,49.72H9.44
        c-2.62,0-4.74-2.12-4.74-4.74V9.31c0-2.62,2.12-4.74,4.74-4.74h39.04c2.62,0,4.74,2.12,4.74,4.74v35.67
        C53.22,47.6,51.1,49.72,48.48,49.72z"/>
    <path id="XMLID_00000123412537442126084460000011878613825081909908_" class="st1" d="M44.51,45.16H4.01C1.8,45.16,0,43.36,0,41.15
        V4.01C0,1.8,1.8,0,4.01,0h40.5c2.22,0,4.01,1.8,4.01,4.01v37.13C48.53,43.36,46.73,45.16,44.51,45.16z"/>
    <g id="XMLID_00000056429604082673223140000000840414866273872296_">
        <path id="XMLID_00000075873450607987156450000014579037080408105358_" class="st2" d="M21.23,36.86c-0.87,0-1.72-0.35-2.34-0.97
            l-7.53-7.53c-1.29-1.29-1.29-3.38,0-4.68c1.29-1.29,3.38-1.29,4.67,0l4.89,4.89l12.86-16.35c1.13-1.44,3.21-1.68,4.64-0.56
            c1.44,1.13,1.68,3.21,0.56,4.64L23.83,35.6c-0.58,0.74-1.46,1.2-2.4,1.26C21.36,36.86,21.29,36.86,21.23,36.86z"/>
    </g>
    <path id="XMLID_00000070118222798841257900000008049771934165496988_" class="st3" d="M38.82,22.58c0,8.04-6.52,14.55-14.55,14.55
        c-8.04,0-14.55-6.52-14.55-14.55c0-8.04,6.52-14.55,14.55-14.55C32.3,8.02,38.82,14.54,38.82,22.58z"/>
</g>
</svg>';

$BUSCA = '
<svg id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 199.03 117.81">
        <defs>
            <style>
            .cls-1, .cls-2, .cls-3 {
                fill: #fff;
            }

            .cls-4 {
                letter-spacing: -.01em;
            }

            .cls-5 {
                letter-spacing: -.01em;
            }

            .cls-6 {
                fill: #ed9502;
            }

            .cls-7 {
                letter-spacing: -.03em;
            }

            .cls-8 {
                letter-spacing: -.03em;
            }

            .cls-9, .cls-10 {
                fill: #ee8c28;
            }

            .cls-10 {
                opacity: .15;
            }

            .cls-11 {
                letter-spacing: -.03em;
            }

            .cls-12 {
                letter-spacing: -.03em;
            }

            .cls-13 {
                letter-spacing: 0em;
            }

            .cls-14 {
                letter-spacing: -.03em;
            }

            .cls-2 {
                font-family: Rubik-LightItalic, Rubik;
                font-size: 20.54px;
                font-weight: 300;
            }

            .cls-2, .cls-3 {
                font-style: italic;
            }

            .cls-15 {
                letter-spacing: -.02em;
            }

            .cls-3 {
                font-family: Rubik-BoldItalic, Rubik;
                font-size: 17.62px;
                font-weight: 700;
            }
            </style>
        </defs>
        <g>
            <g>
            <g>
                <g>
                <g>
                    <path class="cls-9" d="m122.88.87c-1.65-1.16-5.33-1.16-11.59-.02-9.76,1.78-15.3,4.71-15.36,4.74l-.45.24.5.09c13.37,2.43,20.35,1.92,24,.77,1.59-.51,2.55-1.14,3.12-1.7.7-.69,1.03-1.51.91-2.25-.14-.83-.51-1.44-1.13-1.88Z"/>
                    <path class="cls-10" d="m119.99,6.69c1.59-.51,2.55-1.14,3.12-1.7.7-.69,1.03-1.51.91-2.25-.06-.33-.15-.63-.28-.89-1.22,7.65-28.24,3.98-28.24,3.98l.5.09c13.37,2.43,20.35,1.92,24,.77Z"/>
                </g>
                <g>
                    <path class="cls-9" d="m71.62,3.88c1.5-1.34,5.16-1.78,11.51-1.37,9.9.63,15.75,2.89,15.81,2.92l.48.19-.49.15c-13,3.98-19.99,4.29-23.74,3.56-1.64-.32-2.66-.83-3.3-1.32-.77-.6-1.2-1.38-1.16-2.12.04-.84.33-1.49.9-2Z"/>
                    <path class="cls-10" d="m75.18,9.32c-1.64-.32-2.66-.83-3.3-1.32-.77-.6-1.2-1.38-1.16-2.12.02-.34.07-.64.17-.92,2.1,7.46,28.51.65,28.51.65l-.49.15c-13,3.98-19.99,4.29-23.74,3.56Z"/>
                </g>
                <rect class="cls-9" x="95.48" y="5.33" width="3.93" height="9.47"/>
                </g>
                <path class="cls-9" d="m64.16,35.78h66.57c-5.26-13.24-18.17-22.6-33.28-22.6s-28.03,9.36-33.28,22.6Z"/>
            </g>
            <path class="cls-9" d="m61.86,44.73c0,19.65,15.93,35.58,35.58,35.58s35.58-15.93,35.58-35.58c0-1.87-.15-3.7-.42-5.49H62.29c-.28,1.79-.42,3.62-.42,5.49Z"/>
            <circle class="cls-9" cx="60.44" cy="48.37" r="9.12"/>
            <circle class="cls-9" cx="134.01" cy="48.37" r="9.12"/>
            <ellipse class="cls-1" cx="97.45" cy="58.3" rx="2.93" ry=".93"/>
            <g>
                <path class="cls-1" d="m91.27,53.31c.52-1.02.81-2.18.81-3.4,0-4.19-3.39-7.58-7.58-7.58s-7.58,3.39-7.58,7.58c0,1.22.3,2.38.81,3.4h13.53Z"/>
                <path class="cls-1" d="m116.64,53.31c.52-1.02.81-2.18.81-3.4,0-4.19-3.39-7.58-7.58-7.58s-7.58,3.39-7.58,7.58c0,1.22.3,2.38.81,3.4h13.53Z"/>
            </g>
            </g>
            <path class="cls-1" d="m91.37,65.1c1.11,2.11,3.31,3.55,5.86,3.55s4.75-1.44,5.86-3.55l-5.86-.83-5.86.83Z"/>
        </g>
        <rect class="cls-6" y="57.04" width="199.03" height="60.77" rx="4.94" ry="4.94"/>
        <text class="cls-3" transform="translate(13.71 81.71)"><tspan x="0" y="0">BUS</tspan><tspan class="cls-5" x="37.42" y="0">C</tspan><tspan class="cls-8" x="49.6" y="0">A</tspan><tspan class="cls-15" x="61.88" y="0"> </tspan><tspan class="cls-8" x="65.22" y="0">A</tspan><tspan x="77.5" y="0" xml:space="preserve"> DINAMICO</tspan></text>
        <text class="cls-2" transform="translate(9.22 105.41)"><tspan x="0" y="0">JU</tspan><tspan class="cls-13" x="26.81" y="0">E</tspan><tspan class="cls-4" x="38.85" y="0">G</tspan><tspan class="cls-7" x="52.2" y="0">A</tspan><tspan class="cls-11" x="64.98" y="0"> </tspan><tspan class="cls-12" x="69.69" y="0">Y</tspan><tspan class="cls-14" x="81.99" y="0"> </tspan><tspan x="86.88" y="0">APRENDE</tspan></text>
        </svg>';


?>