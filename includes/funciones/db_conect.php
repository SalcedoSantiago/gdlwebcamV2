
<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "root");
    define("DB_DATABASE", "gdlwebcam");

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        if($conn->connect_error ){
            echo $error -> $conn->connect_error;
        }

?>