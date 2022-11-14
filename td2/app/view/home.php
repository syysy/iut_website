<?php
    if(isset($_SESSION["name"],$_SESSION["status"])){
        $p= $_SESSION["name"];
        $status = $_SESSION["status"];
    }else{
        $p = "";
        $status ="";
    }
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Mon magasin</title>
</head>
<body>
<table>
<thead>
<tr>

<a href="<?= CFG['siteURL'].'User/login'?>"> Login</a>
<br>
<a href="<?= CFG['siteURL'].'User/logout'?>"> LogOut</a>

</tr>
</thead>
<tbody>


<?php if($status == 'Administrator'):?>
    <p> Connected as <?=$_SESSION["name"]?></p>

    <a href="<?= CFG['siteURL'].'Product/add'?>"> Add Product</a>

    <th> id </th>
    <th> name </th>
    <th> price </th>
    <th> quantity </th>
    <th> modify </th>
    <th> delete </th>
    <?php foreach ($data as $product):?>
        <tr>
        <td> <?= $product->getId()?> </td>
        <td> <?= $product->getName()?> </td>
        <td> <?= $product->getPrice()?> </td>
        <td> <?= $product->getQuantity()?> </td>
        <td> <a href="<?= CFG['siteURL'].'Product/update/'.strval($product->getId())?>"> modify </a> </td>
        <td> <a href="<?= CFG['siteURL'].'Product/delete/'.strval($product->getId())?>"> delete </a> </td>
        <td></td>
        </tr>
    <?php endforeach?>
<?php else:?>
    <th> id </th>
    <th> name </th>
    <th> price </th>
    <th> quantity </th>
    <?php foreach ($data as $product):?>
        <tr>
        <td> <?= $product->getId()?> </td>
        <td> <?= $product->getName()?> </td>
        <td> <?= $product->getPrice()?> </td>
        <td> <?= $product->getQuantity()?> </td>
        <td></td>
        </tr>
    <?php endforeach?>
<?php endif?>
</tbody>
</table>
</body>
</html>