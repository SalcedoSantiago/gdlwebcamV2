<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="formulario">
        <h2>Pagos con Paypal</h2>
        <?php 
            $resultado = $_GET['exito'];
            if($resultado = "true"){
                echo "El pago se realizo correctamente";
                echo "el ID es {$paymentId}";
                $id_pago = $_GET['id_pago'];
                require_once 'includes/funciones/db_conect.php';
                try{
                    $stmt = $conn->prepare("UPDATE registados SET pagados = ? WHERE id_registro = ?");
                    $pagado = 1;
                    $stmt->bind_param("ii",$pagado,$id_pago);
                }
            }else{
                echo "Hubo un Error con el pago";
            }
        ?>
    </div>
</body>


</html>