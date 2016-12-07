<?php

namespace src;

/**
 * Personnage is an abstract class that represents any kind of Personnage,
 * a Magicien or a Guerrier for instance
 *
 * @author Anthony Bocci
 */
abstract class Personnage
{

    /**
     * Name
     * 
     * @var string
     */
    protected $nom;

    /**
     * Amount of life
     * 
     * @var int
     */
    protected $ptVie;

    /**
     * Firstname
     * 
     * @var string
     */
    protected $prenom;

    /**
     * Constructor
     * 
     * @param string $nom
     * @param int $ptVie
     * @param string $prenom
     */
    public function __construct($nom, $ptVie, $prenom)
    {
        //Personnage has no parent, so it does not call any other constructor
        $this->nom = $nom;
        $this->ptVie = $ptVie;
        $this->prenom = $prenom;
        echo "Je m'appelle " . $prenom . "\n";
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getPtVie()
    {
        return $this->ptVie;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    public function setPtVie($ptVie)
    {
        $this->ptVie = $ptVie;
        return $this;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    public abstract function combattre($ennemi);

    /**
     * The Personnage receives damages
     * 
     * @param int $nbDegats
     */
    public function recevoirDegats($nbDegats)
    {
        //Decrements amount of life
        $this->ptVie -= $nbDegats;
        echo "Je recois des degats : ", $this->ptVie, " restants\n";
        //Check if Personnage is dead
        if ($this->ptVie <= 0) {
            echo 'Le personnage est mort !';
        }
    }

}
