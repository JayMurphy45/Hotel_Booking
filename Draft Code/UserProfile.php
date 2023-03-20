<?php

class UserProfile
{
    public int $id;
    private String $firstName;
    private String $lastName;
    public int $phoneNumber;
    private String $address;
    public int $roomNum;

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
     * @return String
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param String $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function __toString(): string
    {
        $this->id;
        $this->firstName;
        $this->lastName;
        $this->phoneNumber;
        $this->address;
        $this->roomNum;

        return $this;
    }


}