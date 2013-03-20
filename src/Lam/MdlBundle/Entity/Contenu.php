<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Contenu
 * @ORM\Table()
 *  @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\ContenuRepository")

 */
class Contenu
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
     * @var integer $ordre
     *
     * @ORM\Column(name="Ordre", type="integer", nullable=false)
     */
    private $ordre;

    /**
     * @var Detail
     *
     * @ORM\ManyToMany(targetEntity="Detail", inversedBy="contenu")
     * @ORM\JoinTable(name="contenu_detail",
     *   joinColumns={
     *     @ORM\JoinColumn(name="contenu_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="detail_id", referencedColumnName="id")
     *   }
     * )
     */
    private $detail;

    /**
     * @var Formationinformatique
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToOne(targetEntity="Formationinformatique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="laFormationInformatique_id", referencedColumnName="id")
     * })
     */
    private $laformationinformatique;

    /**
     * @var Theme
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\OneToOne(targetEntity="Theme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leTheme_id", referencedColumnName="id")
     * })
     */
    private $letheme;

    public function __construct()
    {
        $this->detail = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set ordre
     *
     * @param integer $ordre
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    }

    /**
     * Get ordre
     *
     * @return integer 
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Add detail
     *
     * @param Lam\MdlBundle\Entity\Detail $detail
     */
    public function addDetail(\Lam\MdlBundle\Entity\Detail $detail)
    {
        $this->detail[] = $detail;
    }

    /**
     * Get detail
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set laformationinformatique
     *
     * @param Lam\MdlBundle\Entity\Formationinformatique $laformationinformatique
     */
    public function setLaformationinformatique(\Lam\MdlBundle\Entity\Formationinformatique $laformationinformatique)
    {
        $this->laformationinformatique = $laformationinformatique;
    }

    /**
     * Get laformationinformatique
     *
     * @return Lam\MdlBundle\Entity\Formationinformatique 
     */
    public function getLaformationinformatique()
    {
        return $this->laformationinformatique;
    }

    /**
     * Set letheme
     *
     * @param Lam\MdlBundle\Entity\Theme $letheme
     */
    public function setLetheme(\Lam\MdlBundle\Entity\Theme $letheme)
    {
        $this->letheme = $letheme;
    }

    /**
     * Get letheme
     *
     * @return Lam\MdlBundle\Entity\Theme 
     */
    public function getLetheme()
    {
        return $this->letheme;
    }
}