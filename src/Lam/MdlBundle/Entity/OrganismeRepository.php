<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * OrganismeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OrganismeRepository extends EntityRepository
{
    
    public function verificationMdp($lorganisme){
     $query = $this->_em->createQuery("SELECT o.mdpOrganisme FROM LamMdlBundle:organisme o  where o.nomOrganisme='$lorganisme'");
    $resultats = $query->getResult();
    return $resultats;
    
    
    }
    
    
    public function listeOrga()
    {
        
        $query = $this->_em->createQuery("SELECT nom_Ornisme FROM LamMdlBundle:organisme ");
    $resultats = $query->getResult();
    return $resultats;
    }
}