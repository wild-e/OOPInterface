<?php

class Bike implements LightableInterface {


    public $currentSpeed;

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function switchOn()
    {
        if($this->$currentSpeed > 10)
        {
        return "true";
        }
    }

    public function switchOff()
    {
        return "false"; 
    }

}