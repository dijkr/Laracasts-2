<?php

class CoffeeMaker
{
    public function brew()
    {
        var_dump('Brewing the coffee');
    }
}

class Specialty extends CoffeeMaker
{
    public function brewLatte()
    {
        var_dump('Brewing a latte');
    }
}


(new Specialty())->brewLatte();
