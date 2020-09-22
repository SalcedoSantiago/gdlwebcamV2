<section class="contenedor seccion head-invitados">
    <h2>Nuestos invitados</h2>
    <div class="img-programa">
        <img src="./img/separador.png" alt="">
    </div>
    <ul class="contenedor-invitados">
        <?php

        try {
            require_once('includes/funciones/db_conect.php');
            $sql = " SELECT * FROM invitados ";

            $resultado = $conn->query($sql);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        ?>


        <?php
        while ($invitados = $resultado->fetch_assoc()) { ?>
            <li class="flex-invitados">
                <a class="invitado-info" href="#invitados<?php echo $invitados['invitado_id'] ?>">
                    <div class="invitados">
                        <img src="./img/<?php echo $invitados['url_imagen'] ?>" alt="invitado">
                        <p><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado'] ?></p>
                    </div>
                </a>
            </li>
            <div style="display: none">
                <div class="invitado-info" id="#invitados<?php echo $invitados['invitado_id'] ?>">
                    <h2><?php echo $invitados['nombre_invitado'] ?></h2>
                    <img src="./img/<?php echo $invitados['url_imagen'] ?>" alt="invitado">
                    <p><?php echo $invitados['descripcion'] ?></p>
                </div>
            </div>
        <?php } ?>




        <?php
        $conn->close();
        ?>

    </ul>
</section>