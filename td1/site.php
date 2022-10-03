<?php

session_start();
if(isset($_SESSION["name"], $_SESSION["status"])){
    if($_SESSION["status"] == "visitor"){
        echo $_SESSION["name"], "consulter";
    }else if($_SESSION["status"] == "customer"){
        echo $_SESSION["name"], "consulter,acheter";
    }else if($_SESSION["status"] == "administrator"){
        echo $_SESSION["name"], "consulter,acheter,administrer";
    }
}else{
    echo "Accès refusé";
}

?>