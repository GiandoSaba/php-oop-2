<?php

require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Phone.php';
require_once __DIR__ . '/classes/Laptop.php';
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/CreditCard.php';

$user = new User('Giando', 'Sabato', 'giandosaba@mail.it', '850274');
$creditCard = new CreditCard('Giando Sabato', '1234-4567-8945-1234', '08/23', 518);

$phone = new Phone(1, 'iphoneX', 1000);
var_dump($phone);

try {
    $user->setPaymentMethod($creditCard);
} catch (TypeError $error) {
    echo $error->getMessage();
}

var_dump($user->getPaymentMethod());
