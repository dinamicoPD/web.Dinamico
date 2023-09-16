<?php
require_once(dirname(__FILE__).'/componentes.php');
if (isset($_GET['envioMuestra'])) {
    $variable = $_GET['envioMuestra'];
    // Hacer algo con la variable
    
    if ($variable = 'no'){
        $MENSAJEmsm = '
                    <div id="msmMuestra" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <p><strong>ERROR!!!</strong> Su correo no fue enviado por falta de validacion reCAPTCHA.</p>
                        <button class="btnPlataforma" type="button" data-bs-toggle="modal" data-bs-target="#pruebaGratis">VUELVE A ENVIAR TU CORREO</button>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    ';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $HEAD ?>
    <title>Home | Dinámico pedagogía y diseño</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/config.css" type="text/css">

    <link rel="stylesheet" href="css/carruselStyle.css" type="text/css">
    <link rel="stylesheet" href="css/homeServicios.css" type="text/css">
    <link rel="stylesheet" href="css/noticiasStyle.css" type="text/css">
    <link rel="stylesheet" href="css/materialInteractivo.css" type="text/css">
    <link rel="stylesheet" href="css/muestreagratis.css" type="text/css">
    <link rel="stylesheet" href="css/cliente.css" type="text/css">
    <link rel="stylesheet" href="css/tiendaHome.css" type="text/css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<?php echo $MENU; ?>
<script>
    var posicionMenu = document.getElementById('m1');
    posicionMenu.classList.add('menuActivo');
</script>
<section id="p1">
    <div id="carouselSlideIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
        
            <button type="button" data-bs-target="#carouselSlideIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselSlideIndicators" data-bs-slide-to="1" aria-current="true" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselSlideIndicators" data-bs-slide-to="2" aria-current="true" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselSlideIndicators" data-bs-slide-to="3" aria-current="true" aria-label="Slide 4"></button>
        
        </div>
        
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="img/plataformaFondo@3x.png" class="d-block w-100" alt="">
                <div class="carousel-caption d-md-block cont">
                    <div class="contenedorPlataforma">
                        <div id="plataforma_info">
                            <div class="texto_plataforma_1">
                                <p><img src="img/cosito@3x.png" alt=""><span>Explora</span> un mundo de conocimiento.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regístrate y comienza tu <span>Viaje</span><br>&nbsp;&nbsp;&nbsp;de <span>aprendizaje</span> con nosotros.</p>
                            </div>
                            <div class="texto_plataforma_2">
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;Ingresa con el <strong>código</strong> de tu libro<br>&nbsp;&nbsp;&nbsp;&nbsp;y código de tu clase.</p>
                            </div>
                            <div class="btn_plataforma hover" data-bs-toggle="modal" data-bs-target="#perfilModal">
                                    <div class="boxMaquina"><p class="maquina" id="nombreAleatorio"></p></div>
                                    <div class="btn_registro"><p>REGÍSTRATE</p></div>
                                    <div class="check_btn"><img src="img/check@3x.png" alt=""></div>
                            </div>
                            <div class="btn_Soporte">
                                <div id="txt_soporte"><p>¿No puedes<br>registrarte?</p></div>
                                <div id="btn_soporte" class="hover"><a href="https://wa.me/+573144705547?text=Hola,%20necesito%20tu%20ayuda!!!" target="_blank"><img src="img/btn_soporte@3x.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/fondo_libros@3x.png" class="d-block w-100" alt="">
                <div class="carousel-caption d-md-block cont">
                    <div class="contenedor_libros">
                        <a href="" class="hover">
                        <img src="img/cosito@3x.png" alt=""><span>Accede</span> a recursos educativos de calidad<br>para enriquecer tu <span>aprendizaje</span><img style="transform: scaleX(-1);" src="img/cosito@3x.png" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/fondoJuegos@3x.png" class="d-block w-100" alt="">
                <div class="carousel-caption d-md-block cont">
                    <div class="contenedor_juegos">
                        <p class="text_juegos_1" id="text_juegos_1a">Donde el <img src="img/aprendizaje_juegos@3x.png" alt=""> se</p>
                        <p class="text_juegos_1" id="text_juegos_1b">encuentra con la <img src="img/diversion_juegos@3x.png" alt=""></p>
                        <img  class="text_juegos_2" src="img/cinta@3x.png" alt="">
                        <p class="text_juegos_3">Explora una variedad de juegos educativos para todas las disciplinas: inglés, español, ciencias naturales y matemáticas. Nuestras estaciones ofrecen desafíos lingüísticos, rompecabezas topológicos, juegos aritméticos y tablero históricos. Pon a prueba tus habilidades cognitivas y diviértete mientras aprendes. ¡Únete a la diversión educativa!</p>
                        <a  class="text_juegos_4 hover" href=""><img src="img/boton_juegos@3x.png" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/festivales@3x.png" class="d-block w-100" alt="">
                <div class="carousel-caption d-md-block cont">
                    <div class="contenedorCarrusel" id="festivales">
                        <div class="fes_info">
                            <div class="fes_titulo"><p>Festivales <span>Dinamicos</span></p></div>
                            <div class="fes_subtitulo"><p><span>Aprende</span>&nbsp;&nbsp;&nbsp;y juega con nosotros.</p></div>
                            <div id="fes_matematicas" class="fes_art">
                                <div class="fes_categoria hover"><a href=""><img src="img/fes_mate@3x.png" alt="Matemáticas"></a></div>
                            </div>
                            <div id="fes_ingles" class="fes_art">
                                <div class="fes_categoria hover"><a href=""><img src="img/fes_ingles@3x.png" alt="Inglés"></a></div>
                            </div>
                            <div id="fes_sociales" class="fes_art">
                                <div class="fes_categoria hover"><a href=""><img src="img/fes_sociales@3x.png" alt="Sociales"></a></div>
                            </div>
                            <div class="fes_mas hover"><a href="#">Conoce más información aquí <img src="img/festivales_btn@3x.png" alt="Festivales"></a></div>
                        </div>
                        <div class="fes_img"></div>
                    </div>
                </div>
            </div>
                
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSlideIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSlideIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="buscaJuega">
        <?php echo $BUSCA ?>
    </div>
</section>
<section id="p2">
    <div class="sl2">
        <div class="titulo">
            <h2>Especialistas en la</h2>
            <h2>CREACIÓN DE MATERIAL EDUCATIVO</h2>
            <hr>
        </div>
        <div class="servicios">
            <div class="articulos_3">
                <article><a href=""><img class="voltereta" src="img/dinamico1.svg" alt=""><img src="img/ser_festivales@3x.png" alt=""><p><img class="servicioTexto" src="img/festivales_letras@3x.png" alt=""></p></a></article>
                <article><a href=""><img class="voltereta" src="img/dinamico2.svg" alt=""><img src="img/ser_libros@3x.png" alt=""><p><img class="servicioTexto" src="img/libros_letras@3x.png" alt=""></p></a></article>
                <article><a href=""><img class="voltereta" src="img/dinamico3.svg" alt=""><img src="img/ser_juegos@3x.png" alt=""><p><img class="servicioTexto" src="img/juegos_letras@3x.png" alt=""></p></a></article>
            </div>
        </div>
    </div>
</section>
<section id="periodico">
    <div class="contenedorNoticias">
        <div class="bordePeriodico"><br></div>
        <div class="periodico">
            <div class="encabezadoNoticias">
                <div class="logoNoticias">
                    <div class="row">
                        <div class="col">
                            <img src="img/tituloNoticias@3x.png" alt="">
                        </div>
                    </div>
                    <div class="row paralelas">
                        <div class="col">
                            <p class="info_iz">&nbsp;&nbsp;Edición semanal</p>
                        </div>
                        <div class="col">
                            <p class="info_der" style="text-align: right;">Agosto 2023&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="avisoNoticias">
                    <div class="aviso_1">
                        <img src="img/proximamente@3x.png" alt="">
                    </div>
                    <div class="aviso_2">
                        <div class="row">
                            <div class="col-9"><p>Estamos creando<br><i>nuevas pruebas saber</i><br>para Inglés. <i>¡Espéralas!</i></p></div>
                            <div class="col-3 aviso_2b"></div>
                        </div>
                    </div>
                    <div class="row aviso_3">
                        <div class="col paralelas">
                            <p class="info_der" style="text-align: right;">#001&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columnas">
                <div class="columna1">
                    <img src="img/columna1_a@3x.png" alt="">
                    <h2 class="noticiaTitulo_1">FESTIVAL DE SOCIALES</h2>
                    <p class="noticiaTxtMute">Colegio Rodolfo Llínas, Bogotá.</p>
                    <p class="noticiaTxt">El pasado martes se realizó el Festival de Sociales en la instalaciones del Colegio Rodolfo Llínas, evento en el cual se conmemoraron los 204 años de la batalla de Boyacá.</p>
                    <br>
                    <div class="comentarioNoticas">
                        <div class="fotoUser"><img src="img/comentario_F@3x.png" alt=""></div>
                        <div class="comentarioUser">
                            <p>Aprendí a cerca de la historia de mi país mientras me divertía con mis amigos.</p>
                            <i>&nbsp;&nbsp;CAMILA, 15 AÑOS.</i>
                        </div>
                    </div>
                </div>
                <div class="columna2">
                    <img src="img/colomna2_a@3x.png" alt="">
                </div>
                <div class="columna3">
                    <div class="noticia_1">
                        <div class="noticia_1_txt">
                            <p class="noticiaTitulo_2">Inscripciones abiertas</p>
                            <p class="noticiaTitulo_1">Escuela de formación</p>
                            <p class="noticiaTxt">Si quieres mejorar tus habilidades deportivas en el fútbol, Dinamic Soccer te brinda un espacio de entrenamiento para que te conviertas en un gran deportista. </p>
                            <p class="noticiaTitulo_2">¡No esperes más e inscríbete ahora!</p>
                            <div class="comentarioNoticas">
                                <div class="fotoUser"><img src="img/comentario_M@3x.png" alt=""></div>
                                <div class="comentarioUser">
                                    <p>Muy divertido, comparto mi pasión con otros deportistas y aprendo mientras fortalezco mis habilidades.</p>
                                    <i>&nbsp;&nbsp;SOFÍA, 10 AÑOS.</i>
                                </div>
                            </div>
                        </div>
                        <div class="noticia_1_img">
                            <img src="img/columna2_b@3x.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flotante flotante1"><p>Noticias<br>semanales</p></div>
    <div class="flotante flotante2"><p>Anuncios</p></div>
    <div class="flotante flotante3"><p>Novedades</p></div>
</section>
<section id="MaterialInteractivo">
    <div class="materialTitulo">
        <h2>MATERIAL INTERACTIVO EN 3 PASOS</h2>
        <h2>Diseñado para el <strong>aprendizaje</strong> autónomo</h2>
    </div>
    <div class="InteractivoArticulo">
        <article>
            <div class="materialImg"><img style="width: 100%;" src="img/libroMaterial@3x.png" alt=""></div>
            <div class="materialNumero"><img src="img/numero1.png" alt=""></div>
            <div class="txtPaso"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.09 131.88"><defs><style>.cartillas-1{fill:#f4746d;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="cartillas-1" d="M16.25,108.2a9.57,9.57,0,0,1,3.87,4.08,14.68,14.68,0,0,1,1.48,7V125H34.75v6.87H.49V119.27a15.16,15.16,0,0,1,1.38-6.77,9.51,9.51,0,0,1,3.77-4.2,10.68,10.68,0,0,1,5.45-1.4A10.66,10.66,0,0,1,16.25,108.2Zm-1.5,7.14A4.83,4.83,0,0,0,11.09,114c-3.34,0-5,1.86-5,5.59V125h10v-5.45A6,6,0,0,0,14.75,115.34Z"/><path class="cartillas-1" d="M28.22,81.5V95.14l6.53,2.26v7.21L.44,92.29v-8L34.75,72v7.27Zm-5.49,1.86-14.34,5,14.34,5Z"/><path class="cartillas-1" d="M33.87,60.51a10.62,10.62,0,0,1-3.54,4.54,9.28,9.28,0,0,1-5.45,1.72V59.41a4.77,4.77,0,0,0,3.34-1.5,5.31,5.31,0,0,0,1.23-3.71,5.71,5.71,0,0,0-1.15-3.78,3.78,3.78,0,0,0-3-1.37,3.51,3.51,0,0,0-2.51.93,6.5,6.5,0,0,0-1.54,2.33A38.71,38.71,0,0,0,20,56.17,42,42,0,0,1,18,61.59a9.47,9.47,0,0,1-2.9,3.58A8.24,8.24,0,0,1,10,66.67a9.32,9.32,0,0,1-5.3-1.52A9.75,9.75,0,0,1,1.2,60.88,15.61,15.61,0,0,1,0,54.59,13.62,13.62,0,0,1,2.58,46a9.53,9.53,0,0,1,7.19-3.66v7.56a4,4,0,0,0-2.92,1.5,5.64,5.64,0,0,0-1.16,3.71,4.79,4.79,0,0,0,1,3.21,3.75,3.75,0,0,0,3,1.2A3.07,3.07,0,0,0,12,58.59a6.66,6.66,0,0,0,1.47-2.25,39.33,39.33,0,0,0,1.3-3.81,40.31,40.31,0,0,1,2-5.45,9.81,9.81,0,0,1,2.94-3.63,8.22,8.22,0,0,1,5.16-1.52,9.76,9.76,0,0,1,5.1,1.42,10.1,10.1,0,0,1,3.76,4.18,14.25,14.25,0,0,1,1.39,6.52A16.28,16.28,0,0,1,33.87,60.51Z"/><path class="cartillas-1" d="M32.84,26.36a16.89,16.89,0,0,1-6.26,6.38,17.53,17.53,0,0,1-9.06,2.35,17.39,17.39,0,0,1-9-2.35,16.82,16.82,0,0,1-6.26-6.38A17.73,17.73,0,0,1,0,17.52,17.67,17.67,0,0,1,2.26,8.66,16.76,16.76,0,0,1,8.52,2.33a17.57,17.57,0,0,1,9-2.33,17.72,17.72,0,0,1,9.06,2.33,16.77,16.77,0,0,1,6.26,6.36,17.79,17.79,0,0,1,2.25,8.83A17.83,17.83,0,0,1,32.84,26.36ZM27.56,12.08a9.6,9.6,0,0,0-4-3.69,13.17,13.17,0,0,0-6-1.32,13,13,0,0,0-6,1.32,9.47,9.47,0,0,0-3.95,3.69,10.55,10.55,0,0,0-1.38,5.44A10.75,10.75,0,0,0,7.56,23a9.43,9.43,0,0,0,4,3.7,13,13,0,0,0,6,1.33,13.17,13.17,0,0,0,6-1.33,9.56,9.56,0,0,0,4-3.7A10.66,10.66,0,0,0,29,17.52,10.47,10.47,0,0,0,27.56,12.08Z"/></g></g></svg></div>
            <div class="btnMaterial hover"><a href=""><img src="img/btnCartillas@3x.png" alt=""></a></div>
        </article>
        <article>
            <div class="materialImg"><img style="width: 72%;"  src="img/celular@3x.png" alt=""></div>
            <div class="materialNumero"><img src="img/numero2.png" alt=""></div>
            <div class="txtPaso"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.09 131.88"><defs><style>.videos-1{fill:#A4B7FF;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="videos-1" d="M16.25,108.2a9.57,9.57,0,0,1,3.87,4.08,14.68,14.68,0,0,1,1.48,7V125H34.75v6.87H.49V119.27a15.16,15.16,0,0,1,1.38-6.77,9.51,9.51,0,0,1,3.77-4.2,10.68,10.68,0,0,1,5.45-1.4A10.66,10.66,0,0,1,16.25,108.2Zm-1.5,7.14A4.83,4.83,0,0,0,11.09,114c-3.34,0-5,1.86-5,5.59V125h10v-5.45A6,6,0,0,0,14.75,115.34Z"/><path class="videos-1" d="M28.22,81.5V95.14l6.53,2.26v7.21L.44,92.29v-8L34.75,72v7.27Zm-5.49,1.86-14.34,5,14.34,5Z"/><path class="videos-1" d="M33.87,60.51a10.62,10.62,0,0,1-3.54,4.54,9.28,9.28,0,0,1-5.45,1.72V59.41a4.77,4.77,0,0,0,3.34-1.5,5.31,5.31,0,0,0,1.23-3.71,5.71,5.71,0,0,0-1.15-3.78,3.78,3.78,0,0,0-3-1.37,3.51,3.51,0,0,0-2.51.93,6.5,6.5,0,0,0-1.54,2.33A38.71,38.71,0,0,0,20,56.17,42,42,0,0,1,18,61.59a9.47,9.47,0,0,1-2.9,3.58A8.24,8.24,0,0,1,10,66.67a9.32,9.32,0,0,1-5.3-1.52A9.75,9.75,0,0,1,1.2,60.88,15.61,15.61,0,0,1,0,54.59,13.62,13.62,0,0,1,2.58,46a9.53,9.53,0,0,1,7.19-3.66v7.56a4,4,0,0,0-2.92,1.5,5.64,5.64,0,0,0-1.16,3.71,4.79,4.79,0,0,0,1,3.21,3.75,3.75,0,0,0,3,1.2A3.07,3.07,0,0,0,12,58.59a6.66,6.66,0,0,0,1.47-2.25,39.33,39.33,0,0,0,1.3-3.81,40.31,40.31,0,0,1,2-5.45,9.81,9.81,0,0,1,2.94-3.63,8.22,8.22,0,0,1,5.16-1.52,9.76,9.76,0,0,1,5.1,1.42,10.1,10.1,0,0,1,3.76,4.18,14.25,14.25,0,0,1,1.39,6.52A16.28,16.28,0,0,1,33.87,60.51Z"/><path class="videos-1" d="M32.84,26.36a16.89,16.89,0,0,1-6.26,6.38,17.53,17.53,0,0,1-9.06,2.35,17.39,17.39,0,0,1-9-2.35,16.82,16.82,0,0,1-6.26-6.38A17.73,17.73,0,0,1,0,17.52,17.67,17.67,0,0,1,2.26,8.66,16.76,16.76,0,0,1,8.52,2.33a17.57,17.57,0,0,1,9-2.33,17.72,17.72,0,0,1,9.06,2.33,16.77,16.77,0,0,1,6.26,6.36,17.79,17.79,0,0,1,2.25,8.83A17.83,17.83,0,0,1,32.84,26.36ZM27.56,12.08a9.6,9.6,0,0,0-4-3.69,13.17,13.17,0,0,0-6-1.32,13,13,0,0,0-6,1.32,9.47,9.47,0,0,0-3.95,3.69,10.55,10.55,0,0,0-1.38,5.44A10.75,10.75,0,0,0,7.56,23a9.43,9.43,0,0,0,4,3.7,13,13,0,0,0,6,1.33,13.17,13.17,0,0,0,6-1.33,9.56,9.56,0,0,0,4-3.7A10.66,10.66,0,0,0,29,17.52,10.47,10.47,0,0,0,27.56,12.08Z"/></g></g></svg></div>
            <div class="btnMaterial  hover"><a href=""><img src="img/btnVideos@3x.png" alt=""></a></div>
        </article>
        <article>
            <div class="materialImg"><img style="width: 100%;"  src="img/tablet_1@3x.png" alt=""></div>
            <div class="materialNumero"><img src="img/numero3@3x.png" alt=""></div>
            <div class="txtPaso"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.09 131.88"><defs><style>.tablet-1{fill:#F5C32F;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="tablet-1" d="M16.25,108.2a9.57,9.57,0,0,1,3.87,4.08,14.68,14.68,0,0,1,1.48,7V125H34.75v6.87H.49V119.27a15.16,15.16,0,0,1,1.38-6.77,9.51,9.51,0,0,1,3.77-4.2,10.68,10.68,0,0,1,5.45-1.4A10.66,10.66,0,0,1,16.25,108.2Zm-1.5,7.14A4.83,4.83,0,0,0,11.09,114c-3.34,0-5,1.86-5,5.59V125h10v-5.45A6,6,0,0,0,14.75,115.34Z"/><path class="tablet-1" d="M28.22,81.5V95.14l6.53,2.26v7.21L.44,92.29v-8L34.75,72v7.27Zm-5.49,1.86-14.34,5,14.34,5Z"/><path class="tablet-1" d="M33.87,60.51a10.62,10.62,0,0,1-3.54,4.54,9.28,9.28,0,0,1-5.45,1.72V59.41a4.77,4.77,0,0,0,3.34-1.5,5.31,5.31,0,0,0,1.23-3.71,5.71,5.71,0,0,0-1.15-3.78,3.78,3.78,0,0,0-3-1.37,3.51,3.51,0,0,0-2.51.93,6.5,6.5,0,0,0-1.54,2.33A38.71,38.71,0,0,0,20,56.17,42,42,0,0,1,18,61.59a9.47,9.47,0,0,1-2.9,3.58A8.24,8.24,0,0,1,10,66.67a9.32,9.32,0,0,1-5.3-1.52A9.75,9.75,0,0,1,1.2,60.88,15.61,15.61,0,0,1,0,54.59,13.62,13.62,0,0,1,2.58,46a9.53,9.53,0,0,1,7.19-3.66v7.56a4,4,0,0,0-2.92,1.5,5.64,5.64,0,0,0-1.16,3.71,4.79,4.79,0,0,0,1,3.21,3.75,3.75,0,0,0,3,1.2A3.07,3.07,0,0,0,12,58.59a6.66,6.66,0,0,0,1.47-2.25,39.33,39.33,0,0,0,1.3-3.81,40.31,40.31,0,0,1,2-5.45,9.81,9.81,0,0,1,2.94-3.63,8.22,8.22,0,0,1,5.16-1.52,9.76,9.76,0,0,1,5.1,1.42,10.1,10.1,0,0,1,3.76,4.18,14.25,14.25,0,0,1,1.39,6.52A16.28,16.28,0,0,1,33.87,60.51Z"/><path class="tablet-1" d="M32.84,26.36a16.89,16.89,0,0,1-6.26,6.38,17.53,17.53,0,0,1-9.06,2.35,17.39,17.39,0,0,1-9-2.35,16.82,16.82,0,0,1-6.26-6.38A17.73,17.73,0,0,1,0,17.52,17.67,17.67,0,0,1,2.26,8.66,16.76,16.76,0,0,1,8.52,2.33a17.57,17.57,0,0,1,9-2.33,17.72,17.72,0,0,1,9.06,2.33,16.77,16.77,0,0,1,6.26,6.36,17.79,17.79,0,0,1,2.25,8.83A17.83,17.83,0,0,1,32.84,26.36ZM27.56,12.08a9.6,9.6,0,0,0-4-3.69,13.17,13.17,0,0,0-6-1.32,13,13,0,0,0-6,1.32,9.47,9.47,0,0,0-3.95,3.69,10.55,10.55,0,0,0-1.38,5.44A10.75,10.75,0,0,0,7.56,23a9.43,9.43,0,0,0,4,3.7,13,13,0,0,0,6,1.33,13.17,13.17,0,0,0,6-1.33,9.56,9.56,0,0,0,4-3.7A10.66,10.66,0,0,0,29,17.52,10.47,10.47,0,0,0,27.56,12.08Z"/></g></g></svg></div>
            <div class="btnMaterial hover"><a href=""><img src="img/plataforma@3x.png" alt=""></a></div>
        </article>
    </div>
</section>
<section id="MuestraGratis">
    <h2>¿Eres<br>
    &nbsp;Profesor?</h2>
    <p>Te enviaremos una <strong><u>muestra gratis</u></strong><br>
    de nuestro material.<br><br><br><br>Sigue estos pasos:</p>
    <button type="button" data-bs-toggle="modal" data-bs-target="#pruebaGratis" class="hover" href=""><img src="img/btnMuestra@3x.png" alt=""></button>
</section>

<div class="modal fade" id="pruebaGratis" tabindex="-1" data-bs-backdrop="static" aria-labelledby="SlideModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="SlideModalLabel">MUESTRA GRATIS</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Déjanos tu mensaje y nos pondremos en contacto contigo</p>
            <form  action="correosWeb.php" method="post">
                <div class="mb-3">
                    <label for="FormControlInput1" class="form-label">Nombre*</label>
                    <input type="text" class="form-control form-control-sm" id="FormControlInput1" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="FormControlInput2" class="form-label">Correo Electronico*</label>
                    <input type="email" class="form-control form-control-sm" id="FormControlInput2" placeholder="name@example.com" name="correo" required>
                </div>
                <div class="mb-3">
                    <label for="FormControlInput3" class="form-label">Telefono</label>
                    <input type="number" class="form-control form-control-sm" id="FormControlInput3" name="telefono">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Escriba su solicitud*</label>
                    <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="3" name="mensaje" required></textarea>
                </div>
                <input type="text" name="hp" id="hp" style="display: none">
                <div class="g-recaptcha" data-sitekey="6LdWf58mAAAAAPSb7iAVH5i7Lpxint-PzbkedSZd"></div>
                    <input type="hidden" name="condicion" value="1">
                    <input type="submit" value="Enviar" class="btnRegistro">
            </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
    </div>
    </div>
</div>
<section id="p5">
    <a href="https://www.youtube.com/channel/UCPSLG3t9l1DO1tEu9NjdK8A" target="_blank"><img src="img/btnYouTube.png" alt=""></a>
</section>
<section id="clientes">
    <div class="fondoColegio">
        <p class="agradecimiento">Apreciamos sinceramente su confianza en nosotros y nos esforzamos continuamente para superar sus expectativas. Nuestro equipo de diseñadores y expertos en educación se dedica incansablemente a crear recursos dinámicos que sean atractivos, interactivos y efectivos.</p>

        <div class="catalogoColegios">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-ride="true">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="colegiosJD">
                        <article><img src="img/logo1@3x.png" alt=""></article>
                        <article><img src="img/logo2@3x.png" alt=""></article>
                        <article><img src="img/logo3@3x.png" alt=""></article>
                        <article><img src="img/logo4@3x.png" alt=""></article>
                        <article><img src="img/logo5@3x.png" alt=""></article>
                        <article><img src="img/logo6@3x.png" alt=""></article>
                        <article><img src="img/logo1@3x.png" alt=""></article>
                        <article><img src="img/logo2@3x.png" alt=""></article>
                        <article><img src="img/logo3@3x.png" alt=""></article>
                        <article><img src="img/logo4@3x.png" alt=""></article>
                        <article><img src="img/logo5@3x.png" alt=""></article>
                        <article><img src="img/logo6@3x.png" alt=""></article>
                        <article><img src="img/logo1@3x.png" alt=""></article>
                        <article><img src="img/logo2@3x.png" alt=""></article>
                        <article><img src="img/logo3@3x.png" alt=""></article>
                        <article><img src="img/logo4@3x.png" alt=""></article>
                        <article><img src="img/logo5@3x.png" alt=""></article>
                        <article><img src="img/logo6@3x.png" alt=""></article>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="colegiosJD">
                        <article><img src="img/logo1@3x.png" alt=""></article>
                        <article><img src="img/logo2@3x.png" alt=""></article>
                        <article><img src="img/logo3@3x.png" alt=""></article>
                        <article><img src="img/logo4@3x.png" alt=""></article>
                        <article><img src="img/logo5@3x.png" alt=""></article>
                        <article><img src="img/logo6@3x.png" alt=""></article>
                        <article><img src="img/logo1@3x.png" alt=""></article>
                        <article><img src="img/logo2@3x.png" alt=""></article>
                        <article><img src="img/logo3@3x.png" alt=""></article>
                        <article><img src="img/logo4@3x.png" alt=""></article>
                        <article><img src="img/logo5@3x.png" alt=""></article>
                        <article><img src="img/logo6@3x.png" alt=""></article>
                        <article><img src="img/logo1@3x.png" alt=""></article>
                        <article><img src="img/logo2@3x.png" alt=""></article>
                        <article><img src="img/logo3@3x.png" alt=""></article>
                        <article><img src="img/logo4@3x.png" alt=""></article>
                        <article><img src="img/logo5@3x.png" alt=""></article>
                        <article><img src="img/logo6@3x.png" alt=""></article>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="colegiosJD">
                        <article><img src="img/logo1@3x.png" alt=""></article>
                        <article><img src="img/logo2@3x.png" alt=""></article>
                        <article><img src="img/logo3@3x.png" alt=""></article>
                        <article><img src="img/logo4@3x.png" alt=""></article>
                        <article><img src="img/logo5@3x.png" alt=""></article>
                        <article><img src="img/logo6@3x.png" alt=""></article>
                        <article><img src="img/logo1@3x.png" alt=""></article>
                        <article><img src="img/logo2@3x.png" alt=""></article>
                        <article><img src="img/logo3@3x.png" alt=""></article>
                        <article><img src="img/logo4@3x.png" alt=""></article>
                        <article><img src="img/logo5@3x.png" alt=""></article>
                        <article><img src="img/logo6@3x.png" alt=""></article>
                        <article><img src="img/logo1@3x.png" alt=""></article>
                        <article><img src="img/logo2@3x.png" alt=""></article>
                        <article><img src="img/logo3@3x.png" alt=""></article>
                        <article><img src="img/logo4@3x.png" alt=""></article>
                        <article><img src="img/logo5@3x.png" alt=""></article>
                        <article><img src="img/logo6@3x.png" alt=""></article>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>
    </div>
</section>
<section id="tienda">
    <div class="tiendaTitulo"><img src="img/tiendaTitulo@3x.png" alt=""></div>
    <div class="tiendaLeyenda"><p>¿Tienes exploradores en casa? ¡Descubre un<br>mundo de <strong>aprendizaje y diversión</strong> con nosotros!</p></div>
    <div class="tiendaTxt"><p>En nuestra <strong>TIENDA VIRTUAL</strong> encontrarás una amplia gama de productos educativos, desde <strong>JUEGOS</strong> didácticos e interactivos hasta desafíos de lógica y rompecabezas. Tenemos todo lo que necesitas para enriquecer el proceso de aprendizaje de cualquier estudiante, ofrecemos materiales y recursos educativos, <strong>LIBROS</strong> didácticos para niños y jóvenes de todas las edades con publicaciones en matemáticas e inglés que facilitaran su manera de aprender.</p>
    <br>
    <i>Así que, ¿Por qué esperar? Explora nuestra tienda virtual<br>y descubre un mundo de posibilidades educativas. <br><strong>¡El aprendizaje nunca ha sido tan divertido!</strong></i></div>
    <div class="tiendaImagen">
        <div class="imglibro hover"><a href=""><img src="img/tiendaLibros@3x.png" alt=""></a></div>
        <div class="imgjuegos hover"><a href=""><img src="img/tiendaJuegos@3x.png" alt=""></a></div>
        <div class="imgofertas hover"><a href=""><img src="img/tiendaOfertas@3x.png" alt=""></a></div>
    </div>
    <div id="proximamente" data-aos="zoom-out-right">
        <img src="img/tiendaProximamente@3x.png" alt="">
    </div>
</section>

<?php echo $FOOTER; ?>

<?php echo $MENSAJEmsm; ?>

<script src="js/ajax.googleapis.com_ajax_libs_jquery_1.6.2_jquery.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/aos.js"></script>

<script>
$(document).ready(function() {
    AOS.init();

    var nombresString = "Albert Einstein, Isaac Newton, Galileo Galilei, Marie Curie, Charles Darwin, Nikola Tesla, Aristóteles, Leonardo da Vinci, Carl Sagan, Stephen Hawking, Pitágoras, Johannes Kepler, Arquímedes, René Descartes, Alan Turing, Niels Bohr, Richard Feynman, Sigmund Freud, Ada Lovelace, Immanuel Kant, Max Planck, Werner Heisenberg, Marie Curie, Niels Henrik Abel, Blaise Pascal, James Clerk Maxwell, Antoine Lavoisier, Albert Michelson, George Washington Carver, Rosalind Franklin, Galeno, Hipatia, Alhazen, Aryabhata, Alan Guth, Dmitri Mendeléyev, Carl Friedrich Gauss, Erwin Schrödinger, Max Born, John Locke, Tomás de Aquino, Émilie du Châtelet, Werner Karl Heisenberg, Comte de Buffon, Euclides, Emmy Noether, Edwin Hubble, Ibn Sina, Hipatia de Alejandría, Pierre-Simon Laplace, John Stuart Mill, Mary Cartwright, Alain Connes, Johannes van der Waals, Robert Hooke, André-Marie Ampère, Edward Witten, Niels Bohr, Francis Bacon, Averroes";
    var nombresArray = nombresString.split(", ");
    var indiceAleatorio = Math.floor(Math.random() * nombresArray.length);
    var nombreAleatorio = nombresArray[indiceAleatorio];
    $("#nombreAleatorio").text(nombreAleatorio);
});
</script>
</body>
</html>