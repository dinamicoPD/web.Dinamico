<?php
// HEAD
$HEAD =
'
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Dinámico pedagogía y diseño">
    <meta property="og:description" content="Somos un grupo educativo especializado en crear recursos lúdicos para fortalecer la educación preescolar, básica y media. Además, colaboramos con instituciones educativas a través de actividades transversales en diversas áreas.">
    <meta property="og:image" content="https://dinamicopd.com/img/libroMaterial@3x.png">
    <meta name="author" content="Dinámico pedagogía y diseño">
    <meta name="copyright" content="© 2023 Dinámico pedagogía y diseño">
    <meta name="description" content="Somos un equipo de profesionales pedagógicos, diseñadores gráficos y asesores comerciales altamente calificados en educación. Nos especializamos en crear productos, actividades y servicios lúdicos para mejorar el aprendizaje en preescolar, primaria y secundaria. Trabajamos en estrecha colaboración con instituciones educativas, ofreciendo actividades transversales en diversas áreas.">
    <meta name="robots" content="index, follow">
    <meta name="geo.position" content="5.569915;-73.330243">
    <link rel="icon" href="img/cara.png" type="image/x-icon">
    <link rel="stylesheet" href="css/8_0_1_normalize.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap_5_3_0_min.css">
    <link rel="stylesheet" href="css/getbootstrap.com_docs_5.3_assets_css_docs.css">
    <link rel="stylesheet" href="css/menu.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="css/aos.css" type="text/css">
    <link rel="stylesheet" href="css/btnWPP.css">
    <script src="js/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_js_bootstrap.bundle.min.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-MFEVX8WHHG"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag("js", new Date());

    gtag("config", "G-MFEVX8WHHG");
    </script>
';

// MENU
$MENU =
'
<header>
    <nav class="navbar navbar-expand-lg bg-transparent navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand logoMenu" href="index.php"><img src="img/logo_blanco.png" alt="Dinámico pedagogía y diseño"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="linea"></div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbarNav">
                <li class="nav-item" id="m1">
                    <a class="nav-link menuFont" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item" id="m2">
                    <a class="nav-link menuFont" aria-current="page" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item" id="m3">
                    <a class="nav-link tienda" aria-current="page" href="mantenimiento.php">Tienda</a>
                </li>
                <li class="nav-item" id="m4">
                    <a class="nav-link menuFont" aria-current="page" href="beneficios.php">Beneficios</a>
                </li>
                <li class="nav-item dropdown" id="m5">
                    <label class="nav-link dropdown-toggle menuFont" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</label>
                    <ul class="dropdown-menu submenu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a href="festivales.php" class="dropdown-item">Festivales</a></li>
                        <li><a href="libros.php" class="dropdown-item">Libros</a></li>
                        <li><a href="juegos.php" class="dropdown-item">Juegos</a></li>
                    </ul>
                </li>
            </ul>
            <span class="navbar-text">
                <button type="button" data-bs-toggle="modal" data-bs-target="#plataformaModal" class="btnPlataforma">Plataforma</button>
            </span>
          </div>
        </div>
      </nav>
</header>
<!-- Modal Plataforma-->
<div class="modal fade" id="plataformaModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="SlideModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content sesionModal">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="SlideModalLabel"><img class="inicioTitulo" src="img/bienvenido@3x.png" alt=""></h1>
            <button type="button" class="inicioClose hover" data-bs-dismiss="modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.65 27.23"><defs><style>.btnClose-1{fill:#f7746d;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="btnClose-1" d="M7.55,13.65C5.4,9.5.52,2.05.58,1.27.58,1,7.76.11,8.39.11S13,7.93,13.32,8.5C13.59,8.09,18.2.06,18.52,0s8.18,1.05,8.13,1.31c-.42,1.36-4.41,7.92-7.14,12,2.15,4.25,6.67,12,6.67,12.69-.06.37-7.24,1.26-7.87,1.26s-4.36-7.66-5-8.76c-.73,1.16-4.87,8.6-5.14,8.6S0,26,0,25.71C.37,24.5,4.56,18,7.55,13.65Z"/></g></g></svg>
            </button>
        </div>
        <div class="modal-body">
            <a class="btnRegistro_1 botonesDP" href="moodle/" target="_blank">Iniciar sesión</a>
            <br>
            <button type="button" data-bs-toggle="modal" data-bs-target="#perfilModal" class="btnRegistro_2 botonesDP">Registro</button>
            <br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btnCerrar hover" data-bs-dismiss="modal">Cerrar</button>
        </div>
    </div>
    </div>
</div>
<!-- Modal Perfil-->
<div class="modal fade" id="perfilModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="SlideModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content sesionModal">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="SlideModalLabel"><img class="inicioTitulo" src="img/bienvenido@3x.png" alt=""></h1>
            <button type="button" class="inicioClose hover" data-bs-dismiss="modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.65 27.23"><defs><style>.btnClose-1{fill:#f7746d;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="btnClose-1" d="M7.55,13.65C5.4,9.5.52,2.05.58,1.27.58,1,7.76.11,8.39.11S13,7.93,13.32,8.5C13.59,8.09,18.2.06,18.52,0s8.18,1.05,8.13,1.31c-.42,1.36-4.41,7.92-7.14,12,2.15,4.25,6.67,12,6.67,12.69-.06.37-7.24,1.26-7.87,1.26s-4.36-7.66-5-8.76c-.73,1.16-4.87,8.6-5.14,8.6S0,26,0,25.71C.37,24.5,4.56,18,7.55,13.65Z"/></g></g></svg>
            </button>
        </div>
        <div class="modal-body">
            <a class="btnRegistro_1 botonesDP" href="moodle/dinapage/LoginSTD.php" target="_blank">Estudiante</a>
            <br>
            <a class="btnRegistro_2 botonesDP" href="moodle/dinapage/PreRegistroDocente.php" target="_blank">Docente</a>
            <br>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btnCerrar hover" data-bs-dismiss="modal">Cerrar</button>
        </div>
    </div>
    </div>
</div>
<div class="margen"></div>
';
// footer
$FOOTER ='
<footer>
    <div id="F_1">
        <div id="F_2">
            <div id="F_4"><img data-aos="zoom-out-down" data-aos-duration="300" data-aos-offset="300"
     data-aos-easing="ease-in-sine" src="img/nino_footer@3x.png" alt=""></div>
            <div id="F_5" class="bordeMesa"></div>
        </div>
        <div id="F_3">
            <div id="F_6">
                <div class="mapaPc"></div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d834.7962523888261!2d-73.33095007522928!3d5.569593751328263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7c78d0f43843%3A0xef1f8332ba7915e6!2sGreen%20Hills%20Tunja!5e0!3m2!1ses!2sco!4v1694208179177!5m2!1ses!2sco" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div id="F_7">
                <div id="F_8" class="bordeMesa">
                    <p> 
                    <a href="https://www.instagram.com/dinamicopd/"><img src="img/instagram@3x.png" alt="">&nbsp;&nbsp;dinamicopd</a><br>
                        <a href="https://www.youtube.com/@DinamicoPedagogiayDiseno"><img src="img/youtube@3x.png" alt="">&nbsp;&nbsp;Dinámico Pedagogía y Diseño</a><br>
                        <a href=""><img src="img/wpp@3x.png" alt="">&nbsp;&nbsp;+57 312 300 0100  -  +57  312 301 0101</a><br>
                        <a href=""><img src="img/email@3x.png" alt="">&nbsp;&nbsp;dinamicopdadm@gmail.com</a>
                    </p>
                </div>
                <div id="F_9" class="bordeMesa">
                    <img src="img/carpetaFooter.png" alt="">
                </div>
                <div id="F_10" class="row justify-content-center align-items-center">
                    <div class="franjaMesa"></div>
                    <div class="col text-center">
                        <img onclick="scrollToTop()" src="img/logo_blanco.png" alt="Dinámico pedagogía y diseño" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="js/ajax.googleapis.com_ajax_libs_jquery_1.6.2_jquery.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/aos.js"></script>
<script>
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }
    $(document).ready(function() {
        AOS.init();
    });
</script>
';

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
                fill: #A7DB77;
            }

            .cls-7 {
                letter-spacing: -.03em;
            }

            .cls-8 {
                letter-spacing: -.03em;
            }

            .cls-9, .cls-10 {
                fill: #A7DB77;
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

$BOTONWPP_HOME = '
<div class="contenedorWPP">
    <input type="checkbox" name="btnWpp" id="btnWpp">
    <div class="agentesWPP">
        <p><strong>Hola Dinamigo!!!</strong>
        <br>Si necesitas ayuda consulta con alguno de nuestros agentes.</p>
        <ul>
            <li>
                <a href="https://wa.me/+573123000100?text=Hola,%20necesito%20tu%20ayuda!!!" target="_blank">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/></svg>
                    </i>
                    Servicio al cliente 1
                </a>
            </li>
            <li>
                <a href="https://wa.me/+573123010101?text=Hola,%20necesito%20tu%20ayuda!!!" target="_blank">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/></svg>
                    </i>
                    Servicio al cliente 2
                </a>
            </li>
            <li>
                <a href="https://wa.me/+573173785250?text=Hola,%20necesito%20tu%20ayuda!!!" target="_blank">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/></svg>
                    </i>
                    Servicio al cliente 3
                </a>
            </li>
            <li>
                <a href="https://wa.me/+573144705547?text=Hola,%20necesito%20tu%20ayuda!!!" target="_blank">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/></svg>
                    </i>
                    Soporte técnico
                </a>
            </li>
        </ul>
    </div>
    <label for="btnWpp" class="hover">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
        </svg>
    </label>
</div>
';
?>