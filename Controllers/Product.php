<?php 

class Product extends Controllers{

    public function __construct()
    {
        parent::__construct();
        
    }

    public function product(){
        $data['page_title'] = "Productos";
        $this->views->getView($this,"product",$data);
    }

}


?>