<?php 
include_once "abstract/paymenttypes.abstract.php";
include_once "classess/BuyProduct.class.php";

// abstract classes


$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();


?>