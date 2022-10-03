<?php

class Product {

    private ProductRepositoryInterface $repository;

    public function __construct()
 {
    //instanciation de l'attribut
 
    $this->repository = new DbProductRepository();
}

    public function display($params){
        $product = $this->repository->findById($params[0]);
        require "view".DIRECTORY_SEPARATOR."displayProduct.php";
    }

    public function add(){
        require "view".DIRECTORY_SEPARATOR."formAddProduct.php";
    }
    public function addProduct(){
        if (isset($_POST["id"],$_POST["name"],$_POST["price"],$_POST["quantity"] )){
            $product = new ProductEntity();
            $product->setId(intval($_POST["id"]));
            $product->setName($_POST["name"]);
            $product->setPrice(floatval($_POST["price"]));
            $product->setQuantity(intval($_POST["quantity"]));
            $res = $this->repository->add($product);
            $this->displayProduct($res);
        }else{
            echo("ERROR");
        }
    }

    public function displayProduct($product) {
        require "view".DIRECTORY_SEPARATOR."displayProduct.php";
    }

    public function update($params){
        if(count($params) > 1){
            echo("Il ne doit y avoir qu'un seul arguement");
        }
        $id = $params[0];
        $product = $this->repository->findById($id);
        require "view".DIRECTORY_SEPARATOR."updateProduct.php";
    }

     public function updateProduct(){
        if (isset($_POST["id"],$_POST["name"],$_POST["price"],$_POST["quantity"] )){
            $product = new ProductEntity();
            $product->setId(intval($_POST["id"]));
            $product->setName($_POST["name"]);
            $product->setPrice(floatval($_POST["price"]));
            $product->setQuantity(intval($_POST["quantity"]));
            $res = $this->repository->update($_POST["id"],$product);
            $this->displayProduct($res);
        }else{
            echo("ERROR");
        }
    }

    public function delete($params){
        if(count($params) > 1){
            echo("Il ne doit y avoir qu'un seul arguement");
        }
        $id = $params[0];
        $res = $this->repository->delete($id);
        if($res){
            $data = $this->repository->findAll();
           require "view".DIRECTORY_SEPARATOR."home.php";
        }else{
            echo("ERROR");
        }
    }
    
}

?>