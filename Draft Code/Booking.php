<?php

class Booking
{
    public int $dateArrive;
    public int $durationDays;
    public int $discountCode;
    public int $total;




    public function __toString(): string
    {
        $this->dateArrive;
        $this->durationDays;
        $this->discountCode;

        return $this;
    }

    public function applyDiscountCode($discountCode, $total){
        if ($discountCode == true){
            $this->total / 50;
        }
        else{
            echo 'Invalid code';
        }
    }




}