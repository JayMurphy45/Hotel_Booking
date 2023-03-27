<?php

class Manager extends User
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
	 * @param int $id 
	 * @return self
	 */
	public function setId(int $id): self {
		$this->id = $id;
		return $this;
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
        $str = "Manager: \n";
        $str .= "id: $this -> id \n";
        $str .= "first name: $this -> firstName \n";
        $str .= "last name: $this -> lastName \n";
        $str .= "Phone Number: $this -> phoneNumber \n";

        return $str;
    }

}
