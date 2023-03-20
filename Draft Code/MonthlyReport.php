<?php

class MonthlyReport extends Payment
{
    public function __toString(): string
    {
        $this->id;
        $this->amount;
        $this->date;

        return $this;
    }


}