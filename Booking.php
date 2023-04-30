<?php

class Booking
{
    private int $resId;
    private string $dateArrive;
    private int $durationDays;
    private string $discountCode;
    private Room $roomNum;
    private Payment $paymentId;

    /**
     * @param int $resId
     * @param string $dateArrive
     * @param int $durationDays
     * @param string $discountCode
     * @param Room $roomNum
     * @param Payment $paymentId
     */
    public function __construct(int $resId, string $dateArrive, int $durationDays, string $discountCode, Room $roomNum, Payment $paymentId)
    {
        $this->resId = $resId;
        $this->dateArrive = $dateArrive;
        $this->durationDays = $durationDays;
        $this->discountCode = $discountCode;
        $this->roomNum = $roomNum;
        $this->paymentId = $paymentId;
    }

    /**
     * @return int
     */
    public function getResId(): int
    {
        return $this->resId;
    }

    /**
     * @param int $resId
     */
    public function setResId(int $resId): void
    {
        $this->resId = $resId;
    }

    /**
     * @return string
     */
    public function getDateArrive(): string
    {
        return $this->dateArrive;
    }

    /**
     * @param string $dateArrive
     */
    public function setDateArrive(string $dateArrive): void
    {
        $this->dateArrive = $dateArrive;
    }

    /**
     * @return int
     */
    public function getDurationDays(): int
    {
        return $this->durationDays;
    }

    /**
     * @param int $durationDays
     */
    public function setDurationDays(int $durationDays): void
    {
        $this->durationDays = $durationDays;
    }

    /**
     * @return string
     */
    public function getDiscountCode(): string
    {
        return $this->discountCode;
    }

    /**
     * @param string $discountCode
     */
    public function setDiscountCode(string $discountCode): void
    {
        $this->discountCode = $discountCode;
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

    /**
     * @return Payment
     */
    public function getPaymentId(): Payment
    {
        return $this->paymentId;
    }

    /**
     * @param Payment $paymentId
     */
    public function setPaymentId(Payment $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    public function displayBooking(): void
    {
        echo "Reservation ID: {$this->resId}\n";
        echo "Arrival Date: {$this->dateArrive}\n";
        echo "Duration: {$this->durationDays} days\n";
        echo "Discount Code: {$this->discountCode}\n";
        echo "Room Number: {$this->roomNum->getRoomNum()}\n";
        echo "Payment ID: {$this->paymentId->getPaymentId()}\n";
    }
}

/*
Shopping cart Functionality
*/
require_once __DIR__ . '/functions.php';

$products = [];
$products[] = [
    'name' => 'Single',
    'description' => 'Single Room',
    'price' => '200',
    'stars' => 4,
    'image' => 'Images/SingleRoom.avif'
];

$products[] = [
    'name' => 'Double',
    'description' => 'Double Room',
    'price' => '400',
    'stars' => 4,
    'image' => 'Images/DoubleRoom.avif'
];

$products[] = [
    'name' => 'Suite',
    'description' => 'Double Room',
    'price' => '400',
    'stars' => 4,
    'image' => 'Images/DoubleRoom.avif'
];

require_once __DIR__ . '/functions.php';
$products = getAllProducts();
$cartItems = getShoppingCart();
// choose page to display
$page = 'list.php';
$action = filter_input(INPUT_GET, 'action');
if ('cart' == $action) {
    // if found, change template file to be displayed
    $page = 'checkout.php';
}
?>

<?php require("Layouts/Header.php"); ?>
<!-- For each to represent stars for rooms -->
<?php
foreach ($products as $id => $product) 
    $price = number_format($product['price'], 2)
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Booking</title>
    <link rel="stylesheet" href="public/css/form.css">
</head>
<body>

<h1>Booking Page</h1>

<h2>Single Room</h2>
<img src="Images/SingleRoom.avif" alt="Single Room" height="250" width="250" class="center">
<p>Room Capacity: 1</p>
<p>This room is a very cosy delight for those who plan to stay alone for 1 or 2 days.</p>
<form method="post" action="/?action=addToCart&id=<?= $id
                                                    ?>" style="display: center">
    <button class="btn btn-primary btn-sm">Add To Cart</button>
</form>

<h2>Double Room</h2>
<img src="Images/DoubleRoom.jpg" alt="Double Room" height="250" width="250" class="center">
<p>Room Capacity: 2</p>
<p>This room is a very roomy closure for two people to spend there time it comes with one double bed (Can be seperated) a bathroom and larger than average wardrobe for 2 people to share.</p>
<form method="post" action="/?action=addToCart&id=<?= $id
                                                    ?>" style="display: center">
    <button class="btn btn-primary btn-sm">Add To Cart</button>
</form>

<h2>Suite</h2>

<div class="center">
<img src="Images/Suite.jpg" alt="Suite" height="250" width="250" >
</div>

<p>Room Capacity: 4</p>
<p>This is our top of the line room for those who have multiple friends it consists of 4 bedrooms 3 bathrooms and 4 walk in wardrobes. This room is 2 floored and consists of our first class snackbar(anything taken will be added to your bill)</p>
<form method="post" action="/?action=addToCart&id=<?= $id
                                                    ?>" style="display: center">
    <button class="btn btn-primary btn-sm">Add To Cart</button>
</form>

<p>Please select in our <a href="CheckOut.php">checkout</a> page</p class="bottom>

</body>
</html>

<?php require("Layouts/Footer.php") ?>