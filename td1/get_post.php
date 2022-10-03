<?php 
if (isset($_GET["pseudo"]) ){
    foreach ($_GET as $clef=>$val) {
        echo nl2br("$clef : $val \n") ;
    }
}else{
    foreach ($_POST as $clef=>$val) {
        echo nl2br("$clef : $val \n") ;
    }
}
?>
