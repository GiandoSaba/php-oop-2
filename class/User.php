<?php

require_once __DIR__ . "/Product.php";

class User
{
    protected $name;
    protected $surname;
    protected $address;
    protected $age;
    protected $creditCard;
    protected $cart = [];
    protected $totalCart = 0;
    protected $cartItems = 0;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function getCreditCard()
    {
        return $this->creditCard;
    }

    public function setCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;
        return $this;
    }

    public function getCart()
    {
        return $this->cart;
    }

    public function setCart(array $products)
    {
        foreach ($products as $product) {
            $this->cart[] = $this->checkProduct($product);
            $this->cartItems++;
        }
        return $this;
    }

    public function checkProduct(Product $product)
    {
        return $product;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    public function getTotalCart()
    {
        return $this->totalCart;
    }

    public function setTotalCart()
    {
        if (!$this->cartItems === 0) {
            foreach ($this->cart as $item) {
                $this->totalCart += $item->getPrice();
            }
        }
        return $this;
    }

    public function buyItemsCart()
    {
        $this->cart = [];
        $this->cartItems = 0;

        $this->creditCard->setCash(- ($this->getTotalCart()));
        $this->totalCart = 0;
    }
}
