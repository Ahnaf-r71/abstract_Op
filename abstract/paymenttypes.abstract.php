<?php 

//nothing is accessing this except visa class  
abstract class Visa {
        public function visaPayment(){
            return "Perform a Payment";
        }

        abstract public function getPayment();
    }

?>