<?php
include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/../traits/DeviceAttribute.php';

class Laptop extends Product
{
    use DeviceAttribute;
}
