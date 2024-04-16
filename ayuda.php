<?php
require_once(dirname(__FILE__).'/componentes.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $HEAD ?>
    <title>Centro de ayuda | Dinámico pedagogía y diseño</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/config.css" type="text/css">
    <link rel="stylesheet" href="css/ayuda/ayuda.css" type="text/css">
</head>
<body>
<?php echo $MENU; ?>
<script>
    var posicionMenu = document.getElementById('m6');
    posicionMenu.classList.add('menuActivo');
</script>

<section id="periodico" style="padding-top: 9vw;">
    <div class="container">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item"  onclick="scrollToTop()">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Eres docente, ¿como puedes registrarte en la plataforma?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>
                            <h3><strong>Ingresa a la página principal <a href="https://www.dinamicopd.com" target="_blank">www.dinamicopd.com</a> y haz clic en el botón "Plataforma" ubicado en el menú principal</strong><br></h3>
                            <br>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda.png" alt=""></p>
                            <li>Se abrirá una ventana en la que debes seleccionar la opción "Registro".</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda2.png" alt=""></p>
                            <li>En la siguiente ventana, elige la categoría "Docente" para acceder al formulario de inscripción.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda3.png" alt=""></p>
                            <h3><strong>Completa el formulario con los siguientes datos personales</strong><br></h3>
                            <br>
                            <li><strong>E-mail:</strong> Proporciona tu correo electrónico, el cual se vinculará a tu cuenta.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda4.png" alt=""></p>
                            <li><strong>Código de verificación:</strong> Verifica tu bandeja de entrada de tu correo electrónico para transcribir el código en el formulario.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda5.png" alt=""></p>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda5-1.png" alt=""></p>
                            <li><strong>Primer nombre:</strong> Ingresa tu primer nombre.</li>
                            <li><strong>Segundo nombre:</strong> Ingresa tu segundo nombre (si aplica).</li>
                            <li><strong>Primer apellido:</strong> Ingresa tu primer apellido.</li>
                            <li><strong>Segundo apellido:</strong> Ingresa tu segundo apellido (si aplica).</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda6.png" alt=""></p>
                            <li><strong>Número de Teléfono:</strong> Proporciona un número de contacto.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda7.png" alt=""></p>
                            <h3><strong>Luego, completa los datos de tu institución en el formulario</strong><br></h3>
                            <br>
                            <li><strong>Departamento: </strong>Selecciona el departamento donde está ubicada tu institución.</li>
                            <li><strong>Ciudad: </strong>Elige la ciudad correspondiente a tu institución.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda8.png" alt=""></p>
                            <li><strong>Institución: </strong>Selecciona el nombre de tu institución. Si no encuentras tu institución en nuestra base de datos, elige la opción "OTRA" e ingresa el nombre completo.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda8-1.png" alt=""></p>
                            <p><strong>Nota: </strong>Si orientas en más de una institución, puedes agregarlas haciendo clic en el símbolo "+".</p>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda8-2.png" alt=""></p>
                            <li><strong>Asesor: </strong>Selecciona el código de tu asesor. Si no tienes este código, comunícate con tu asesor o con nuestro soporte técnico.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda9.png" alt=""></p>
                            <li><strong>Institución: </strong>Selecciona la institución correspondiente al proyecto, curso y grupo que necesitas agregar.</li>
                            <li><strong>Edición: </strong>Elige el proyecto con el cual deseas trabajar.</li>
                            <li><strong>Curso: </strong>Selecciona el curso al que está orientado el material.</li>
                            <li><strong>Sigla: </strong>Ingresa las siglas de los cursos que orientas. Ejemplo: si orientas en el grado sexto A, escribe "601"; si orientas en el grado décimo B, escribe "1002".</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda10.png" alt=""></p>
                            <p><strong>Nota: </strong>Si orientas en más de un curso, puedes agregarlo haciendo clic en el símbolo "+".</p>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda11.png" alt=""></p>
                            <div class="video-responsive">
                                <iframe class="youtubeVideo" src="https://www.youtube.com/embed/kZKUmD6O5H8?si=RtanuDP5LCULr_BZ" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item" onclick="scrollToTop()">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Eres estudiante, ¿como puedes registrarte en la plataforma?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <ul>
                            <h3><strong>Ve a la página principal <a href="https://www.dinamicopd.com" target="_blank">www.dinamicopd.com</a> y haz clic en el botón "Plataforma" en el menú principal.</strong></h3>
                            <br>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda.png" alt=""></p>
                            <li>Se abrirá una ventana. Elige la opción "Registro" para comenzar.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda2.png" alt=""></p>
                            <li>Ahora, selecciona la categoría "Estudiante" para acceder al formulario de inscripción.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta2/ayuda1.png" alt=""></p>
                            <h3><strong>Ingresa los códigos que necesitas</strong></h3>
                            <br>
                            <li><strong>Código de la Cartilla: </strong>encuéntralo en tu libro.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta2/ayuda2.png" alt=""></p>
                            <li><strong>Código del Grupo: </strong>Pídelo a tu profesor, ¡te conectará con tu clase!</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta2/ayuda3.png" alt=""></p>
                            <h3><strong>Después de ingresar los códigos, se abrirá el formulario. Asegúrate de que la información sea correcta</strong></h3>
                            <br>
                            <h3><strong>Verifica estos datos importantes</strong></h3>
                            <br>
                            <li><strong>Nombre del docente: </strong>Tu profesor que te guiará.</li>
                            <li><strong>Nombre del curso: </strong>El grado que cursas.</li>
                            <li><strong>Nombre del grupo: </strong>El grupo de tu curso.</li>
                            <li><strong>Institución: </strong>El nombre de tu colegio.</li>
                            <li><strong>Ciudad: </strong>El lugar donde está tu escuela.</li>
                            <p><strong>Nota: </strong>Si algo no está bien, ¡habla con tu profesor o llama a la línea de soporte técnico!</p>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta2/ayuda4.png" alt=""></p>
                            <h3><strong>Desplázate hacia abajo o haz clic en la flecha para continuar con el formulario. Aquí, ingresa tus datos personales</strong></h3>
                            <br>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta2/ayuda5.png" alt=""></p>
                            <li><strong>E-mail: </strong>Tu correo electrónico para conectarte.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta2/ayuda6.png" alt=""></p>
                            <li><strong>Código de verificación: </strong>Verifica tu bandeja de entrada de tu correo electrónico para transcribir el código en el formulario.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta1/ayuda5.png" alt=""></p>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta2/ayuda7.png" alt=""></p>
                            <li><strong>Primer nombre:</strong> Ingresa tu primer nombre.</li>
                            <li><strong>Segundo nombre:</strong> Ingresa tu segundo nombre (si tienes).</li>
                            <li><strong>Primer apellido:</strong> Ingresa tu primer apellido.</li>
                            <li><strong>Segundo apellido:</strong> Ingresa tu segundo apellido (si tienes).</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta2/ayuda8.png" alt=""></p>
                            <h3><strong>Ahora, crea tu contraseña siguiendo estas reglas</strong></h3>
                            <br>
                            <li>Mínimo 8 caracteres de longitud.</li>
                            <li>Una letra mayúscula y una minúscula.</li>
                            <li>Un número.</li>
                            <li>Un carácter que no sea una letra ni número.</li>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta2/ayuda9.png" alt=""></p>
                            <h3><strong>Si quieres, proporciona un número de contacto de tu acudiente.</strong></h3>
                            <br>
                            <p><img class="img-thumbnail" src="img/ayuda/pregunta2/ayuda10.png" alt=""></p>
                            <div class="video-responsive">
                                <iframe class="youtubeVideo" src="https://www.youtube.com/embed/UuLWEg_--B8?si=fvSGzrD7yvDPwI7P" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item" onclick="scrollToTop()">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    ¿Cuáles son los medios de comunicación para obtener soporte técnico de la plataforma?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <a class="elContacto" href="https://wa.me/+573144705547?text=Hola,%20necesito%20tu%20ayuda!!!" target="_blank">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM15.854.146a.5.5 0 0 1 0 .708L11.707 5H14.5a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 1 0v2.793L15.146.146a.5.5 0 0 1 .708 0z"/></svg>
                            </i>
                            <strong>Soporte técnico (+57) 314 470 55 47</strong>
                        </a>
                        <br>
                        <br>
                        <a class="elContacto" href="mailto:dinamico.moodle@gmail.com" target="_blank">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16"> <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2zm-2 9.8V4.698l5.803 3.546zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 9.671V4.697l-5.803 3.546.338.208A4.5 4.5 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671"/> <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791"/></svg>
                            </i>
                            <strong>dinamico.moodle@gmail.com</strong>
                        </a>
                    </div>
                </div>
            </div>
            <!--
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                    Olvidé mi contraseña, ¿cómo puedo recuperarla?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        
                    </div>
                </div>
            </div>
            -->
        </div>
    </div>
<section>

<?php echo $FOOTER; ?>
<?php echo $BOTONWPP_HOME; ?>
</body>
</html>