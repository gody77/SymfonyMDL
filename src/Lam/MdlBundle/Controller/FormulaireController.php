<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FormulaireController extends Controller
{
    
    public function ajoutAction()
    {
        return $this->render('LamMdlBundle:Default:index.html.twig');
    }
    
    public function inscriptionOrgaAction()
    {
        return $this->render('LamMdlBundle:formulaire:inscriptionOrganisme.html.twig');
    }
}
