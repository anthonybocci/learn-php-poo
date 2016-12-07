<?php

/**
 * This file tests our classes
 */
use \src\Magicien;

/**
 * Adds a rule to explain PHP how to include file
 * when we use a class that does not exist.
 */
spl_autoload_register(function($class) {
    echo "Inclusion de " . $class . "\n";
    include __DIR__ . '/' . $class . '.php';
});



//$test = new src\test\Test();


/* Here, Magicien is not known by PHP because not included, so thanks to our rule
 * above, PHP will automatically include src/Magicien.php
 */
$gandalf = new Magicien('Alf', 'Gand', 13, 100);
$rambo = new src\Guerrier(100, 'Rambo', 'John');
$loup = new \src\Animal\Loup();
$couteau = new \src\armes\Couteau();
$rambo->setArme($couteau);
$rambo->combattre($gandalf);


//$gandalf->combattre();

