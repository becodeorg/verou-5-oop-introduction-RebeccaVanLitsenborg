<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/

class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;
    const barname = 'Het Vervolg';
    private static string $address = 'Melkmarkt 9, 2000 Antwerpen';

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

    public function getBarname(): string
    {
        return self::barname;
    }

    public static function getAddress(): string
    {
        return self::$address;
    }
}

class Beer extends Beverage
{
    private string $name;
    private float $alcoholPercentage;


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

    public function getBarname(): string
    {
        return self::barname;
    }
}

$duvel = new Beer('Duvel', 8.5, 'blond', 3.5);
echo $duvel->getInfo() . "<br>";
echo $duvel->getBarname() . "<br>";
echo Beer::getAddress() . "<br>";

$duvel = new Beverage ('Duvel', 8.5, 'blond', 3.5);
echo $duvel->getBarname() . "<br>";
echo Beverage::getAddress() . "<br>";