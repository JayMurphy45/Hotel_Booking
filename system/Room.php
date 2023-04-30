<?php

class Room
{
    private int $roomNum;
    private int $roomCapacity;
    private RoomType $room;

    /**
     * @param int $roomNum
     * @param int $roomCapacity
     * @param RoomType $room
     */
    public function __construct(int $roomNum, int $roomCapacity, RoomType $room)
    {
        $this->roomNum = $roomNum;
        $this->roomCapacity = $roomCapacity;
        $this->room = $room;
    }

    /**
     * @return int
     */
    public function getRoomNum(): int
    {
        return $this->roomNum;
    }

    /**
     * @param int $roomNum
     */
    public function setRoomNum(int $roomNum): void
    {
        $this->roomNum = $roomNum;
    }

    /**
     * @return int
     */
    public function getRoomCapacity(): int
    {
        return $this->roomCapacity;
    }

    /**
     * @param int $roomCapacity
     */
    public function setRoomCapacity(int $roomCapacity): void
    {
        $this->roomCapacity = $roomCapacity;
    }

    /**
     * @return RoomType
     */
    public function getRoom(): RoomType
    {
        return $this->room;
    }

    /**
     * @param RoomType $room
     */
    public function setRoom(RoomType $room): void
    {
        $this->room = $room;
    }







    /**
     * @return string
     */
    public function __toString(): string
    {
        return "RoomNum: {$this->roomNum}, RoomCapacity: {$this->roomCapacity}, Room: {$this->room}";
    }
}
