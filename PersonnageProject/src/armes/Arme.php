<?php

/**
 * Matchs folder
 */

namespace src\armes;

/**
 * Arme is a weapon. An abstract class that implement Utilisable interface
 *
 * @author abocci
 */
abstract class Arme implements \src\Utilisable
{

    /**
     * The amout of damages the Arme can do
     * @var int
     */
    private $degats;

    /**
     * Arme name
     * 
     * @var string
     */
    private $name;

    /**
     * {@inheditdoc}
     */
    public function utilise($ennemi)
    {
        $ennemi->recevoirDegats($this->degats);
    }

    public function __construct($degats, $name)
    {
        $this->name = $name;
        $this->degats = $degats;
    }

    public function getDegats()
    {
        return $this->degats;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setDegats($degats)
    {
        $this->degats = $degats;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

}
