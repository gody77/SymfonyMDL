<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Intervenant
 * @ORM\Table()
 *  @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\IntervenantRepository")
 */
class Intervenant
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nom
     *
     * @ORM\Column(name="Nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string $prenom
     *
     * @ORM\Column(name="Prenom", type="string", length=25, nullable=false)
     */
    private $prenom;

    /**
     * @var Formation
     *
     * @ORM\ManyToMany(targetEntity="Formation", mappedBy="intervenant")
     */
    private $formation;

    public function __construct()
    {
        $this->formation = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Add formation
     *
     * @param Lam\MdlBundle\Entity\Formation $formation
     */
    public function addFormation(\Lam\MdlBundle\Entity\Formation $formation)
    {
        $this->formation[] = $formation;
    }

    /**
     * Get formation
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getFormation()
    {
        return $this->formation;
    }
}