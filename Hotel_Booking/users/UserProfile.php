<?php

class UserProfile extends User
{
    private int $id;
    private String $firstName;
    private String $lastName;
    private int $phoneNumber;
    private String $address;
    private int $roomNum;

    public function __construct($id, $firstName, $lastName, $phoneNumber, $address, $roomNum){
        $this -> id = $id;
        $this -> firstName = $firstName;
        $this -> lastName = $lastName;
        $this -> phoneNumber = $phoneNumber;
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
	 * @return string
	 */
	public function getAddress(): string {
		return $this->address;
	}

	/**
	 * @param string $address 
	 * @return self
	 */
	public function setAddress(string $address): self {
		$this->address = $address;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getRoomNum(): int {
		return $this->roomNum;
	}

    public function __toString(){
        $str = "User Profile: \n";
        $str .= "id: $this -> id \n";
        $str .= "first name: $this -> firstName \n";
        $str .= "last name: $this -> lastName \n";
        $str .= "Phone Number: $this -> phoneNumber \n";
        $str .= "Address: $this -> address \n";
        $str .= "Room Number: $this -> roomNum \n";

        return $str; 
    }
}