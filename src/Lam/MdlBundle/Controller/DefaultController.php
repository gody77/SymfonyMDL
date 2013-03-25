<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lam\MdlBundle\Form\Type\organismeType; //TP9
use Lam\MdlBundle\Entity\organisme; //TP9


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('LamMdlBundle:Default:index.html.twig');
    }
    
    public function verifAction()
    {
         $unOrganisme = new Organisme();
        $request = $this->getRequest();
        
        $form = $this->createForm(new \Lam\MdlBundle\Form\Type\VerifType(), $unOrganisme);
        $mess="";
        
        if($request->getMethod() == 'POST'){
           $form->bindRequest($request);
        
        
  
        
          
           if(isset($_POST['Nom de l\'orgnisme'])){
        
       $mess2= $_POST['mdp_Organisme']; 
           
    }
    
    echo 'lol'.' @'.$mess.'@ ';
            // si contrainte respectée, enregistrement du visiteur
          //  if($form->isValid()){
              //  $em = $this->getDoctrine()->getEntityManager();
              //  $em->persist($unOrganisme);
             //   $em->flush();
             //   $mess='Votre organisme a bien été enregistré !';
                
                //pour remettre le formulaire vide
             //   $unOrganisme = new Organisme();
            //    $form = $this->createForm(new VerifType(), $unOrganisme);
            //}
        }
        
        return $this->render('LamMdlBundle:Formulaire:verif.html.twig', array('form'=>$form->createView()));
        
        
    }
    
    
}