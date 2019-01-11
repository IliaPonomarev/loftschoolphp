<?php

class Engine
{
    protected $power;
    protected $transmission;
    protected $temperature = 0;

    public function __construct($transmission, $power)
    {
        $this->transmission = $transmission;
        $this->power = $power;
    }

    public function getTransmission()
    {
        return $this->transmission;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function engineOn()
    {
        echo "Включаем двигатель-->>";
    }

    public function engineOff()
    {
        echo "<br>Выключаем двигатель";
    }

    public function maxSpeed($speed)
    {
        $max = $this->power * 2;
        if ($speed > $max) {
            return $max;
        } else {
            return $speed;
        }

    }

    public function cooling($distance, $speed)
    {
        for ($i = 0; $i <= $distance; $i += $this->maxSpeed($speed)) {
            if ($i == 0) {
                echo "начинаем движение-->>";
                continue;
            }
            $this->temperature += $speed / 10 * 5;
            if ($this->temperature >= 90) {
                $this->temperature -= 10;
                echo "-->>включаем охлаждение";
            }
            echo "<br>Проехали $i температура $this->temperature";
        }
    }

    public function setDirection($direction)
    {

        if ($this->getTransmission() == 'AT') {
            switch ($direction) {
                case $direction == 'вперед':
                    echo "включаю первую передачу ";
                    break;
                case $direction == 'назад':
                    echo "включаю вторую передачу";
                    break;
            }
        } else {
            echo 'в этой машине автоматическая коробка передач(AT)';
        }

        if ($direction == 'вперед') {
            echo '(едем вперед) -->>';
        } elseif ($direction == 'назад') {
            echo '(едем назад) -->>';
        } else {
            echo "Выберете либо 'вперед' либо 'назад' ";
        }
    }

}