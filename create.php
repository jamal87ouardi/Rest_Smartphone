<?php
    $requestMethod = $_SERVER["REQUEST_METHOD"];
    include('Rest.php');
    $api = new Rest();
    switch($requestMethod) {
        case 'GET':	
            $api->insertEmployee($_GET);
            break;
        default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
    }
?>