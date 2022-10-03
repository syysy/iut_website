<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Mon magasin</title>
</head>
<body>
<table>
<thead>
<a href="<?= CFG['siteURL'].'Home'?>"> Home </a>
</thead>
<tbody>
<?php if (is_null($product)):?> 
<td> Le produit n'existe pas </td>
<?php else: ?>
    <tr>
    <th> id </th>
    <th> name </th>
    <th> price </th>
    <th> quantity </th>
    </tr>
    <tr>
    <td> <?= $product->getId()?> </td>
    <td> <?= $product->getName()?> </td>
    <td> <?= $product->getPrice()?> </td>
    <td> <?= $product->getQuantity()?> </td>
    </tr>
<?php endif ?>
</tbody>
</table>
</body>
</html>