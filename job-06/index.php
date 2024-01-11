<?php
require_once 'Product.php';
require_once 'Category.php';

$categ = new Category();
$categ->setId(7);
$products = $categ->getProducts();

var_dump($products);


// id : 7
// category_id : 7
// name : teeshirt
// photos : {"photos1": "teeshirt.png", "photos2": "teeshirt2.png"}
// price : 2500
// description : Un tres beau teeshirt
// quantity : 8
// createdAt :
// updatedAt :

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>