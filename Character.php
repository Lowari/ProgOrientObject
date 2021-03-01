<?php

class Character
{
    private $health;
    private $rage;

    public function getHealth() {
        return $this->health;
    }

    public function getRage() {
        return $this->rage;
    }

    public function setHealth($health){
        $this->health = $health;
        return $this;
    }

    public function setRage($rage){
        $this->rage = $rage;
        return $this;
    }

    public function __construct($health, $rage) {
        $this->health = $health;
        $this->rage = $rage;
    }

}