<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="quartiers")
 */
class Quartier
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
    * @ORM\ManyToOne(targetEntity="Commune")
    * @ORM\JoinColumn(name="commune_id", referencedColumnName="id")
    */
    private $commune;
}