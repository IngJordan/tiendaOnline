<?php

function base_url(){
    return BASE_URL;
}

function Assets(){
    return BASE_URL."Assets/";
}

function showErrors(){
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}

//formatea los array 
function depurarArray($data){
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}

function formatMoney($cantidad){
    $cantidad = number_format($cantidad,2,COMA,PUNTO);
    return $cantidad;
}


?>