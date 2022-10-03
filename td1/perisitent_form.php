<?php
    if(isset($_COOKIE["name"])){
        $p= $_COOKIE["name"];
    }else{
        $p = "";
    }
?>
<form action="authencicate.php" method = "post">
    <p> Pseudo : <input type="text" name="name" value="<?= $p?>"></p>

    <p> Password : <input type="password" name="pass"></p>
    <input type="submit">

</form>