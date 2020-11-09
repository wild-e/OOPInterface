<?php


class Car implements LightableInterface {

    private $currentSpeed;


    public function switchOn()
    {
        return "true";
    }

    public function switchOff()
    {
        return "false"; 
    }

}