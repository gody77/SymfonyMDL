<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Lam\MdlBundle\Entity\Inscription
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\InscriptionRepository")
 */
class Inscription {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer $id_formation
     *
     * @ORM\Column(name="id_formation", type="integer", length=3)
     */
    public $id_formation;

    /**
     * @var integer $nbr_inscrits
     *@Assert\Min(1) 
     * @ORM\Column(name="nbr_inscrits", type="integer", length=3)
     */
    private $nbr_inscrits;

    /**
     * Get id_formation
     *
     * @return integer 
     */
    public function getIdFormation() {
        return $this->id_formation;
    }

    /**
     * Set nbr_inscrits
     *
     * @param integer $nbrInscrits
     */
    public function setNbrInscrits($nbrInscrits) {
        $this->nbr_inscrits = $nbrInscrits;
    }

    /**
     * Get nbr_inscrits
     *
     * @return integer 
     */
    public function getNbrInscrits() {
        return $this->nbr_inscrits;
    }

    /**
     * @ORM\ManyToOne(targetEntity="Lam\MdlBundle\Entity\Organisme",inversedBy="lesorganismes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lorganisme;

    
  
    /**
     * Set lorganisme
     *
     * @param Lam\MdlBundle\Entity\Organisme $lorganisme
     */
    public function setLorganisme(\Lam\MdlBundle\Entity\Organisme $lorganisme)
    {
        $this->lorganisme = $lorganisme;
    }

    /**
     * Get lorganisme
     *
     * @return Lam\MdlBundle\Entity\Organisme 
     */
    public function getLorganisme()
    {
        return $this->lorganisme;
    }
    
    
}
    
    
    
    
  