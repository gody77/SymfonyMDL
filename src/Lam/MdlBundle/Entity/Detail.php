<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Detail
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\DetailRepository")
 */
class Detail
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
     * @var string $libelle
     *
     * @ORM\Column(name="Libelle", type="string", length=150, nullable=false)
     */
    private $libelle;

    /**
     * @var Contenu
     *
     * @ORM\ManyToMany(targetEntity="Contenu", mappedBy="detail")
     */
    private $contenu;

    public function __construct()
    {
        $this->contenu = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set libelle
     *
     * @param string $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Add contenu
     *
     * @param Lam\MdlBundle\Entity\Contenu $contenu
     */
    public function addContenu(\Lam\MdlBundle\Entity\Contenu $contenu)
    {
        $this->contenu[] = $contenu;
    }

    /**
     * Get contenu
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}