<?php

//include the class
require_once('Dog.php');

//create a new instance of Dog named askal
$askal = new Dog("Bantay","askal","brown");

echo "<h2>Dog #1</h2>";
echo "<h3>Who is Dog #1?</h3>";

//print name, breed and color of askal
echo "Name: <strong>{$askal->name}</strong> <br>";
echo "Breed: <strong>{$askal->breed}</strong> <br>";
echo "Color: <strong>{$askal->color}</strong> <br>";

echo "<h3>What Dog #1 can do?</h3>";

//execute function sayHello()
echo "Dog says: <strong>";
$askal->sayHello();
echo "</strong><br>";

echo "<hr>";

//create a new instance of Dog named askal
$askal = new Dog("Elsa","husky","white");

echo "<h2>Dog #2</h2>";
echo "<h3>Who is Dog #2?</h3>";

//print name, breed and color of askal
echo "Name: <strong>{$askal->name}</strong> <br>";
echo "Breed: <strong>{$askal->breed}</strong> <br>";
echo "Color: <strong>{$askal->color}</strong> <br>";

echo "<h3>What Dog #2 can do?</h3>";

//execute function sayHello()
echo "Dog says: <strong>";
$askal->sayHello();
echo "</strong><br>";

?>