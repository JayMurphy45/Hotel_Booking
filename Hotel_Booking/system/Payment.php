<?php

class Payment
{
     private int $paymentID;
     private string $cardNum;
     private int $amount;
     private string $date;

    /**
     * @param int $paymentID
     * @param string $cardNum
     * @param int $amount
     * @param string $date
     */
    public function __construct(int $paymentID, string $cardNum, int $amount, string $date)
    {
        $this->paymentID = $paymentID;
        $this->cardNum = $cardNum;
        $this->amount = $amount;
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getPaymentID(): int
    {
        return $this->paymentID;
    }

    /**
     * @param int $paymentID
     */
    public function setPaymentID(int $paymentID): void
    {
        $this->paymentID = $paymentID;
    }

    /**
     * @return string
     */
    public function getCardNum(): string
    {
        return $this->cardNum;
    }

    /**
     * @param string $cardNum
     */
    public function setCardNum(string $cardNum): void
    {
        $this->cardNum = $cardNum;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }




}