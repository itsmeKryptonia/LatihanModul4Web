<?php
include "Controller/ProductController.php";

use Controller\ProductController;

//DEKLARISKAN OBJEK CLASS
$productController = new productController;

//TAMPILAN HASIL KEMBALIAN DARI METHOD GETALLPRODUCT MENGGUNAKAN ECHO
echo $productController->getAllProduct();