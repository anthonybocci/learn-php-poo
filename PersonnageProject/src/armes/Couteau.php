<?php

/**
 * Matchs folder
 */

namespace src\armes;

/**
 * Couteau is a weapon, a hudge knife
 *
 * @author Anthony Bocci
 */
class Couteau extends Arme
{

    /**
     * Constructor
     */
    public function __construct()
    {
        //Only calls Arme::__construct()
        parent::__construct(10, "Couteau");
    }

}
