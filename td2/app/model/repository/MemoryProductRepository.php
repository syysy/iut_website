<?php

class MemoryProductRepository implements ProductRepositoryInterface{

    public function findAll():array {
        $p1 = new ProductEntity(1,"p1",10.2,6);
        $p2 = new ProductEntity(2,"p2",13.2,8);
        $p3 = new ProductEntity(3,"p2",14.2,7);
        return array($p1,$p2,$p3);
    }
    public function findById(int $id): ?ProductEntity{
        
    }

}


?>