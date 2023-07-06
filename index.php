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
    <script src="//code.jivosite.com/widget/K8kniJJst9" async></script>
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
          <!--
          <button type="button" data-bs-target="#carouselSlideIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselSlideIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        -->
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
                <img src="img/01.png" class="d-block w-100" alt="">
                <div class="carousel-caption d-md-block cont">
                    <div class="sl1">
                        <div id="registro1">
                            <div class="row">
                                <div style="text-align: right;" class="col-2"><h2>¿</h2></div>
                                <div class="col-8"><h2>NO ESTÁS REGISTRADO</h2><h3>EN NUESTRA PLATAFORMA</h3></div>
                                <div style="text-align: left;" class="col-2"><h2>?</h2></div>
                            </div>
                        </div>
                        <div id="registro2">
                            <div class="row registroMns">
                                <div class="col-1"></div>
                                <div class="col-8">
                                    <p>
                                        REGÍSTRATE YA<br>
                                        ACCEDE CON EL CÓDIGO DE TU CARTILLA<br>
                                        Y EL CÓDIGO DE TU CURSO
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-10">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#perfilModal">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="row">
                                                    <div class="col-8 boxMaquina"><p class="maquina">Nikola Tesla</p></div>
                                                    <div class="col-4">REGÍSTRATE</div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <?php echo $CHECK ?>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="servicioTec">
                            <div class="row">
                                <div class="col-2"></div>
                                <div class="col-7"><p>¿NO PUEDES REGISTRARTE?<br><a class="soporte" href="https://wa.me/+573144705547?text=Hola,%20necesito%20tu%20ayuda!!!" target="_blank">SERVICIO TÉCNICO</a></p></div>
                                <div class="col-3"><img class="qr_wpp" src="img/QR_WPP.jpg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
          <!--
          <div class="carousel-item">
            <img src="img/01.png" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/01.png" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/01.png" class="d-block w-100" alt="">
          </div>
          -->          
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
            <h2>ESPECIALISTAS EN LA</h2>
            <h2>CREACIÓN DE MATERIAL EDUCATIVO</h2>
        </div>
        <div class="servicios">
            <div class="articulos_3">
                <article><a href=""><img src="img/dinamico1.svg" alt=""><img src="img/Recurso1.png" alt=""><p>FESTIVALES</p></a></article>
                <article><a href=""><img src="img/dinamico2.svg" alt=""><img src="img/Recurso2.png" alt=""><p>LIBROS</p></a></article>
                <article><a href=""><img src="img/dinamico3.svg" alt=""><img src="img/Recurso3.png" alt=""><p>JUEGOS</p></a></article>
            </div>
        </div>
    </div>
</section>
<section id="p3">
    <div class="row">
        <div class="col-5">
                <div class="txt">
                    <div class="row">
                        <div style="text-align: right;" class="col-2"><h1>¿</h1></div>
                        <div class="col-10">
                            <h1>ERES</h1>
                            <h1>PROFESOR  ?</h1>
                            <p>Te enviaremos una muestra<br>
                                gratis de nuestro material
                                <br><br>SIGUE ESTOS PASOS</p>
                                <button class="btnMaterialGratis" type="button" data-bs-toggle="modal" data-bs-target="#pruebaGratis">¡¡VAMOS!!</button>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-7"><img src="img/profeImg.png" alt=""></div>
    </div>
</section>
<!-- FORMULARIO PARA PRUEBA GRATIS DOCENTES -->
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
<section id="p4">
    <div class="titulo">
        <h2>MATERIAL INTERACTIVO EN 3 PASOS</h2>
        <h2>DISEÑADO PARA EL APRENDIZAJE AUTÓNOMO</h2>
    </div>
    <div class="pasos">
        <div class="articulos_3">
            <article>
                <div class="articulo"><p class="numero">1</p><img src="img/libro.png" alt=""></div>
                <div class="sombra"><img src="img/sombra.png" alt=""></div>
                <div class="btnPasos">
                    <button type="button" data-bs-toggle="modal" data-bs-target="" class="btnMaterialGratis">Cartillas</button>
                </div>
            </article>
            <article>
                <div class="articulo"><p class="numero">2</p><img src="img/celular.png" alt=""></div>
                <div class="sombra"><img src="img/sombra.png" alt=""></div>
                <div class="btnPasos">
                    <button type="button" data-bs-toggle="modal" data-bs-target="" class="btnMaterialGratis">Videos</button>
                </div>
            </article>
            <article>
                <div class="articulo"><p class="numero">3</p><img src="img/tablet.png" alt=""></div>
                <div class="sombra"><img src="img/sombra.png" alt=""></div>
                <div class="btnPasos">
                    <button type="button" data-bs-toggle="modal" data-bs-target="" class="btnMaterialGratis">Plataforma</button>
                </div>
            </article>
        </div>
    </div>
</section>
<section id="p5">
    <a href="https://www.youtube.com/channel/UCPSLG3t9l1DO1tEu9NjdK8A" target="_blank"><img src="img/btnYouTube.png" alt=""></a>
</section>
<footer>
    <div class="row">
        <div class="col">
            <p>Copyright @ 2023 Dinámico Pedagogía y Diseño</p>
        </div>
    </div>
</footer>
<?php echo $MENSAJEmsm; ?>
<script src="js/ajax.googleapis.com_ajax_libs_jquery_1.6.2_jquery.min.js"></script>
<script src="js/menu.js"></script>
</body>
</html>