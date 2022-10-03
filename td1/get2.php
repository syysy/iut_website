<!--
pseudo : 
<?php
echo $_GET["pseudo"];   
?>
<br>
password : 
<?php
echo $_GET["password"];   
?>
<br>
statut : 
<?php
echo $_GET["statut"];   
?><br>
-->
<?php
foreach ($_GET as $clef=>$val) {
    echo nl2br("$clef : $val \n") ;
}

?>