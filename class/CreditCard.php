<?php

class CreditCard
{
    protected $number;
    protected $date;
    protected $cash;

    public function __construct($number, $date)
    {
        $this->number = $number;
        $this->date = $date;
    }
    
    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    public function getDate()
    {
        return $this->date;
    }
 
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    public function getCash()
    {
        return $this->cash;
    }

    public function setCash($cash)
    {
        $this->cash = $cash;
        return $this;
    }
}
