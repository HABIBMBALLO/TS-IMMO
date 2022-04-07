<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="administrateurs")
 */
class Administrateur
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
    private $cni;

    /**
     * @ORM\Column(type="string")
     */
    private $sexe;

    /**
     * @ORM\Column(type="date")
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string")
     */
    private $lieuNaissance;

    
    public function __construct($fields)
    {
        $this->id = $fields["id"];
        $this->nom = $fields["nom"];
        $this->cni = $fields["cni"];
        $this->sexe = $fields["sexe"];
        $this->dateNaissance = $fields["dateNaissance"];
        $this->lieuNaissance = $fields["lieuNaissance"];

        echo "Administrateur créé avec succès";
    }

    public function getFields(){
        return [
            "id"=>$this->id,
            "nom"=>$this->nom,
            "cni"=>$this->cni,
            "sexe"=>$this->sexe,
            "dateNaissance"=>$this->dateNaissance,
            "lieuNaissance"=>$this->lieuNaissance
        ];
    }


}