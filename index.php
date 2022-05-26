<?php

require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/AnimalFood.php';
require_once __DIR__ . '/Models/AnimalToys.php';
require_once __DIR__ . '/Models/AnimalKennel.php';

$kennel = new AnimalKennel('Cuccia', 'Accessori', false, 0, 50, 'Cani', 'Rosso', 25);
$new_user = new User(false);

var_dump($kennel->setDiscount($new_user));
var_dump($kennel);