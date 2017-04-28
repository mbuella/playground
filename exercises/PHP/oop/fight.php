<?php

//include Infantry class
require_once('infantry/Infantry.php');

//include Archer class
require_once('infantry/Archer.php');

//include Swordsman class
require_once('infantry/Swordsman.php');

/***********/

//create new instance of an archer
$arrow = new Archer("Arrow","super arrow");

echo "<h3>Before: </h3>";

//display archer's name and bow
echo "{$arrow->getName()}: {$arrow->getBow()}<br>";

//change the archer name
$arrow->setName("Robinhood");

//change the archer bow
$arrow->setBow("mega bow");

echo "<h3>After: </h3>";

//display archer's new name and bow
echo "{$arrow->getName()}: {$arrow->getBow()}<br>";

echo "<hr>";

/***********/

//create new instance of a swordsman
$arrow = new Swordsman("Panday","espada");

echo "<h3>Before: </h3>";

//display swordsman's name and bow
echo "{$arrow->getName()}: {$arrow->getSword()}<br>";

//change the swordsman name
$arrow->setName("Luke Skywalker");

//change the swordsman bow
$arrow->setSword("lightsaber");

echo "<h3>After: </h3>";

//display swordsman's new name and bow
echo "{$arrow->getName()}: {$arrow->getSword()}<br>";

echo "<hr>";

/***********/

//create new instance of an infantry
$arrow = new Infantry("Agent 007");

echo "<h3>Before: </h3>";

//display archer's name and bow
echo "{$arrow->getName()}<br>";

//change the archer name
$arrow->setName("James Bond");

echo "<h3>After: </h3>";

//display archer's new name and bow
echo "{$arrow->getName()}<br>";

echo "<hr>";

?>