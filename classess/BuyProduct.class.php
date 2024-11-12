<?php
 class BuyProduct extends Visa{

// public function __construct(){

// }

public function getPayment(){
    return $this->visaPayment();
}



}
?>