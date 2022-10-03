<?php
class Home
{
    private ProductRepositoryInterface $repository;
    private ProductRepositoryInterface $Dbrepository;

    //A terme, il n'y aura pas de echo dans un contrôleur
//Les echos seront dans les vues
 function index(){
    $data = $this->Dbrepository->findAll();
    require "view".DIRECTORY_SEPARATOR."home.php";
 }
 function method(){
 echo "method";
 }
 function methodeWithParameter(array $params){
 var_dump($params);
 }

 //Création d'un attribut pour accèder au modèle
 public function __construct()
 {
    //instanciation de l'attribut
    $this->repository = new MemoryProductRepository();
    $this->Dbrepository = new DbProductRepository();
}

}
?>