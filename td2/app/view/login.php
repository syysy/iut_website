<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<?php
    if(isset($_COOKIE["name"])){
        $p= $_COOKIE["name"];
    }else{
        $p = "";
    }
?>
<form action="<?= CFG['siteURL'].'User/loginCheck'?>" method="post" >
    <tr>
    <p> Name : <input type="text" name="pseudo" value=<?= $p?>></p>
    <p> Password : <input type="text" name = "password"></p>
    <input type="submit">
    </tr>
</form>

</body>
</html>