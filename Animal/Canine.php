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
abstract class Canine extends Animal implements \Interfaces\TransformableInterface {
    
    public function eat() {
        echo "I eat ham";
    }

    abstract public function move();
    
    abstract public function sound();

    /**
     * Method from TransformableInterface
     * An abstract class can have abstract and non-abstract methods
     */
    public function transform() {
        echo "I am transforming to monster";
    }

    public function untransform() {
        echo "I am transforming back to myself";
    }

}
