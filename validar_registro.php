<?php
if (isset($_POST['submit'])) :
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $fecha = date('Y-m-d H:i:s');
    $total = $_POST['total_pedido'];
    $regalo = $_POST['regalo'];
    $boletos = $_POST['boletos'];
    $camisas = $_POST['pedido_camisas'];
    $paquetes = $_POST['pedido_paquetes'];
    require_once 'includes/funciones/funciones.php';
    $pedido = ConverJson($boletos, $camisas, $paquetes);
    $registro = $_POST['registro'];
    $eventos = Eventos_json($registro);
    try {
        require_once 'includes/funciones/db_conect.php';
        $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos ,talleres_registrados,
            regalo, total_pagado ) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $eventos, $regalo, $total);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("Location: validar_registro.php?exitoso=1");
    } catch (Exception $e) {
        echo $e->getMessage();;
    }
endif;
?>
<?php include_once 'includes/templates/header.php'; ?>
<div class="contenedor seccion">

    <h2>Registro</h2>
    <div class="img-programa">
        <img src="./img/separador.png" alt="">
    </div>
    <?php
        if(isset($_GET['exitoso'])):
            if($_GET['exitoso']== "1"){
            echo '<h3 class="exito-registro">Logeado Con Exito Mi Pana</h3>';
            }else{
            echo '<h3 class="exito-registro">Ha ocurrido un Error Mi Panita</h3>';
            }
        endif;
    ?>



</div>



<?php include_once 'includes/templates/footer.php'; ?>