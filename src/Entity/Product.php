<?php

namespace App\Entity;

use Exception;

class Product
{
    const FOOD_PRODUCT = 'food';
    private $name;
    private $type;
    private $price;

    public function __construct($name, $type, $price)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }

    public function computeTVA(): float
    {
        if (self::FOOD_PRODUCT === $this->type) {
            return $this->price * 0.055;
        } else {
            throw new Exception('Invalid product type');
        }
    }
}
