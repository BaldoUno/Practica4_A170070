<?php
    require_once "lib/nusoap.php";
    function getFrutas($datos){
        if($datos == "Frutas"){
            return join(",", array(
                "Plátano".'<br>'.
                "Uva".'<br>'.
                "Piña".'<br>'.
                "Fresa".'<br>'.
                "Sandía".'<br>'.
                "Manzana".'<br>'.
                "Toronja".'<br>'.
                "Arándano".'<br>'.
                "Mango".'<br>'.
                "Aguacate".'<br>'.
                "Granada".'<br>'.
                "Limon".'<br>'.
                "Aceituna".'<br>'.
                "Naranja".'<br>'.
                "Guayaba".'<br>'.
                "Papaya".'<br>'.
                "Cereza".'<br>'.
                "Mora"
            ));
        }
        else{
            return "No hay FRUTAS";
        }
    }
    $server = new soap_server();
    $server->register("getFrutas");
    if(!isset ($HTTP_RAW_POST_DATA))$HTTP_RAW_POST_DATA= file_get_contents('php://input');
        $server->service($HTTP_RAW_POST_DATA);
?>