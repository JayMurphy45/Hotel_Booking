<?php

   class Receipt{

       public int $amountPaid;
       public int $uniqueReservationCode;
       private string $transactionDate;


       /**
        * @param string $transactionDate
        */
       public function setTransactionDate($transactionDate)
       {
           $this->transactionDate = $transactionDate;
       }

       public function __toString(): string
       {
           $this->amountPaid;
           $this->uniqueReservationCode;
           $this->transactionDate;

           return $this;
       }


   }