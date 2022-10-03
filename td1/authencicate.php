<?php 
    if(isset($_POST["name"])){
        setcookie("name", $_POST["name"]);
    }
    if (isset($_POST["name"], $_POST["pass"])) {
        $users = array(
            "mama" => array("pass" => "momo", "status" => "visitor"),
            "jean" => array("pass" => "jojo", "status" => "customer"),
            "admin" => array("pass" => "admin", "status" => "administrator")
        );
        if (array_key_exists($_POST["name"],$users) and $users[$_POST["name"]]["pass"] == $_POST["pass"]) {
            session_start();
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["status"] = $users[$_POST["name"]]["status"];
            header("Location: site.php");
        } else {
            header("Location: perisitent_form.php");
        }
    }else {
        header("Location: perisitent_form.php");
    }
?>
