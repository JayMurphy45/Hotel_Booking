<?php

class Guest
{
    public int $id;
    private String $firstname;

	public function __construct($id, $firstname){
		$this -> id = $id;
		$this -> firstname = $firstname;
	}


	/**
	 * @return string
	 */
	public function getFirstname(): string {
		return $this->firstname;
	}
	
	/**
	 * @param string $firstname 
	 * @return self
	 */
	public function setFirstname(string $firstname): self {
		$this->firstname = $firstname;
		return $this;
	}

	public function __toString(){
		$str = "Guest";
		$str .= "id: $this -> id \n";
		$str .= "first name: $this -> firstName \n";
		
		return $str;
	}
}