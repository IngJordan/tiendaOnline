<?php

class Conexion{

private $conect;

public function __contstruc(){
    $cadena = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";.DB_CHARSET.";
    try {

        $this->conect = new PDO($cadena,DB_USER,DB_PASSWORD);
        $this->conect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        /*echo 'conectado';
        $con = $this->conect->prepare("SELECT * FROM CATEGORIES");
        $con->execute();
        $data = $con->fetchAll(PDO::FETCH_ASSOC);
        echo depurarArray($data);*/

    } catch (PDOException $e) {
        $this->conect = 'Error de conexon';
        echo "Error: ".$e->getMessage();
    }
}

public function conect(){
    return $this->conect;
}

}



?>