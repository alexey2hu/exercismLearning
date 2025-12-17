<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $persons)
    {
        return ($pizzas * (($persons * 20) + 200));
    }

    public function calculateSauceRequirement($pizzas, $sauceCanVolume)
    {
        return ($pizzas * 125 / $sauceCanVolume);
    }

    public function calculateCheeseCubeCoverage($cheeseDimension, $thickness, $diameter)
    {
        return floor($cheeseDimension**3 / ($thickness * 3.14 * $diameter));
    }

    public function calculateLeftOverSlices($pizzas, $persons)
    {
        return $pizzas * 8 % $persons;
    }
}
