<?php

declare(strict_types=1);
/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

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