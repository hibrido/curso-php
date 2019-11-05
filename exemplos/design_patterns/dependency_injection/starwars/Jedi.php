<?php

class Jedi
{
    private $lightsaber;

    public function __construct(LightsaberInterface $lightsaber)
    {
        $this->lightsaber = $lightsaber;
    }

    public function attack()
    {
        return 'Attacking with a ' . $this->lightsaber->getLightsaberColor() . ' lightsaber!';
    }
}