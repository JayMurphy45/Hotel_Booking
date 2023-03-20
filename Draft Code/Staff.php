<?php

class Staff
{
    public int $id;
    private String $firstName;
    private String $lastName;
    public int $phoneNumber;

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


}