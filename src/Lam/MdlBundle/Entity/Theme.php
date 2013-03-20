<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lam\MdlBundle\Entity\Theme
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lam\MdlBundle\Entity\ThemeRepository")
 */
class Theme
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
     * @var string $nomtheme
     *
     * @ORM\Column(name="NomTheme", type="string", length=100, nullable=false)
     */
    private $nomtheme;



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
     * Set nomtheme
     *
     * @param string $nomtheme
     */
    public function setNomtheme($nomtheme)
    {
        $this->nomtheme = $nomtheme;
    }

    /**
     * Get nomtheme
     *
     * @return string 
     */
    public function getNomtheme()
    {
        return $this->nomtheme;
    }
}