<?php

/**
 * Matchs folder
 */

namespace src\Sortilege;

/**
 * Sortilege is an abstract magical sortilege that implement Utilisable interface
 *
 * @author Anthony Bocci
 */
abstract class Sortilege implements \src\Utilisable
{

    /**
     * Amout of damages
     * 
     * @var int
     */
    private $degats;

    /**
     * {@inheritdoc}
     */
    public function utilise($ennemi)
    {
        $ennemi->recevoirDegats($this->degats);
    }

    public function __construct($degats)
    {
        $this->degats = $degats;
    }

}
