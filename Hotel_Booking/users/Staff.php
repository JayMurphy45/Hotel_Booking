<?php

class Staff extends User
{
    private int $id;
    private String $firstName;
    private String $lastName;
    private int $phoneNumber;

    /**
     * @param int $id
     * @param String $firstName
     * @param String $lastName
     * @param int $phoneNumber
     */
    public function __construct(int $id, string $firstName, string $lastName, int $phoneNumber)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param String $firstName
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return String
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param String $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return int
     */
    public function getPhoneNumber(): int
    {
        return $this->phoneNumber;
    }

    /**
     * @param int $phoneNumber
     */
    public function setPhoneNumber(int $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function displayStaff(){
        echo "Staff ID: {$this->id}\n";
        echo "First Name: {$this->firstName}\n";
        echo "Last Name: {$this->lastName} \n";
        echo "Phone Number: {$this->phoneNumber}\n";
    }


}