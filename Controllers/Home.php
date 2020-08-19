<?php 

class Home extends Controllers{

    public function __construct()
    {
        parent::__construct();
        
    }

    public function home(){
        $data['page_title'] = "Bievenido | Inicio";
        $categories = $this->model->Allcategories();
        $categoriessecu = $this->model->AllcategoriesSecundari();
        $data['categories'] = $categories;
        $data['categoriesSecu'] = $categoriessecu;

        $allcategories = $this->model->All();
        $data['allcategories'] = $allcategories;

        $products = $this->model->Products();
        $data['products'] = $products;

        $this->views->getView($this,"home",$data);
    }

 
}


?>