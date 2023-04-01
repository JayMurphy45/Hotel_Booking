<?php

class UserProfile extends User {
    private int $id;
    private String $firstName;
    private string $lastName;
    private string $phoneNumber;
    private string $address;
    private Room $roomNum;

    /**
     * @param int $id
     * @param string $lastName
     * @param string $phoneNumber
     * @param string $address
     * @param Room $roomNum
     */
    public function __construct(int $id, string $lastName, string $phoneNumber, string $address, Room $roomNum, string $firstName)
    {
        $this->id = $id;
        $this->lastName = $lastName;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
        $this->roomNum = $roomNum;
        $this->firstName = $firstName;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @return Room
     */
    public function getRoomNum(): Room
    {
        return $this->roomNum;
    }

    /**
     * @param Room $roomNum
     */
    public function setRoomNum(Room $roomNum): void
    {
        $this->roomNum = $roomNum;
    }

    public function displayProfile(){
        echo "ID: {$this->id}\n";
        echo "First Name: {$this->firstName}\n";
        echo "Last Name: {$this->lastName} days\n";
        echo "Address: {$this->address}\n";
        echo "Room Number: {$this->roomNum->getRoomNumber()}\n";
    }


}
