<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/


class Beverage
{
    private string $color;
    private float $price;
    private string $temperature;
    const barname = 'Het Vervolg';

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


$duvel = new Beverage ('Duvel', 8.5, 'blond', 3.5);
echo $duvel->getBarname() . "<br>";