<?php

/**
 * Matchs folder
 */

namespace src\Animal;

/**
 * Animal is an abstract Animal that implement Utilisable
 *
 * @author Anthony Bocci
 */
abstract class Animal implements \src\Utilisable
{

    /**
     * Strength
     * 
     * @var int
     */
    protected $force;

    /**
     * Constructeur
     * 
     * @param int $force
     */
    public function __construct($force)
    {
        $this->force = $force;
    }

    /**
     * {@inheritdoc}
     */
    public function utilise($ennemi)
    {
        $ennemi->recevoirDegats($this->force);
    }

}
