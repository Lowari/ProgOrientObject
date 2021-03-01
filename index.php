<?php

require "Character.php";
require "Hero.php";

$Hero = new Hero("ak47", 70, "bouclier éternelle", 50, 100, 1);

var_dump($Hero);
$Hero->attacked(55);
var_dump($Hero);


?>