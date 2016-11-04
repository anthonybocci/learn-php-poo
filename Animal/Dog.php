<?php

namespace Animal;

/**
 * Dog
 * 
 * Dog is not abstract so it is possible to use it directly.
 * It inherits from \Animal\Canine that is in the same namespace.
 * 
 * It **has to** define methods declared in abstract parent classes.
 *
 * @author Anthony Bocci
 */
class Dog extends Canine {
    
    /**
     * This is a method inherited from \Animal\Animal class,
     * visibility is the same!
     */
    public function eat() {
        /*
         * Use the Canine#eat method, so it is possible to override a method 
         * without loose the existing definition
         */
        parent.eat();
       echo "I eat cats"; 
    }

    public function move() {
        echo "I run after birds";
    }

    /**
     * This is a method inherited from \Animal\Canine class,
     * visibility is also the same!
     */
    public function sound() {
        echo "Wouf";
    }
    
    /**
     * This is a method directly created inside Dog, not inherited.
     * 
     * @return boolean true
     */
    public function isHappy()
    {
        return true;
    }

}
