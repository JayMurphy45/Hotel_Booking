<?php

class Room
{
    private int $roomNum;
    private int $roomCapacity;
    private RoomType $room;

    public function __construct($roomNum,$roomCapacity,$room){
        $this -> roomNum = $roomNum;
        $this -> roomCapacity = $roomCapacity;
        $this -> room = $room;
    }

	/**
	 * @return int
	 */
	public function getRoomNum(): int {
		return $this->roomNum;
	}

	/**
	 * @param int $roomNum 
	 * @return self
	 */
	public function setRoomNum(int $roomNum): self {
		$this->roomNum = $roomNum;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getRoomCapacity(): int {
		return $this->roomCapacity;
	}

	/**
	 * @param int $roomCapacity 
	 * @return self
	 */
	public function setRoomCapacity(int $roomCapacity): self {
		$this->roomCapacity = $roomCapacity;
		return $this;
	}

	/**
	 * @return RoomType
	 */
	public function getRoom(): RoomType {
		return $this->room;
	}

	/**
	 * @param RoomType $room 
	 * @return self
	 */
	public function setRoom(RoomType $room): self {
		$this->room = $room;
		return $this;
	}

    public function __toString(){
        $str = "Room: \n";
        $str .= "Room Number: $this -> roomNum \n";
        $str .= "Room Capacity: $this -> roomCapacity \n";
        $str .= "Room Type: $this -> room \n";

        return $str;
    }
}



