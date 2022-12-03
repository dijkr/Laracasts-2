<?php

class Person
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function job()
    {
        return ' Software Developer';
    }

    public function favoriteTeam()
    {

    }

    private function thingsThatKeepUpAtNight()
    {
        return 'We are all going to die and that is terrifying.';
    }
}

$bob = new Person('Bob');