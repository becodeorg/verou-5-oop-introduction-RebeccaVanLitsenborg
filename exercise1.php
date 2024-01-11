<?php

declare(strict_types=1);

class Beverage
{
    public string $color;
    public float $price;
    public string $temperature;

    public function __construct(string $color, float $price, string $temperature = 'cold')
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo(): string
    {
        return "This beverage is {$this->temperature} and {$this->color}.";
    }
}

$cola = new Beverage("black", 2.0);
echo $cola->getInfo() . "<br>";
echo "Temperature: {$cola->temperature}";
