<?php

class Booking
{
    private string $dateArrive;
    private int $durationDays;
    private int $discountCode;
    private int $total;

    public function __construct($dateArrive, $durationDays, $discountCode, $total){
            $this -> dateArrive = $dateArrive;
            $this -> durationDays = $durationDays;
            $this -> discountCode = $discountCode;
            $this -> total = $total;
    }


    public function applyDiscountCode($discountCode, $total)
    {
        if ($discountCode == true) {
            $this->total / 50;
        } else {
            echo 'Invalid code';
        }
    }


    /**
     * @return int
     */
    public function getDiscountCode(): int
    {
        return $this->discountCode;
    }

    /**
     * @param int $discountCode 
     * @return self
     */
    public function setDiscountCode(int $discountCode): self
    {
        $this->discountCode = $discountCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateArrive(): string
    {
        return $this->dateArrive;
    }

    /**
     * @param string $dateArrive 
     * @return self
     */
    public function setDateArrive(string $dateArrive): string
    {
        $this->dateArrive = $dateArrive;
        return $this;
    }

    /**
     * @return int
     */
    public function getDurationDays(): int
    {
        return $this->durationDays;
    }

    /**
     * @param int $durationDays 
     * @return self
     */
    public function setDurationDays(int $durationDays): self
    {
        $this->durationDays = $durationDays;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total 
     * @return self
     */
    public function setTotal(int $total): self
    {
        $this->total = $total;
        return $this;
    }

    public function __toString()
    {
        $str = "Booking: \n";
        $str .= "Date Arrive: $this -> dateArrive \n";
        $str .= "Duration (days): $this -> durationDays \n";
        $str .= "DiscountCode: $this -> discountCode \n";
        $str .= "Total: $this -> total \n";

        return $str;
    }
}
