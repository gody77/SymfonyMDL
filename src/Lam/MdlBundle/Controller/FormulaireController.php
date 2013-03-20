<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FormulaireController extends Controller
{
    
    public function ajoutAction()
    {
	//Mise en place du formulire 
          $unVisiteur =new visiteur();
          $request= $this->getRequest();
          $form=$this->createForm(new VisiteurType(),$unVisiteur);
          $mess=""; 
          
          if($request->getMethod()=='POST')
          {
              echo'test post';
              $form->bindRequest($request);
              //si les contraintes sont respectés ,enregistrement du nouveau visiteur 
              if($form->isValid()){
                  $em=$this->getDoctrine()->getEntityManager();
                  $em->persist($unVisiteur);
                  $em ->flush();
                  $mess='Le nouveau visiteur a bien été ajouté';
                  echo'test2';
                  
                  
                  //pour remetttre le formulaire a zero
                  $unVisiteur =new visiteur();
                  $form=$this->createForm(new VisiteurType(),$unVisiteur);
                  
                  //Quand tout a bien passé , on peux rédiger(avec une route ) c'est facultatif
                 //return $this->redirect($this->generateUrl('route',array(si neccessaire )));
              }
              
              
          }
          return $this->container->get('templating')->renderResponse('ARGsbBundle:Default:ajout.html.twig',array(
              'form'=>$form->createView(),
              'message'=>$mess ));
          
    }
    
    
    public function inscriptionOrgaAction()
    {
        return $this->render('LamMdlBundle:formulaire:inscriptionOrganisme.html.twig');
    }
}
