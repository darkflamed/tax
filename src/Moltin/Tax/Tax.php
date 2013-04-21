<?php namespace Moltin\Tax;

class Tax
{
    protected $percentage;
    protected $deductModifier;
    protected $addModifier;
    
    public function __construct($value)
    {
        $this->percentage = $value;
        $this->deductModifier = 1 - ($value / 100);
        $this->addModifier = 1 + ($value / 100);
    }

    public function deduct($price)
    {
        return $price * $this->taxModifier;
    }

    public function add($price)
    {
        return $price + $this->calculate($price);
    }

    public function rate($price)
    {
        return $price - $this->deduct($price);
    }
}
