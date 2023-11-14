<?php
include "Controler/ProductController.php";

use Controller\ProductController;

$productController = new ProductController;

echo $productController->getAllProduct();
?>