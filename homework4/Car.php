<?php

class Car
{
    protected $Engine;

    public function __construct($transmission, $power)
    {
        $this->Engine = new Engine($transmission, $power);

    }

    public function Movement($distance, $speed, $direction)
    {
        $this->Engine->engineOn();
        echo "мощность двигателя " . $this->Engine->getPower() . 'л.c -->>';
        echo "максимальная скорость " . $this->Engine->getPower() * 2 . 'м.c -->>';
        $this->Engine->setDirection($direction);
        $this->Engine->maxSpeed($speed);
        $this->Engine->cooling($distance, $speed);
        $this->Engine->engineOff();
    }
}

