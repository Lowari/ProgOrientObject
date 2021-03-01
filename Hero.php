<?php

class Hero extends Character {
    private $weapon;
    private $weaponDmg;
    private $shield;
    private $shieldValue;

    public function getWeapon(){
        return $this->weapon;
    }

    public function getWeaponDmg(){
        return $this->weaponDmg;
    }

    public function getShield(){
        return $this->shield;
    }

    public function getShieldValue(){
        return $this->shieldValue;
    }

    public function setWeapon($weapon){
        $this->weapon = $weapon;
        return $this;
    }

    public function setWeaponDmg($weaponDmg){
        $this->weaponDmg = $weaponDmg;
        return $this;
    }

    public function setShield($shield){
        $this->shield = $shield;
        return $this;
    }

    public function setShieldValue($shieldValue) {
        $this->shieldValue = $shieldValue;
        return $this;
    }

    public function __construct($weapon, $weaponDmg, $shield, $shieldValue, $health, $rage) {
        parent::__construct($health, $rage);
        $this->weapon = $weapon;
        $this->weaponDmg = $weaponDmg;
        $this->shield = $shield;
        $this->shieldValue = $shieldValue;
    }

    public function attacked($dmg) {
        $this->setHealth($this->getHealth() - ($dmg - $this->getShieldValue()));
        $this->setRage($this->getRage() + 30);
    }

}