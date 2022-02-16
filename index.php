<?php

require_once __DIR__ . "/class/Product.php";
require_once __DIR__ . "/class/User.php";
require_once __DIR__ . "/class/CreditCard.php";

$buyer = new User("Giando", "Sabato");

$products = [];
$productOne = new Product("book", 9);
$productTwo = new Product("dvd", 18);

$buyer->setCart([$productOne]);

$buyer->setCreditCard(new CreditCard("1234-4567-8901-2345", "05/23"));

$buyer->setTotalCart();

$buyer->buyItemsCart();

var_dump($buyer);
