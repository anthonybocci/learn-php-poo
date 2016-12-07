<?php

/**
 * Match with folder
 */

namespace src;

/**
 * Guerrier is a fighter that inherits from Personnage
 *
 * @author Anthony Bocci
 */
class Guerrier extends Personnage
{

    /**
     * Weapon
     * 
     * @var \src\armes\Arme
     */
    private $arme;

    /**
     * Fighting points
     * 
     * @var int
     */
    private $ptForce;

    /**
     * Guerrier's constructor
     * 
     * @param int $ptForce
     * @param string $nom
     * @param string $prenom
     * @param nit $ptVie
     * @param src\armes\Arme $arme
     */
    public function __contruct($ptForce, $nom, $prenom, $ptVie, $arme = null)
    {
        //Call parent's constructor (Personnage::__construct())
        parent::__construct($nom, $ptVie, $prenom);
        $this->arme = $arme;
        $this->ptForce = $ptForce;
    }

    public function getArme()
    {
        return $this->arme;
    }

    public function getPtForce()
    {
        return $this->ptForce;
    }

    /**
     * Set arme
     * 
     * @param \src\Utilisable $arme
     * @return $this
     */
    public function setArme($arme)
    {
        // Check the arme is instance of Utilisable interface. So it can be an Arme,
        // a Sortilege or even an Animal, while it has a method utilise($ennemi)
        // it matchs.
        if (false === $arme instanceof Utilisable) {
            echo "WARNING!!!";
            return;
        }
        $this->arme = $arme;
        return $this;
    }

    public function setPtForce($ptForce)
    {
        $this->ptForce = $ptForce;
        return $this;
    }

    /**
     * Fight
     * 
     * @param \src\Personnage $ennemi
     */
    public function combattre($ennemi)
    {
        //Ennemy has to be instance of Personnage (Guerrier or Magicien will work)
        if (false === $ennemi instanceof Personnage) {
            echo "WARNING!!!";
            return;
        }

        //Displays a message using the weapon
        echo "Je suis " . $this->prenom . " et j'utilise mon {$this->arme->getName()} sur mon ennemi !\n";
        //Uses the weapon
        $this->arme->utilise($ennemi);
    }

}
