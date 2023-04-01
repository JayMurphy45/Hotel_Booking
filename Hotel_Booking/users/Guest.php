<?php

class Guest extends User
{
    private int $id;
    private String $firstname;
    private String $lastName;
    private String $phoneNumber;

    /**
     * @param int $id
     * @param String $firstname
     * @param String $phoneNumber
     */
    public function __construct(int $id, string $firstname, string $phoneNumber, string $lastName)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->phoneNumber = $phoneNumber;
        $this->lastName = $lastName;
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
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param String $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return String
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param String $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
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


    public function displayGuest(){
        echo "Guest Id: {$this->id}\n";
        echo "First Name: {$this->firstname}\n";
        echo "Last Name: {$this->lastName}\n";
        echo "Phone Number: {$this->id}\n";
    }


}