<?php

/**
 * The class Animal is an abstract class, that means it's no possible do
 * instanciate this class. Doing the following is NOT possible.
 * 
 * $myAnimal = new Animal(); //NOT POSSIBLE
 *
 * The goal of an abstract class is to define some common behaviours
 * that other subclasses will can reuse.
 *
 */
/**
 * A PHP namespace is similar to Java's package or C#'s namespaces.
 * The goal of a namespace is identify a class. Example, if you wanna
 * create a class DateTime to do some stuff about date and time, how
 * PHP could know if you want to use the PHP built-in class or your
 * own class? The solution is: using namespace.
 * The PHP buit-in classes are in the root namespace, "\". You can just
 * specify your namespace for you own class.
 *
 * Example of PHP built-in class:
 *
 * $now = new \DateTime();
 *
 * Example of your own class (supposed to be in "MyClasses" namespace):
 *
 * $now2 = new \MyClasses\DateTime();
 *
 * A namespace can be composed by many words, separated by backslashes "\".
 * Example:
 *
 * $now3 = new \My\Own\Classes\DateTime();
 *
 * NOTE: By convention, namespace corresponds to folders that contain the class.
 * Examples:
 * 
 *   - The class DateTime is located inside MyClasses/Utils/DateTime.php
 *     Its namespace should be Myclasses\Utils\ and its name DateTime
 *   - The class DateTime is located inside Libs/DateTime.php
 *     Its namespace should be \Libs and its name DateTime
 */

namespace Animal;

abstract class Animal {

    /**
     * Animal (and its subclasses) uses methods from TimeTrait, so every class
     * can use these methods
     */
    use \Traits\TimeTrait;
    
    /**
     * A fields and functons have visibility.
     * private: the field/function is only visible from the object. It is not
     * visible from outside neither from class that inherit from this class.
     * 
     * protected: the field/function is visible from the object *and* from
     * class that inherit from this class. It's not visible from outside the 
     * object.
     * 
     * public: the field/function is bisible from anywhere, even outside the 
     * object.
     * 
     * By conventions, in PHP fields are private or protected. Always give the
     * minimum visibility to a field or function.
     * 
     * @var string
     */
    protected $name;
    protected $nicknames;

    abstract public function move();

    abstract public function eat();
}
