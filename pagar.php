<?php

    use PayPal\Api\Amount;
    use PayPal\Api\Item;
    use PayPal\Api\ItemList;
    use PayPal\Api\Payer;
    use PayPal\Api\Payment;
    use PayPal\Api\RedirectUrls;
    use PayPal\Api\Transaction;

    if (!isset($_POST['submit'])) {
        exit('error');
    }

    require 'includes/paypal.php';
    if(isset($_POST['submit'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $fecha = date('Y-m-d H:i:s');
        $total = $_POST['total_pedido'];
        $regalo = $_POST['regalo'];
        
        $boletos = $_POST['boletos'];
        $numero_boletos = $boletos;
        $camisas = $_POST['pedido_extra']['camisas']['cantidad'];
        $precio_camisas = $_POST['pedido_extra']['camisas']['precio'];
        $paquetes = $_POST['pedido_extra']['paquetes']['cantidad'];
        $precio_paquetes = $_POST['pedido_extra']['paquetes']['precio'];
        $pedido_extra = $_POST['pedido_extra'];

        $totales = array(
            'paquetes' => $paquetes,
            'camisas' => $camisas,
            'boletos' => $boletos,
            'precio_cam' => $precio_camisas,
            'precio_paq' => $precio_paquetes
        );

        require_once 'includes/funciones/funciones.php';
        $pedido = ConverJson($boletos, $camisas, $paquetes);
        $registro = $_POST['registro'];
        $eventos = Eventos_json($registro);
   
    }
    try {
        require_once 'includes/funciones/db_conect.php';
        $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos ,talleres_registrados,
            regalo, total_pagado ) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $eventos, $regalo, $total);
        $stmt->execute();
        $id_registros = $stmt->insert_id;
        $stmt->close();
        $conn->close();
        
    } catch (Exception $e) {
        echo $e->getMessage();;
    }
    $compra = new Payer();
    $compra->setPaymentMethod('paypal');

    $articulo = new Item();
    $articulo->setName($producto)
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($precio);
    
    $i = 0;
    $articulos = array();
    foreach($numero_boletos as $key => $value) {
        if((int) $value['cantidad'] > 0){
            ${"articulo$i"} = new Item();
            $articulos[] = ${"articulo$i"};
            ${"articulo$i"}->setName('Pase: ' . $key)
                            ->setCurrency('USD')
                            ->setQuantity((int) $value['cantidad'])
                            ->setPrice((int) $value['precio']);     
        $i++;
        }   
    }
    foreach($pedido_extra as $key => $value){
        if((int) $value['cantidad'] > 0){
            if($key == 'camisas'){
                $precio = (float) $value['precio'] * .93;
            }else{
                $precio = (int) $value['precio'];
            }
        ${"articulo$i"} = new Item();
        $articulos[] = ${"articulo$i"};
        ${"articulo$i"}->setName('Extra: ' . $key)
                        ->setCurrency('USD')
                        ->setQuantity((int) $value['cantidad'])
                        ->setPrice($precio);
        $i++;
        }
    }


    $listaArticulo = new ItemList();
    $listaArticulo->setItems($articulos);


    $cantidad = new Amount();
    $cantidad->setCurrency('USD')
            ->setTotal($total);

    $transaccion = new Transaction();
    $transaccion->setAmount($cantidad)
                ->setItemList($listaArticulo)
                ->setDescription('Pago Gdlwebcam')
                ->setInvoiceNumber($id_registros);

    $redireccionar = new RedirectUrls();
    $redireccionar->setReturnUrl(URL_SITIO . "/pago_finalizado.php?exito=true&id_pago={$id_registros}")
                  ->setCancelUrl(URL_SITIO . "/pago_finalizado.php?exito=false&id_pago={$id_registros}");

    $pago = new Payment();
    $pago->setIntent("sale")
        ->setPayer($compra)
        ->setRedirectUrls($redireccionar)
        ->setTransactions(array($transaccion));


    try{
        $pago->create($apiContex);
    } catch(Paypal\Exception\PayPalConnectionException $pce){
        echo "<pre>";
        print_r(json_decode($pce->getData()));
        exit;
        echo "</pre>";
    }

    $aprobado = $pago->getApprovalLink();

    header("Location: {$aprobado}");
    


