<?php

class CheckOut
{
    private bool $checkIn;
    private bool $checkOut;
}
?>

<?php require_once('Layouts/Header.php'); ?>

<div class="row">
    <div class="col font-weight-bold text-center">
        Image
    </div>
    <div class="col font-weight-bold">
        Item
    </div>
    <div class="col font-weight-bold text-right">
        Price
    </div>
    <div class="col font-weight-bold text-center">
        Quantity
    </div>
    <div class="col font-weight-bold text-right">
        Subtotal
    </div>
    <div class="col font-weight-bold">
        Action
    </div>
</div>


<?php require_once('Layouts/Footer.php'); ?>