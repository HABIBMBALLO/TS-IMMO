<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="proprietaires")
 */
class Proprietaire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nom;
    
    /**
     * @ORM\Column(type="string")
     */
    private $prenom;
    
    /**
     * @ORM\Column(type="string")
     */
    private $civilite;
    
    /**
     * @ORM\Column(type="string")
     */
    private $sexe;
    
    /**
     * @ORM\Column(type="string")
     */
    private $email;
    
    /**
     * @ORM\Column(type="string")
     */
    private $telephone;
    
    /**
     * @ORM\Column(type="string")
     */
    private $dateNaissance;
    
    /**
     * @ORM\Column(type="string")
     */
    private $lieuNaissance;
    
    /**
     * @ORM\Column(type="string")
     */
    private $numPieceIdentite;

    /**
    * @ORM\ManyToOne(targetEntity="Administrateur")
    * @ORM\JoinColumn(name="administrateur_id", referencedColumnName="id")
    */
    private $administrateur;
}