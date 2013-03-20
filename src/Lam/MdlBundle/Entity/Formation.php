<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Formation
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\FormationRepository")
 */
class Formation
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
     * @var date $date
     *
     * @ORM\Column(name="Date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string $horaire
     *
     * @ORM\Column(name="Horaire", type="string", length=30, nullable=false)
     */
    private $horaire;

    /**
     * @var string $salle
     *
     * @ORM\Column(name="Salle", type="string", length=30, nullable=false)
     */
    private $salle;

    /**
     * @var string $adresse
     *
     * @ORM\Column(name="Adresse", type="string", length=150, nullable=false)
     */
    private $adresse;

    /**
     * @var string $cout
     *
     * @ORM\Column(name="Cout", type="string", length=100, nullable=false)
     */
    private $cout;

    /**
     * @var string $repas
     *
     * @ORM\Column(name="Repas", type="string", length=100, nullable=false)
     */
    private $repas;

    /**
     * @var date $datelimite
     *
     * @ORM\Column(name="DateLimite", type="date", nullable=false)
     */
    private $datelimite;

    /**
     * @var integer $nbinscrit
     *
     * @ORM\Column(name="nbInscrit", type="integer", nullable=false)
     */
    private $nbinscrit;

    /**
     * @var Intervenant
     *
     * @ORM\ManyToMany(targetEntity="Intervenant", inversedBy="formation")
     * @ORM\JoinTable(name="formation_intervenant",
     *   joinColumns={
     *     @ORM\JoinColumn(name="formation_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="intervenant_id", referencedColumnName="id")
     *   }
     * )
     */
    private $intervenant;

    /**
     * @var Organisme
     *
     * @ORM\ManyToMany(targetEntity="Organisme", mappedBy="idFormation")
     */
    private $idOrganisme;

    /**
     * @var Formationinformatique
     *
     * @ORM\ManyToOne(targetEntity="Formationinformatique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="laFormationInformatique_id", referencedColumnName="id")
     * })
     */
    private $laformationinformatique;

    /**
     * @var Formationsport
     *
     * @ORM\ManyToOne(targetEntity="Formationsport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="laFormationSport_id", referencedColumnName="id")
     * })
     */
    private $laformationsport;

    public function __construct()
    {
        $this->intervenant = new \Doctrine\Common\Collections\ArrayCollection();
    $this->idOrganisme = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set horaire
     *
     * @param string $horaire
     */
    public function setHoraire($horaire)
    {
        $this->horaire = $horaire;
    }

    /**
     * Get horaire
     *
     * @return string 
     */
    public function getHoraire()
    {
        return $this->horaire;
    }

    /**
     * Set salle
     *
     * @param string $salle
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;
    }

    /**
     * Get salle
     *
     * @return string 
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cout
     *
     * @param string $cout
     */
    public function setCout($cout)
    {
        $this->cout = $cout;
    }

    /**
     * Get cout
     *
     * @return string 
     */
    public function getCout()
    {
        return $this->cout;
    }

    /**
     * Set repas
     *
     * @param string $repas
     */
    public function setRepas($repas)
    {
        $this->repas = $repas;
    }

    /**
     * Get repas
     *
     * @return string 
     */
    public function getRepas()
    {
        return $this->repas;
    }

    /**
     * Set datelimite
     *
     * @param date $datelimite
     */
    public function setDatelimite($datelimite)
    {
        $this->datelimite = $datelimite;
    }

    /**
     * Get datelimite
     *
     * @return date 
     */
    public function getDatelimite()
    {
        return $this->datelimite;
    }

    /**
     * Set nbinscrit
     *
     * @param integer $nbinscrit
     */
    public function setNbinscrit($nbinscrit)
    {
        $this->nbinscrit = $nbinscrit;
    }

    /**
     * Get nbinscrit
     *
     * @return integer 
     */
    public function getNbinscrit()
    {
        return $this->nbinscrit;
    }

    /**
     * Add intervenant
     *
     * @param Lam\MdlBundle\Entity\Intervenant $intervenant
     */
    public function addIntervenant(\Lam\MdlBundle\Entity\Intervenant $intervenant)
    {
        $this->intervenant[] = $intervenant;
    }

    /**
     * Get intervenant
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getIntervenant()
    {
        return $this->intervenant;
    }

    /**
     * Add idOrganisme
     *
     * @param Lam\MdlBundle\Entity\Organisme $idOrganisme
     */
    public function addOrganisme(\Lam\MdlBundle\Entity\Organisme $idOrganisme)
    {
        $this->idOrganisme[] = $idOrganisme;
    }

    /**
     * Get idOrganisme
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getIdOrganisme()
    {
        return $this->idOrganisme;
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
     * Set laformationsport
     *
     * @param Lam\MdlBundle\Entity\Formationsport $laformationsport
     */
    public function setLaformationsport(\Lam\MdlBundle\Entity\Formationsport $laformationsport)
    {
        $this->laformationsport = $laformationsport;
    }

    /**
     * Get laformationsport
     *
     * @return Lam\MdlBundle\Entity\Formationsport 
     */
    public function getLaformationsport()
    {
        return $this->laformationsport;
    }
}