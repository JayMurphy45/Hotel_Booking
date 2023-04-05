<?php

   class Receipt extends Payment {
       public function displayReceipt(){
           echo "Payment ID: {$this->getPaymentID()}";
           echo "Card Number: {$this->getCardNum()}";
           echo "Amount: {$this->getAmount()}";
           echo "Date: {$this->getDate()}";

       }
   }
