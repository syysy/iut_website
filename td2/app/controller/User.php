<?php
class User
{
private UserRepositoryInterface $repository;
private ProductRepositoryInterface $Dbrepository;
public function __construct()
{
$this->repository = new DbUserRepository();
$this->Dbrepository = new DbProductRepository();
}
function login(){
require "view".DIRECTORY_SEPARATOR."login.php";
}
function loginCheck(){
    $pseudo = $_POST['pseudo'];
    $password = $_POST ['password'];
    $user = $this->repository->findByPseudo($pseudo);
    if ($user !=null && $user->isValidPassword($password)) {
        $_SESSION["name"] = $pseudo;
        $_SESSION["status"] = $user->getStatus();
        $data = $this->Dbrepository->findAll();
        require "view".DIRECTORY_SEPARATOR."home.php";
    }
    else {
        echo("Fail");
        require "view".DIRECTORY_SEPARATOR."login.php";
    }
}
function logout(){
    session_destroy();
    $_SESSION["name"] = "";
    $_SESSION["status"] = "";
    $data = $this->Dbrepository->findAll();
    require "view".DIRECTORY_SEPARATOR."home.php";
    }
}