<?php

class HomeModel extends Mysql {

    public function __construct(){

        parent::__contstruc();
    }
    
    public function Allcategories(){
        $sql = "SELECT * FROM `CATEGORIES`  WHERE type = 'principal' ";
        $request = $this->select_all($sql);
        return $request;
    }

    public function AllcategoriesSecundari(){
        $sql = "SELECT * FROM `CATEGORIES`  WHERE type = 'secundari' ";
        $request = $this->select_all($sql);
        return $request;
    }

    public function All(){
        $sql = "SELECT * FROM `CATEGORIES` ";
        $request = $this->select_all($sql);
        return $request;
    }

    public function Products(){
        $sql = "SELECT PRODUCTS.name,PRODUCTS.price,PRODUCTS.image,CATEGORIES.name  as categorie FROM PRODUCTS INNER JOIN CATEGORIES ON PRODUCTS.id_category = CATEGORIES.id_category ";
        $request = $this->select_all($sql);
        return $request;
    }
}

?>