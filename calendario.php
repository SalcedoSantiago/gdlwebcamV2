<?php include_once 'includes/templates/header.php'; ?>

<?php

try {
    require_once('includes/funciones/db_conect.php');
    $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, nombre_event, icono , nombre_invitado, apellido_invitado ";
    $sql .= " FROM eventos ";
    $sql .= " INNER JOIN categoria_evento ";
    $sql .= " ON eventos.id_cat_evento = categoria_evento.cat_id ";
    $sql .= " INNER JOIN invitados ";
    $sql .= " ON eventos.id_inv = invitados.invitado_id ";
    $sql .= " ORDER BY evento_id ";
    $resultado = $conn->query($sql);
} catch (\Exception $e) {
    echo $e->getMessage();
}
?>


<section class="seccion contenedor">
    <h2>Calendario</h2>
    <div class="img-center">
        <img src="./img/separador.png" alt="">
    </div>
    <?php
    $calendario = array();
    while ($eventos = $resultado->fetch_assoc()) {
        $fechas = $eventos['fecha_evento'];
        $evento = array(
            'titulo' => $eventos['nombre_evento'],
            'fecha' => $eventos['fecha_evento'],
            'hora' => $eventos['hora_evento'],
            'categoria' => $eventos['nombre_event'],
            'icono' => 'fa' . ' ' . $eventos['icono'],
            'invitado' => $eventos['nombre_invitado'] . " " . $eventos['apellido_invitado']
        );
        $calendario[$fechas][] = $evento;
    }


    foreach ($calendario as $dia => $lista_evento) { ?>
        <div class="calendarios">
            <h3 class="contenedor">
                <i class="fa fa-calendar"></i>
                <?php

                echo strftime("%A, %d de %B del %Y", strtotime($dia));

                ?>
            </h3>

            <?php foreach ($lista_evento as $evento) { ?>
                <div class="dia">

                    <p class="titulo"><?php echo $evento['titulo'] ?></p>
                    <p class="hora"><i class="fa fa-clock-o"></i><?php echo $evento['fecha'] . " " . $evento['hora']; ?></p>
                    <p class=""><i class="<?php echo $evento['icono']; ?>"></i><?php echo $evento['categoria']; ?></p>
                    <p><i class="fa fa-user"></i><?php echo $evento['invitado']; ?></p>


                </div>
            <?php } ?>

        </div>

    <?php } ?>


    <?php
    $conn->close();
    ?>


</section>


<?php include_once 'includes/templates/footer.php'; ?>