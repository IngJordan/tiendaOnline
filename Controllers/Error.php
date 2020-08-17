<?php 

class Errors extends Controllers{
    public function __construct()
    {
        parent::__construct();
        
    }
    public function notFount(){
        $this->views->getView($this,"error");
    } 
}

$notFount = new Errors();
$notFount->notFount();


?>