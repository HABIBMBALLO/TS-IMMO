<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="proprietes")
 */
class Propriete
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
    private $libelle;
    /**
     * @ORM\Column(type="string")
     */
    private $nombre_etage;
    /**
     * @ORM\Column(type="integer")
     */
    private $superficie;

    /**
    * @ORM\ManyToOne(targetEntity="Quartier")
    * @ORM\JoinColumn(name="quartier_id", referencedColumnName="id")
    */
    private $quartier;

    /**
    * @ORM\ManyToOne(targetEntity="Proprietaire")
    * @ORM\JoinColumn(name="proprietaire_id", referencedColumnName="id")
    */
    private $proprietaire;

    /**
    * @ORM\ManyToOne(targetEntity="TypePropriete")
    * @ORM\JoinColumn(name="type_propriete_id", referencedColumnName="id")
    */
    private $type_propriete;
}