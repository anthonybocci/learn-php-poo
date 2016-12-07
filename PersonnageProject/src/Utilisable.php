<?php

namespace src;

/**
 * Utilisable interface
 * 
 * @author Anthony Bocci
 */
interface Utilisable
{

    /**
     * The method that is used when we use a Weapon, Animal, Sortilege or other
     * @param src\Personnage $ennemi
     */
    function utilise($ennemi);
}
