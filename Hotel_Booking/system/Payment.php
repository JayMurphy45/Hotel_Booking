<?php

class Payment
{
     private int $id;
     private int $amount;
     private int $date;

     public function __construct($id, $amount, $date){
            $this -> id = $id;
            $this -> amount = $amount;
            $this -> date = $date;
     }

     

	/**
	 * @return int
	 */
	public function getId(): int {
		return $this->id;
	}

	/**
	 * @param int $id 
	 * @return self
	 */
	public function setId(int $id): self {
		$this->id = $id;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getAmount(): int {
		return $this->amount;
	}

	/**
	 * @param int $amount 
	 * @return self
	 */
	public function setAmount(int $amount): self {
		$this->amount = $amount;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getDate(): int {
		return $this->date;
	}

	/**
	 * @param int $date 
	 * @return self
	 */
	public function setDate(int $date): self {
		$this->date = $date;
		return $this;
	}

    public function __toString(){
        $str = "Payment: \n";
        $str .= "id: $this -> id \n";
        $str .= "amount: $this -> amount \n";
        $str .= "date: $this -> date \n";

        return $str;
    }
}