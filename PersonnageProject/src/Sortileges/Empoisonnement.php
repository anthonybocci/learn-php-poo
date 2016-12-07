<?php

/**
 * Matchs folder
 */

namespace src\Sortilege;

/**
 * Empoisonnement class that extends Sortilege
 *
 * @author Anthony Bocci
 */
class Empoisonnement extends Sortilege
{

    /**
     * Constructor
     * Only call parent::__construct
     */
    public function __construct()
    {
        parent::__construct(8);
    }

}
