<?php

/**
 * Namespace match with folder
 */

namespace src;

/**
 * Magicien is a Wizard that inherits from Personnage
 *
 * @author Anthony Bocci
 */
class Magicien extends Personnage
{

    /**
     * Amount of magic
     * 
     * @var int
     */
    private $ptMagie;

    /**
     * Constructor
     * 
     * @param string $nom
     * @param string $prenom
     * @param int $ptVie
     * @param int $ptMagie
     */
    public function __construct($nom, $prenom, $ptVie, $ptMagie)
    {
        //Use the parent's constructor (Personne::__construct())
        parent::__construct($nom, $ptVie, $prenom);
        $this->ptMagie = $ptMagie;
    }

    public function getPtMagie()
    {
        return $this->ptMagie;
    }

    public function setPtMagie($ptMagie)
    {
        $this->ptMagie = $ptMagie;
        return $this;
    }

    /**
     * Fight. When a Magicien is fighting, its enemy receives damages
     * 
     * @param src\Personnage $ennemi
     */
    public function combattre($ennemi)
    {
        //Calls enemy method to loose life points
        $ennemi->recevoirDegats(5);
        echo "Le magicien combat son ennemi !";
    }

}
