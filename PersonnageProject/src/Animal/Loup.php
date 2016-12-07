<?php

/**
 * Matchs folder
 */

namespace src\Animal;

/**
 * Loup is an Animal, so it can be used by a Guerrier, as well as a Weapon or even a Sortilege
 *
 * @author Anthony Bocci
 */
class Loup extends Animal
{

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(20);
    }

}
