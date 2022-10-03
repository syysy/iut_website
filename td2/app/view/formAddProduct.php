<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OMG ?</title>
</head>
<body>

    <form action="<?= CFG['siteURL'].'Product/addProduct'?>" method="post">
        <p> Id : <input type="text" name = "id" text = "Id"> </p>
        <p> Name : <input type="text" name="name"> </p>
        <p> Price : <input type="text" name = "price"> </p>
        <p> Quantity :<input type="text" name="quantity"> </p>
        <input type="submit">
    </form>

</body>
</html>