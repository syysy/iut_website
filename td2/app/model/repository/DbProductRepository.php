<?php

class DbProductRepository implements ProductRepositoryInterface{
    private $connexion;

    public function __construct(){
        $dsn = 'sqlite:'.CFG['db']['host'].CFG['db']['database'];
        $this->connexion = SPDO::getInstance($dsn, NULL, NULL,CFG['db']['options'],CFG['db']['exec'] )->getConnexion();
    }

    public function findAll():array {
        $statement = $this->connexion->prepare("Select * from product");
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_CLASS,"ProductEntity");

        return $data;
    }

    public function findById(int $id): ?ProductEntity{
        $statement = $this->connexion->prepare("Select * from product where id=:id");
        $statement->bindParam("id",$id);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_CLASS, 'ProductEntity');
        if (count($data) == 0){
            return null;
        }
        return $data[0];
    }

    public function add(ProductEntity $product):?ProductEntity{

        $insert = $this->connexion->prepare("insert into product values(:id,:name,:price,:quantity) ");
        $insert->bindValue("id",$product->getId());
        $insert->bindValue("name",$product->getName());
        $insert->bindValue("price",$product->getPrice());
        $insert->bindValue("quantity",$product->getQuantity());
        $res = $insert->execute(); 
         
        $prod = $this->findById($product->getId());
        return $prod; 

    }

    public function  update(int $id, ProductEntity $product):ProductEntity{
        $update = $this->connexion->prepare("update product set name=:name, price=:price, quantity=:quantity where id=:id");
        $update->bindValue("id",$id);
        $update->bindValue("name",$product->getName());
        $update->bindValue("price",$product->getPrice());
        $update->bindValue("quantity",$product->getQuantity());
        $res = $update->execute();
        $prod = $this->findById($id);
        return $prod;
    }

    public function delete(int $id): bool{
        $delete = $this->connexion->prepare("delete from product where id=:id");
        $delete->bindValue("id",$id);
        $res = $delete->execute();
        return $res;
    }

}

?>