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

class Beer extends Beverage
{
    public string $name;
    public float $alcoholPercentage;


    public function __construct(string $name, float $alcoholPercentage, string $color, float $price, string $temperature ='cold')
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage() 
    {
        return $this->alcoholPercentage;
    }
}

$duvel = new Beer('Duvel', 8.5, 'blond', 3.5);
echo $duvel->getAlcoholPercentage() . "<br>";
echo $duvel->alcoholPercentage . "<br>";
echo $duvel->getInfo() . "<br>";


$duvel = new Beverage ('Duvel', 8.5, 'blond', 3.5);
echo $duvel->getAlcoholPercentage() . "<br>";

/* EXERCISE 2



Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/