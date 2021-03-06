<?php
//crud de metodos de la base de datos

class Mysql extends Conexion{
    private $conexion;
    private $strquery;
    private $arrvalues;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conect();
    }

    //funcion de inserts
    public function insert(string $query, array $arrvalues){
        $this->strquery = $query;
        $this->arrvalues = $arrvalues;
        $insert = $this->conexion->prepare($this->strquery);
        $resInsert = $insert->execute($this->arrvalues);
        if ($resInsert) {
            $lastInsert = $this->conexion->lastInsertId();
        }else{
            $lastInsert=0;
        }
        return $lastInsert;
    }

    //funcion de un select
    public function select(string $query){
        $this->strquery = $query;
        $result = $this->conexion->prepare($this->strquery);
        $result->execute();
        $data = $result->fetch(PDO::FETCH_ASSOC);
        return $data;
    }    

    //funcion de devuelve todos los registros
    public function select_all(string $query){
        $this->strquery = $query;
        $result = $this->conect()->prepare($this->strquery);
        $result->execute();
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    //funcion de actualizar
    public function updadte(string $query, array $arrvalues){
        $this->strquery = $query;
        $this->arrvalues = $arrvalues;
        $update = $this->conexion->prepare($this->strquery);
        $resExecute = $update->execute($this->arrvalues);
        return $resExecute;
    }    

    //funcion de eliminar
    public function delete(string $query){
        $this->strquery = $query;
        $result =$this->conexion->prepare($this->strquery);
        $result->execute();
        return $result;
    }   

}

?>