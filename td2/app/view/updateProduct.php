<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Product</title>
</head>
<body>

    

    <form action="<?= CFG['siteURL'].'Product/updateProduct'?>" method="post" >
    <?php if (is_null($product)):?> 
    <td> Le produit n'existe pas </td>
    <?php else: ?>  
        <tr>
        <p> Id : <input type="hidden" name = "id" text = "Id" value = <?= $product->getId()?>></p>
        <p> Name : <input type="text" name="name" value = <?= $product->getName()?>></p>
        <p> Price : <input type="text" name = "price" value = <?= $product->getPrice()?>></p>
        <p> Quantity :<input type="text" name="quantity" value = <?= $product->getQuantity()?> ></p>
        <input type="submit">
        </tr>
     <?php endif?>
    </form>

</body>
</html>