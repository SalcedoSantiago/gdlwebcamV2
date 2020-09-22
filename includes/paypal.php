<?php
    
    require 'paypal/autoload.php';

    define('URL_SITIO', 'http://localhost:8888/gdlwebcam');

    $apiContex = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
        'AVpcVkvmoglPrKTsCFOkt9613C1IxFOQDBlwuUadp39HJJnTsFfRgZEdQA-i675YkJOFFg7Vhz9BYWz3',
        'EDlAm4PQxkyrj2FygjEmyAOJEpJ8hdgljFIFqVw0TxeT6XZ9F6qp6gJW8f0DfHb-q0tjpM0GTF2JLX2G'
        )
        );