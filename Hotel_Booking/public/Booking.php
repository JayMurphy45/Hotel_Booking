<?php

class Booking
{
    private int $resId;
    private string $dateArrive;
    private int $durationDays;
    private string $discountCode;
    private Room $roomNum;
    private Payment $paymentId;

    /**
     * @param int $resId
     * @param string $dateArrive
     * @param int $durationDays
     * @param string $discountCode
     * @param Room $roomNum
     * @param Payment $paymentId
     */
    public function __construct(int $resId, string $dateArrive, int $durationDays, string $discountCode, Room $roomNum, Payment $paymentId)
    {
        $this->resId = $resId;
        $this->dateArrive = $dateArrive;
        $this->durationDays = $durationDays;
        $this->discountCode = $discountCode;
        $this->roomNum = $roomNum;
        $this->paymentId = $paymentId;
    }

    /**
     * @return int
     */
    public function getResId(): int
    {
        return $this->resId;
    }

    /**
     * @param int $resId
     */
    public function setResId(int $resId): void
    {
        $this->resId = $resId;
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
     */
    public function setDateArrive(string $dateArrive): void
    {
        $this->dateArrive = $dateArrive;
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
     */
    public function setDurationDays(int $durationDays): void
    {
        $this->durationDays = $durationDays;
    }

    /**
     * @return string
     */
    public function getDiscountCode(): string
    {
        return $this->discountCode;
    }

    /**
     * @param string $discountCode
     */
    public function setDiscountCode(string $discountCode): void
    {
        $this->discountCode = $discountCode;
    }

    /**
     * @return Room
     */
    public function getRoomNum(): Room
    {
        return $this->roomNum;
    }

    /**
     * @param Room $roomNum
     */
    public function setRoomNum(Room $roomNum): void
    {
        $this->roomNum = $roomNum;
    }

    /**
     * @return Payment
     */
    public function getPaymentId(): Payment
    {
        return $this->paymentId;
    }

    /**
     * @param Payment $paymentId
     */
    public function setPaymentId(Payment $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    public function displayBooking(): void
    {
        echo "Reservation ID: {$this->resId}\n";
        echo "Arrival Date: {$this->dateArrive}\n";
        echo "Duration: {$this->durationDays} days\n";
        echo "Discount Code: {$this->discountCode}\n";
        echo "Room Number: {$this->roomNum->getRoomNumber()}\n";
        echo "Payment ID: {$this->paymentId->getPaymentId()}\n";
    }
}

?>
