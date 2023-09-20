<!DOCTYPE html>
<?php
require_once(dirname(__FILE__).'/componentes.php');
?>
<html lang="es">
<head>
    <?php echo $HEAD ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros | Dinámico pedagogía y diseño</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/config.css" type="text/css">
    <link rel="stylesheet" href="css/nosotros/misionVision.css">
</head>
<body>
<?php echo $MENU; ?>
<script>
    var posicionMenu = document.getElementById('m2');
    posicionMenu.classList.add('menuActivo');
</script>
<div class="nosotrosVM">
    <div class="we">
        <div class="weArticulo">
            <div class="weTitulo"><img src="img/nosotros/WeNosotros@3x.png" alt=""></div>
            <div class="weTXT">
                <p>Somos un <strong>grupo pedagógico</strong> conformado por docentes, diseñadores gráficos y asesores comerciales cualificados en el campo educativo. Nuestra labor se deriva de la amplia experiencia en la creación de productos, actividades y servicios lúdicos, enfocados en el <strong>fortalecimiento de procesos</strong> de estudiantes de educación preescolar, básica y media. En el marco de nuestras prioridades, está el acompañamiento a las diferentes instituciones educativas a través de <strong>actividades transversales</strong> en múltiples áreas.</p>
            </div>
            <div class="weIcono">
                <img src="img/nosotros/WeIco_1@3x.png" alt="">
            </div>
        </div>
    </div>
    <div class="MyV">
        <div class="CarruselMyV">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="MyVarticulo">
                                <div class="weArticulo">
                                    <div class="weTitulo"><img src="img/nosotros/WeMision@3x.png" alt=""></div>
                                    <div class="weTXT">
                                        <p>Generar <strong>recursos educativos</strong> que apoyen y acompañen constantemente los procesos llevados a cabo por los actores del panorama educativo, en los niveles de preescolar, básica y media, dentro y fuera del aula, con el objetivo de <strong>disminuir y superar</strong> conflictos y obstáculos provenientes de las actividades de aprehensión.</p>
                                    </div>
                                    <div class="weIcono">
                                        <img src="img/nosotros/WeIco_2@3x.png" alt="">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="MyVarticulo">
                        <div class="weArticulo">
                                    <div class="weTitulo"><img src="img/nosotros/WeVision@3x.png" alt=""></div>
                                    <div class="weTXT">
                                        <p>Para el año <strong>2025</strong> seremos un grupo pedagógico reconocido <strong>a nivel nacional</strong>, por el <strong>impacto social</strong> generado al impulsar el aprendizaje en diferentes áreas del conocimiento, a través de nuestros productos, actividades y servicios, lúdico-pedagógicos y didácticos, para estudiantes de educación preescolar, básica y media.</p>
                                    </div>
                                    <div class="weIcono">
                                        <img src="img/nosotros/WeIco_3@3x.png" alt="">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                    <img class="cursorWe" src="img/nosotros/iz@3x.png" alt="">
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                    <img class="cursorWe" src="img/nosotros/de@3x.png" alt="">
                </button>
            </div>
        </div>
    </div>
</div>
<div class="infografia">
    <div class="infografiaTitulo">
        <img src="img/nosotros/logo@3x.png" alt="">
    </div>
    <div class="infografiaIMG">
        <div class="cuadroDP_nosotros" id="nosotrosHistoria" data-aos="flip-left">
            <div class="elCuadroDP_nosotros">
                <div class="puntico"></div>
                <div class="tituloDP_nosotros"><img src="img/nosotros/historia@3x.png" alt=""></div>
                <div class="textoDP_nosotros"><p>“Este grupo pedagógico fue fundado en 2013 por Darío Fonseca Sandoval en Tunja, Boyacá, con el objetivo de abordar las necesidades educativas en matemáticas para docentes y estudiantes de primaria, básica y media.”</p></div>
                <div class="botonDP_nosotros">
                    <button type="button" class="hover" data-bs-toggle="modal" data-bs-target="#ModalHistoria">Ver más</button>
                </div>
                <div class="cositoDP_nosotros"><img src="img/nosotros/otroCosito@3x.png" alt=""></div>
            </div>
        </div>
        <div class="cuadroDP_nosotros" id="nosotrosValores" data-aos="flip-right">
            <div class="elCuadroDP_nosotros">
                <div class="puntico"></div>
                <div class="tituloDP_nosotros"><img src="img/nosotros/valores@3x.png" alt=""></div>
                <div class="textoDP_nosotros">
                    <p><img class="vineta" src="img/nosotros/vineta.png" alt=""> La máxima calidad como meta.</p>
                    <p><img class="vineta" src="img/nosotros/vineta.png" alt=""> Aprendizaje y adaptabilidad.</p>
                    <p><img class="vineta" src="img/nosotros/vineta.png" alt=""> Trabajo en equipo y compañerismo.</p>    
                </div>
                <div class="botonDP_nosotros">
                    <button type="button" class="hover" data-bs-toggle="modal" data-bs-target="#ModalValores">Ver más</button>
                </div>
                <div class="cositoDP_nosotros"><img src="img/nosotros/otroCosito@3x.png" alt=""></div>
            </div>
        </div>
        <div class="cuadroDP_nosotros" id="nosotrosPoliticas" data-aos="flip-left">
            <div class="elCuadroDP_nosotros">
                <div class="puntico"></div>
                <div class="tituloDP_nosotros"><img src="img/nosotros/politicas@3x.png" alt=""></div>
                <div class="textoDP_nosotros">
                    <p>“Nuestro objetivo es ser reconocidos a nivel nacional por impulsar el aprendizaje a través de recursos lúdico-pedagógicos, centrándonos en la calidad, la mejora continua y la excelencia como principios fundamentales. Esforzándonos por mantenernos al día en pedagogía y tecnología educativa, buscando constantemente la innovación”</p>  
                </div>
                <div class="botonDP_nosotros">
                    <button type="button" class="hover" data-bs-toggle="modal" data-bs-target="#ModalPoliticas">Ver más</button>
                </div>
                <div class="cositoDP_nosotros"><img src="img/nosotros/otroCosito@3x.png" alt=""></div>
            </div>
        </div>
        <div class="cuadroDP_nosotros" id="nosotrosOrganigrama" data-aos="flip-right">
            <div class="elCuadroDP_nosotros">
                <div class="puntico"></div>
                <div class="tituloDP_nosotros"><img src="img/nosotros/organigrama@3x.png" alt=""></div>
                <div class="textoDP_nosotros">
                    <p>“Estructura jerárquica de nuestra empresa, indicando las relaciones y responsabilidades de cada miembro o departamento dentro de la misma”.</p>  
                </div>
                <div class="botonDP_nosotros">
                    <button type="button" class="hover" data-bs-toggle="modal" data-bs-target="#ModalOrganigrama">Ver más</button>
                </div>
                <div class="cositoDP_nosotros"><img src="img/nosotros/otroCosito@3x.png" alt=""></div>
            </div>
        </div>
        <img class="infografiaNumero" id="infografia1" src="img/nosotros/1@3x.png" alt="">
        <img class="infografiaNumero" id="infografia2" src="img/nosotros/2@3x.png" alt="">
        <img class="infografiaNumero" id="infografia3" src="img/nosotros/3@3x.png" alt="">
        <img class="infografiaNumero" id="infografia4" src="img/nosotros/4@3x.png" alt="">
    </div>
</div>

<!-- Modal Historia-->
<div class="modal fade modalNosotros" id="ModalHistoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header weArticulo">
            <button type="button" class="inicioClose hover" data-bs-dismiss="modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.65 27.23"><defs><style>.btnClose-1{fill:#f7746d;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="btnClose-1" d="M7.55,13.65C5.4,9.5.52,2.05.58,1.27.58,1,7.76.11,8.39.11S13,7.93,13.32,8.5C13.59,8.09,18.2.06,18.52,0s8.18,1.05,8.13,1.31c-.42,1.36-4.41,7.92-7.14,12,2.15,4.25,6.67,12,6.67,12.69-.06.37-7.24,1.26-7.87,1.26s-4.36-7.66-5-8.76c-.73,1.16-4.87,8.6-5.14,8.6S0,26,0,25.71C.37,24.5,4.56,18,7.55,13.65Z"/></g></g></svg>
            </button>
      </div>
      <div class="modal-body">
        <div class="weTitulo"><img class="weTituloimg" src="img/nosotros/historia@3x.png" alt=""></div>
        <div class="weTXT">
                <p>Somos un <strong>grupo pedagógico</strong> fundado en el año <strong>2013</strong> en Tunja Boyacá por el licenciado en Electrónica <strong>Darío Fonseca Sandoval</strong>, a quien gracias a sus experiencias laborales, las cuales le permitieron el acercamiento a <strong>docentes</strong> del área de matemáticas y <strong>alumnos</strong> de diferentes instituciones educativas, realiza un proceso donde escuchó la opinión de ellos, siendo de está forma como identifica las necesidades que tenían en el área. De ahí surge la  <strong>idea</strong> de crear un material educativo y recreativo que brinda un acompañamiento transversal en la asignatura para educación primaria, básica y media.<br><br>

                Partiendo de ahí se obtiene como <strong>resultado</strong> la creación de un grupo pedagógico en el área, que maneje una metodología diferente a la tradicional y que se desarrolla a través de <strong>materiales educativos</strong>, <strong>actividades</strong> y <strong>servicios lúdico-pedagógicos</strong> para brindar un aprendizaje más práctico, dinámico y atractivo en un <strong>espacio recreativo</strong>.<br><br>

                Con el <strong>pensamiento</strong> de esparcir sus ideas a más alumnos del país generando un aprendizaje ameno, comienza una búsqueda de nuevos mercados. Tras la persecución de sus sueños, concentró sus esfuerzos en la incursión en nuevas instituciones, hoy en día, el grupo pedagógico se encuentra presente en <strong>Boyacá, Casanare, Cundinamarca y Santander</strong>, reconocidos entre sus clientes por sus <strong>olimpiadas y festivales de matemáticas</strong>, en estos momentos sigue incorporándose en más instituciones educativas a nivel nacional y ampliando su oferta a otras áreas del conocimiento, desde ciencias hasta humanidades, desde tecnología hasta artes, estamos comprometidos a brindar recursos de calidad que inspiran el <strong>aprendizaje</strong> en todas las disciplinas.</p>
        </div>
        <div class="weIcono">
                <img src="img/nosotros/weIco_4@3x.png" alt="">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btnCerrar hover" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Valores-->
<div class="modal fade modalNosotros" id="ModalValores" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header weArticulo">
            <button type="button" class="inicioClose hover" data-bs-dismiss="modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.65 27.23"><defs><style>.btnClose-1{fill:#f7746d;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="btnClose-1" d="M7.55,13.65C5.4,9.5.52,2.05.58,1.27.58,1,7.76.11,8.39.11S13,7.93,13.32,8.5C13.59,8.09,18.2.06,18.52,0s8.18,1.05,8.13,1.31c-.42,1.36-4.41,7.92-7.14,12,2.15,4.25,6.67,12,6.67,12.69-.06.37-7.24,1.26-7.87,1.26s-4.36-7.66-5-8.76c-.73,1.16-4.87,8.6-5.14,8.6S0,26,0,25.71C.37,24.5,4.56,18,7.55,13.65Z"/></g></g></svg>
            </button>
      </div>
      <div class="modal-body">
        <div class="weTitulo"><img class="weTituloimg" src="img/nosotros/valoresEmpresariales@3x.png" alt=""></div>
        <div class="weTXT TXTcentrar">
                <p><img class="vineta" src="img/nosotros/vineta.png" alt=""> Respeto por los compañeros.</p>
                <p><img class="vineta" src="img/nosotros/vineta.png" alt=""> Trabajo en equipo y compañerismo.</p>
                <p><img class="vineta" src="img/nosotros/vineta.png" alt=""> Organización empresarial.</p>
                <p><img class="vineta" src="img/nosotros/vineta.png" alt=""> Ser críticos constructivos.</p>
                <p><img class="vineta" src="img/nosotros/vineta.png" alt=""> Honestidad.</p>
                <p><img class="vineta" src="img/nosotros/vineta.png" alt=""> La máxima calidad como meta.</p>
                <p><img class="vineta" src="img/nosotros/vineta.png" alt=""> Aprendizaje y adaptabilidad.</p>
                <p><img class="vineta" src="img/nosotros/vineta.png" alt=""> Transparencia y cultura abierta.</p>
                <p><img class="vineta" src="img/nosotros/vineta.png" alt=""> Puntualidad.</p>
        </div>
        <div class="weIcono">
                <img src="img/nosotros/weIco_5@3x.png" alt="">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btnCerrar hover" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Politicas-->
<div class="modal fade modalNosotros" id="ModalPoliticas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header weArticulo">
            <button type="button" class="inicioClose hover" data-bs-dismiss="modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.65 27.23"><defs><style>.btnClose-1{fill:#f7746d;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="btnClose-1" d="M7.55,13.65C5.4,9.5.52,2.05.58,1.27.58,1,7.76.11,8.39.11S13,7.93,13.32,8.5C13.59,8.09,18.2.06,18.52,0s8.18,1.05,8.13,1.31c-.42,1.36-4.41,7.92-7.14,12,2.15,4.25,6.67,12,6.67,12.69-.06.37-7.24,1.26-7.87,1.26s-4.36-7.66-5-8.76c-.73,1.16-4.87,8.6-5.14,8.6S0,26,0,25.71C.37,24.5,4.56,18,7.55,13.65Z"/></g></g></svg>
            </button>
      </div>
      <div class="modal-body">
        <div class="weTitulo"><img class="weTituloimg" src="img/nosotros/politicasDeCalidad@3x.png" alt=""></div>
        <div class="weTXT">
                <p><strong>DINÁMICO PEDAGOGÍA Y DISEÑO</strong> consciente de las necesidades educativas en diferentes áreas esenciales para un buen <strong>desempeño estudiantil</strong>, considera que es vital lograr un aprendizaje teniendo en cuenta los requisitos y expectativas de nuestros clientes dentro de los objetivos y estrategias empresariales.<br><br>

                Estamos <strong>comprometidos</strong> a mantenernos al día con las últimas tendencias en pedagogía y tecnología educativa. Nuestra búsqueda constante de la <strong>innovación</strong> nos impulsa a crear recursos educativos que sean relevantes en la enseñanza actual.<br><br>

                El <strong>grupo pedagógico</strong> aspira ser una empresa reconocida a nivel nacional por impulsar el aprendizaje a través de los <strong>productos, actividades y servicios lúdico-pedagógicos</strong> y para ello la cultura de calidad, la mejora continua y el principio de excelencia constituyen el marco imprescindible en el que debemos desarrollar todos nuestros esfuerzos para progresar de forma permanente.
                </p>
        </div>
        <div class="weIcono">
            <img src="img/nosotros/weIco_6@3x.png" alt="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btnCerrar hover" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Organigrama-->
<div class="modal fade modalNosotros" id="ModalOrganigrama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header weArticulo">
            <button type="button" class="inicioClose hover" data-bs-dismiss="modal" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.65 27.23"><defs><style>.btnClose-1{fill:#f7746d;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><path class="btnClose-1" d="M7.55,13.65C5.4,9.5.52,2.05.58,1.27.58,1,7.76.11,8.39.11S13,7.93,13.32,8.5C13.59,8.09,18.2.06,18.52,0s8.18,1.05,8.13,1.31c-.42,1.36-4.41,7.92-7.14,12,2.15,4.25,6.67,12,6.67,12.69-.06.37-7.24,1.26-7.87,1.26s-4.36-7.66-5-8.76c-.73,1.16-4.87,8.6-5.14,8.6S0,26,0,25.71C.37,24.5,4.56,18,7.55,13.65Z"/></g></g></svg>
            </button>
      </div>
      <div class="modal-body">
        <div class="weTitulo"><img class="weTituloimg" src="img/nosotros/organigrama@3x.png" alt=""></div>
        <div class="weTXT">
            <img class="imgFull" src="img/nosotros/allOrganigrama@3x.png" alt="">
        </div>
        <div class="weIcono">
            <img src="img/nosotros/weIco_7@3x.png" alt="">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btnCerrar hover" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<?php echo $FOOTER; ?>
<?php echo $BOTONWPP_HOME; ?>
</body>
</html>