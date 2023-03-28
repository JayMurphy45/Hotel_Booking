<?php

class Staff extends User
{
    private int $id;
    private String $firstName;
    private String $lastName;
    private int $phoneNumber;

    public function __construct($id, $firstName, $lastName, $phoneNumber){
        $this -> id = $id;
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> phoneNumber = $phoneNumber;
    }



	/**
	 * @return string
	 */
	public function getFirstName(): string {
		return $this->firstName;
	}

	/**
	 * @param string $firstName 
	 * @return self
	 */
	public function setFirstName(string $firstName): self {
		$this->firstName = $firstName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLastName(): string {
		return $this->lastName;
	}
	
	/**
	 * @param string $lastName 
	 * @return self
	 */
	public function setLastName(string $lastName): self {
		$this->lastName = $lastName;
		return $this;
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
	public function getPhoneNumber(): int {
		return $this->phoneNumber;
	}

	/**
	 * @param int $phoneNumber 
	 * @return self
	 */
	public function setPhoneNumber(int $phoneNumber): self {
		$this->phoneNumber = $phoneNumber;
		return $this;
	}

    public function __toString(){
        $str = "Staff:";
        $str = "id: $this -> id \n";
        $str .= "FirstName: $this -> firstName \n";
        $str .= "LastName: $this -> LastName \n";
        $str .= "phoneNumber: $this -> phoneNumber \n";


        return $str;
    }
}