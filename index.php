<?php 
require_once('./Config/routes.php');
require_once('./Helpers/Helpers.php');

//si existe la variable va a ser igual al valor y sino por default entra a home/home
$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home' ;
//se crea una variable con la funcion explode para que separe las funciones con /
$arrayUrl = explode("/",$url);
//se crea la variable controller que sea igual a 0 por si solo tiene una funcion en la url
$controller = $arrayUrl[0];
//se crea la variable method que sea igual a 0 por si solo tiene una funcion en la url
$method =  $arrayUrl[0];
//se crea la variable params vacio
$params = "";

//si existi la pocicion 1 del arrayUrl
if(!empty($arrayUrl[1])) {
    //si arrayUrl es diferente de vacio
    if ($arrayUrl[1] != "") {
        //la variable method va a ser igual a $arrayUrl[1]
        $method= $arrayUrl[1];
    }
}

//si existi la pocicion 2 del arrayUrl
if(!empty($arrayUrl[2])){
    //si arrayUrl es diferente de vacio
    if ($arrayUrl[2] != "") {
        /*for inicializado en 2 donde se almacenan los parametros,
        count para contar los parametros que entan en la url*/
        for ($i=2; $i < count($arrayUrl); $i++) { 
            //concatenar lo que tenga en el array $i y concatenar la ,
            $params .= $arrayUrl[$i].',';
        }
        //se elimina la ultima coma de la cadena $params y se guarda en la misma
        $params = trim($params,',');
    }
}

require_once("./Libraries/Core/Autoload.php");
require_once("./Libraries/Core/Load.php");

?>