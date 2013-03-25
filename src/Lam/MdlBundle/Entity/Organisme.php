<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Organisme
 * @ORM\Table()
 *  @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\OrganismeRepository")
 */
class Organisme
{
    
    /**
     * @var integer $idOrganisme
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idOrganisme;

    /**
     * @var text $nomOrganisme
     *
     * @ORM\Column(name="nom_organisme", type="text", nullable=false)
     */
    private $nomOrganisme;

    /**
     * @var string $mdpOrganisme
     *
     * @ORM\Column(name="mdp_organisme", type="string", length=32, nullable=false)
     */
    private $mdpOrganisme;

    /**
     * @var text $adresseOrganisme
     *
     * @ORM\Column(name="adresse_organisme", type="text", nullable=false)
     */
    private $adresseOrganisme;

    /**
     * @var text $villeOrganisme
     *
     * @ORM\Column(name="ville_organisme", type="text", nullable=false)
     */
    private $villeOrganisme;

    /**
     * @var string $cpOrganisme
     *
     * @ORM\Column(name="cp_organisme", type="string", length=5, nullable=false)
     */
    private $cpOrganisme;

    /**
     * @var string $telOrganisme
     *
     * @ORM\Column(name="tel_organisme", type="string", length=10, nullable=false)
     */
    private $telOrganisme;

    /**
     * @var text $mailOrganisme
     *
     * @ORM\Column(name="mail_organisme", type="text", nullable=false)
     */
    private $mailOrganisme;

    /**
     * @var Formation
     *
     * @ORM\ManyToMany(targetEntity="Formation", inversedBy="idOrganisme")
     *
     * )
     */
    private $idFormation;

   
    

    /**
     * Get idOrganisme
     *
     * @return integer 
     */
    public function getIdOrganisme()
    {
        return $this->idOrganisme;
    }

    /**
     * Set nomOrganisme
     *
     * @param text $nomOrganisme
     */
    public function setNomOrganisme($nomOrganisme)
    {
        $this->nomOrganisme = $nomOrganisme;
    }

    
    /**
     * Set mdpOrganisme
     *
     * @param string $mdpOrganisme
     */
    public function setMdpOrganisme($mdpOrganisme)
    {
        $this->mdpOrganisme = $mdpOrganisme;
    }

    /**
     * Get mdpOrganisme
     *
     * @return string 
     */
    public function getMdpOrganisme()
    {
        return $this->mdpOrganisme;
    }

    /**
     * Set adresseOrganisme
     *
     * @param text $adresseOrganisme
     */
    public function setAdresseOrganisme($adresseOrganisme)
    {
        $this->adresseOrganisme = $adresseOrganisme;
    }

    /**
     * Get adresseOrganisme
     *
     * @return text 
     */
    public function getAdresseOrganisme()
    {
        return $this->adresseOrganisme;
    }

    /**
     * Set villeOrganisme
     *
     * @param text $villeOrganisme
     */
    public function setVilleOrganisme($villeOrganisme)
    {
        $this->villeOrganisme = $villeOrganisme;
    }

    /**
     * Get villeOrganisme
     *
     * @return text 
     */
    public function getVilleOrganisme()
    {
        return $this->villeOrganisme;
    }

    /**
     * Set cpOrganisme
     *
     * @param string $cpOrganisme
     */
    public function setCpOrganisme($cpOrganisme)
    {
        $this->cpOrganisme = $cpOrganisme;
    }

    /**
     * Get cpOrganisme
     *
     * @return string 
     */
    public function getCpOrganisme()
    {
        return $this->cpOrganisme;
    }

    /**
     * Set telOrganisme
     *
     * @param string $telOrganisme
     */
    public function setTelOrganisme($telOrganisme)
    {
        $this->telOrganisme = $telOrganisme;
    }

    /**
     * Get telOrganisme
     *
     * @return string 
     */
    public function getTelOrganisme()
    {
        return $this->telOrganisme;
    }

    /**
     * Set mailOrganisme
     *
     * @param text $mailOrganisme
     */
    public function setMailOrganisme($mailOrganisme)
    {
        $this->mailOrganisme = $mailOrganisme;
    }

    /**
     * Get mailOrganisme
     *
     * @return text 
     */
    public function getMailOrganisme()
    {
        return $this->mailOrganisme;
    }

    /**
     * Add idFormation
     *
     * @param Lam\MdlBundle\Entity\Formation $idFormation
     */
    public function addFormation(\Lam\MdlBundle\Entity\Formation $idFormation)
    {
        $this->idFormation[] = $idFormation;
    }

    /**
     * Get idFormation
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }
    
    
    /**
     * Get nomOrganisme
     *
     * @return text 
     */
    public function getNomOrganisme()
    {
        return $this->nomOrganisme;
    }

    
    
   
    
  
    
    
    
    /**
   * @ORM\OneToMany(targetEntity="Lam\MdlBundle\Entity\Inscription", mappedBy="lorganisme")
   */
   private $lesorganismes;
    
    public function __toString() {
        return $this->nomOrganisme;
    }
    
    public function __construct()
    {
       
        $this->lesorganismes= new \Doctrine\Common\Collections\ArrayCollection();
        
    }
    
    
    /**
     * Add lesorganismes
     *
     * @param Lam\MdlBundle\Entity\Inscription $lesorganismes
     */
    public function addInscription(\Lam\MdlBundle\Entity\Inscription $lesorganismes)
    {
        $this->lesorganismes[] = $lesorganismes;
      
    }

    /**
     * Get lesorganismes
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLesorganismes()
    {
        return $this->lesorganismes;
    }
    
    
    
    
    
    
    
    
    
    
    
}



