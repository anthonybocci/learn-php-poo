<?php

namespace Animal;

/**
 * Canine
 * 
 * It is possible that an abstract class inherits from an other abstract class,
 * as many times as you want. So it is not possible to instanciate it
 *
 * @author Anthony Bocci
 */
abstract class Canine extends Animal {
    
    public function eat() {
        echo "I eat ham";
    }

    abstract public function move();
    
    abstract public function sound();

}
