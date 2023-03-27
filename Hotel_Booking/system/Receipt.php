<?php

   class Receipt{

       private int $amountPaid;
       private int $uniqueReservationCode;
       private string $transactionDate;

       public function __construct($amountPaid, $uniqueReservationCode, $transactionDate){
            $this -> amountPaid = $amountPaid;
            $this -> uniqueReservationCode = $uniqueReservationCode;
            $this -> transactionDate = $transactionDate;
       }

   
	/**
	 * @return int
	 */
	public function getAmountPaid(): int {
		return $this->amountPaid;
	}

	/**
	 * @param int $amountPaid 
	 * @return self
	 */
	public function setAmountPaid(int $amountPaid): self {
		$this->amountPaid = $amountPaid;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getUniqueReservationCode(): int {
		return $this->uniqueReservationCode;
	}

	/**
	 * @param int $uniqueReservationCode 
	 * @return self
	 */
	public function setUniqueReservationCode(int $uniqueReservationCode): self {
		$this->uniqueReservationCode = $uniqueReservationCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTransactionDate(): string {
		return $this->transactionDate;
	}

    public function __toString(){
        $str = "Receipt: \n";
        $str .= "amount paid: $this -> amountPaid\n";
        $str .= "unique reservation code: $this -> uniqueReservationCode\n";
        $str .= "tranzactionDate: $this -> tranzactionDate";

        return $str;
    }
}