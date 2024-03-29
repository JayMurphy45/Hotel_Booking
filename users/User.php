<?php

class User
{
    //Declare Variables
    private $name;
    private $bookings;
    private $bookingDate;
    private $numOfGuests;

    /**
     * @param $name
     * @param $bookingDate
     */
    public function __construct($name, $bookingDate, $numOfGuests, $bookings)
    {
        $this->name = $name;
        $this->bookingDate = $bookingDate;
        $this->numOfGuests = $numOfGuests;
        $this->bookings = $bookings;
    }

    public function getNumOfGuests($numOfGuests)
    {
        return $this->numOfGuests;
    }


    public function getName($name, $bookingDate){
        $this->name = $name;
        $this->bookingDate = $bookingDate;
    }

    public function getBookingDate(){
        return $this->bookingDate;
    }

    public function editDateOfBooking($newBookingDate) {
        return $this->bookingDate = $newBookingDate;
    }

    public function editNumOfGuests($newNumOfGuests){
        return $this->numOfGuests = $newNumOfGuests;
    }

    public function cancel_booking($booking_id){
        foreach ($this->bookings as $i => $booking){
            if ($booking['id'] == $booking_id){
                array_splice($this ->bookings, $i, 1);
                echo "Booking $booking_id has been cancelled. \n";
                return;
            }
        }
        echo "Booking not found";
    }

    public function __toString(){
        $str = "User: \n";
        $str .= "Name: $this -> name \n";
        $str .= "Bookings: $this -> bookings \n";
        $str .= "Booking Date: $this -> bookingDate \n";
        $str .= "Number of guests: $this -> numOfGuests \n";

        return $str;
    }
}

