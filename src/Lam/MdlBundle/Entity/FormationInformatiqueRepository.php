<?php

namespace Lam\MdlBundle\Entity;

use Doctrine\ORM\EntityRepository;

use Doctrine\ORM\QueryBuilder;

/**
 * FormationInformatiqueRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FormationInformatiqueRepository extends EntityRepository
{
  public function listeFormationInformatique()
  {
        // On passe par le QueryBuilder vide de l'EntityManager pour l'exemple
        $req = $this->_em->createQueryBuilder();
        $req->select('fi')
            ->from('LamMdlBundle:formationinformatique', 'fi');
        
          return $req->getQuery()->getResult();
  }
    
    public function contenuFormationInformatique($num)
    {
    $query = $this->_em->createQuery("SELECT fi.logo,fi.titre, fi.id toto,fi.objectif,fi.public,fi.prerequis, fi.nbplace,fi.nbplacerestante,t.nomtheme, c.ordre, d.libelle FROM LamMdlBundle:contenu c JOIN c.laformationinformatique fi JOIN c.letheme t  LEFT JOIN c.detail d where c.laformationinformatique='$num' order by c.ordre");
    $resultats = $query->getResult();
    return $resultats;
  }
    
    
}