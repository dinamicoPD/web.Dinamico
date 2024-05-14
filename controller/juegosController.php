<?php
require_once('config-ext.php');
$sql = "SELECT * FROM juegosCatalogo";
$resultado = $link->query($sql);
$JuegosCatalogo = "";

if ($resultado->num_rows > 0) {
    $JuegosCatalogo .= "<div class='articulos'>";
    while($fila = $resultado->fetch_assoc()) {

        
        $preciovalor = intval($fila["valor"]);
        $preciovalor = number_format($preciovalor, 0, ',', '.');

        $JuegosCatalogo .= "<article>";
            $JuegosCatalogo .= '<div class="card" style="position: relative;">';
                $JuegosCatalogo .= '<img src="moodle/dinapage/admin/uploads/'. $fila["adjunto"] .'" class="card-img-top" alt="' . $fila["titulo"] . '">';
                if(!empty($fila["guias"])){
                    $JuegosCatalogo .= '<img style="width: 40%; position: absolute; right:0; top:10%" src="moodle/dinapage/admin/uploads/guiasTrabajo.svg">';
                }
                $JuegosCatalogo .= '<div class="card-body">';
                    $JuegosCatalogo .= '<h5 class="card-title">' . $fila["titulo"] . '</h5>';
                    $JuegosCatalogo .= '<div class="accordion">';
                        $JuegosCatalogo .= '<h2 class="accordion-item">';
                            $JuegosCatalogo .= '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$fila["id_juegos"].'" aria-expanded="true" aria-controls="collapse'.$fila["id_juegos"].'">
                                                    Ver más
                                                </button>';
                        $JuegosCatalogo .= '</h2>';
                        $JuegosCatalogo .= '<div id="collapse'.$fila["id_juegos"].'" class="accordion-collapse collapse" data-bs-parent="#accordionExample">';
                            $JuegosCatalogo .= '<div class="accordion-body">';
                                $JuegosCatalogo .= '<p class="card-text"><strong>Objetivo: </strong> ' . $fila["objetivo"] . '</p>';
                                if(!empty($fila["medidas"])){
                                    $JuegosCatalogo .= '<p class="card-text"><strong>Medidas: </strong> ' . $fila["medidas"] . '</p>';
                                }
                                if(!empty($fila["material"])){
                                    $JuegosCatalogo .= '<p class="card-text"><strong>Material: </strong> ' . $fila["material"] . '</p>';
                                }
                                if(!empty($fila["edades"])){
                                    $JuegosCatalogo .= '<p class="card-text"><strong>Edades: </strong> ' . $fila["edades"] . '</p>';
                                }
                            $JuegosCatalogo .= '</div>';
                        $JuegosCatalogo .= '</div>';
                    $JuegosCatalogo .= '</div>';
                $JuegosCatalogo .= "</div>";
                $JuegosCatalogo .= "<div class='card-footer btnPlataforma'>";
                    $JuegosCatalogo .= "<p class='fs-3 text-center'><strong>Valor: </strong> $ <span class='font-monospace'>" . $preciovalor . "</span></p>";
                $JuegosCatalogo .= "</div>";
            $JuegosCatalogo .= "</div>";
        $JuegosCatalogo .= "</article>";
        
    }
    $JuegosCatalogo .= "</div>";
} else {
    $JuegosCatalogo .=  "0 resultados";
}
$link->close();
?>