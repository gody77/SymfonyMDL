<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\FormationSport
 * @ORM\Table()
 *  @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\FormationSportRepository")
 */
class Formationsport
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
     * @var string $titre
     *
     * @ORM\Column(name="Titre", type="string", length=100, nullable=false)
     */
    private $titre;

    /**
     * @var string $objectif
     *
     * @ORM\Column(name="Objectif", type="string", length=100, nullable=false)
     */
    private $objectif;

    /**
     * @var string $logo
     *
     * @ORM\Column(name="Logo", type="string", length=100, nullable=false)
     */
    private $logo;

    /**
     * @var integer $nbplace
     *
     * @ORM\Column(name="nbPlace", type="integer", nullable=false)
     */
    private $nbplace;

   


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
     * Set titre
     *
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set objectif
     *
     * @param string $objectif
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;
    }

    /**
     * Get objectif
     *
     * @return string 
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * Set logo
     *
     * @param string $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set nbplace
     *
     * @param integer $nbplace
     */
    public function setNbplace($nbplace)
    {
        $this->nbplace = $nbplace;
    }

    /**
     * Get nbplace
     *
     * @return integer 
     */
    public function getNbplace()
    {
        return $this->nbplace;
    }

  
}