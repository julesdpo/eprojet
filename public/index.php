<?php
require __DIR__ . '/../config/db.php';
require __DIR__ . '/../model/ProductModel.php';
require __DIR__ . '/../controller/ProductController.php';

$db = getDBConnection();
$model = new ProductModel($db);
$controller = new ProductController($model);
$controller->displayProducts();
?>