<?php

class Coordinates
{
    private $x;
    private $y;

    /**
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

}

function distance(Coordinates $begin, Coordinates $end)
{

}