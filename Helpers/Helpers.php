<?php

function base_url(){
    return BASE_URL;
}

function Assets(){
    return BASE_URL."Assets/";
}

//formatea los array 
function depurarArray($data){
    $format = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}


?>