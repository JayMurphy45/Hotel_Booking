<?php

//shopping cart
function starsHtml($stars)
{
    switch ($stars) {
        case 0:
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;
        case 1:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;
        case 2:
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            print '<span class="fa fa-star disable"></span>';
            break;
            // and so on up to case 5
    }
}

function getAllProducts()
{
    $products = [];
    $products['010'] = [
        'name' => 'Sandwich',
        'description' => 'A filling, savoury snack of peanut butter and
jelly.',
        'price' => 1.00,
        'stars' => 4,
        'image' => 'peanut_butter.png'
    ];
    $products['025'] = [
        'name' => 'Slice of cheesecake',
        'description' => 'Treat yourself to a chocolate covered cheesecake
slice.',
        'price' => 2.00,
        'stars' => 5,
        'image' => 'chocolate_cheese_cake.png'
    ];
    $products['005'] = [
        'name' => 'Pineapple',
        'description' => 'A piece of exotic fruit.',
        'price' => 3.00,
        'stars' => 2,
        'image' => 'pineapple.png'
    ];
    $products['021'] = [
        'name' => 'Jelly Donut',
        'description' => 'The best type of donut - filled with sweet jam.',
        'price' => 4.50,
        'stars' => 3,
        'image' => 'jellydonut.png'
    ];
    $products['002'] = [
        'name' => 'Banana',
        'description' => 'The basis for a good smoothie and high in
potassium.',
        'price' => 0.50,
        'stars' => 5,
        'image' => 'banana.png'
    ];
    return $products;
}

function getShoppingCart()
{
    $cartItems = [];
    $cartItems['010'] = 2; // 2 sandwiches
    $cartItems['005'] = 4; // 4 pineapples
    return $cartItems;
}
