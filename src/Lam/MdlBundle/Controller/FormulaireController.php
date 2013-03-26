<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lam\MdlBundle\Form\Type\organismeType;
use Lam\MdlBundle\Entity\organisme;
use Lam\MdlBundle\Form\Type\ParticipantType;
use Lam\MdlBundle\Entity\Inscription;

class FormulaireController extends Controller {

    public function ajoutAction() {
        
        
         
        if (isset($_POST['nomFormation'])) {
            $mess = $nomFormation = $_POST['nomFormation'];
            $mess2 = $idFormation = $_POST['idFormation'];
            $mess3 = $_POST['fid'];
            $mess4 = $_POST['placeRestante'];
            
            
        }  

        //Mise en place du formulire 
        $uneInscription = new Inscription();
        $request = $this->getRequest();
        $form = $this->createForm(new ParticipantType(), $uneInscription);
    
        if ($request->getMethod() == 'POST') {

            $form->bindRequest($request);

            //si les contraintes sont respectés ,enregistrement de l'inscription
            if ($form->isValid()) { 
                
                //recuperation du nombre d'inscrit saisis par l'utilisateur 
                $nbInscrit = $uneInscription->getNbrInscrits();
                
                $idFormation=$uneInscription->getIdFormation();
                $nomOrganisme=$uneInscription ->getLorganisme();
                
                
                // Récupération des valeurs envoyées lors de l'ajout pour la cas 
                // où le nombre d'inscrit et supérieur au nombre de place.
                if(isset($_POST['nbPlace'])){
                    $nbPlace = $_POST['nbPlace'];
                    $nomF = $_POST['nomF'];
                    $idF = $_POST['idF'];
                    $mdpTaper=$_POST['mdp'];
                }
                // recuperation du mdp 
                  $verifMdp = $this->getDoctrine()
                      ->getEntityManager()
                      ->getRepository('LamMdlBundle:Organisme')
                      ->verificationMdp($nomOrganisme);
                  
                  
 foreach($verifMdp as $x)
{

$mdpOrganisme=$x['mdpOrganisme'];

}

if($mdpTaper==$mdpOrganisme)
{
     // Vérification
                // Si nbPlace > nbInscrit
                if($nbPlace >= $nbInscrit){
                    ?><br /><?php
                    
                    
                    //requete
                    $update = $this->getDoctrine()
                          ->getEntityManager()
                          ->getRepository('LamMdlBundle:Inscription')
                          ->NbInscriptFormation($nbInscrit,$idFormation);

                    $em = $this->getDoctrine()->getEntityManager();
                    $em->persist($uneInscription);
                    $em->flush();
                    $mess = 'L\'inscription à bien été ajouté';

                  
                    return $this->container->get('templating')->renderResponse('LamMdlBundle:formulaire:validation.html.twig', array(
                    'form' => $form->createView(), 'nomF' => $nomF, 'nbInscrit' => $nbInscrit));
                   
                
                    
                }else{ // Si le nombre de place n'est pas suffisant.
                    // Retourne sur le formulaire de saisi d'inscription afin d'afficher un message d'erreur.
                    $messageErreur = "Vous avez indiqué trop de personnes inscrite par rapport au nombre de place disponible.";
                    return $this->container->get('templating')->renderResponse('LamMdlBundle:formulaire:ajout.html.twig', array(
                    'form' => $form->createView(), 'message' => $nomF, "message2" => $idF, 'message4' => $nbPlace, 'erreur'=> $messageErreur));
                }
}
else{
   // Si le Mot de passe incorrect.
                    // Retourne sur le formulaire de saisi d'inscription afin d'afficher un message d'erreur.
                    $messageErreur = "Mot de passe incorrect , réessayer!!";
                    return $this->container->get('templating')->renderResponse('LamMdlBundle:formulaire:ajout.html.twig', array(
                    'form' => $form->createView(), 'message' => $nomF, "message2" => $idF, 'message4' => $nbPlace, 'erreur'=> $messageErreur));
}
                  
                  
                
              
            }
        }
if (isset($_POST['nomFormation'])) {
        return $this->container->get('templating')->renderResponse('LamMdlBundle:formulaire:ajout.html.twig', array(
                    'form' => $form->createView(), 'message' => $mess, "message2" => $mess2, 'message4' => $mess4, 'erreur'=>""
        ));
        
        
} else{
    echo'Le nombre de personnes a inscrire doit etre un chiffre et superieur a 0 ! Réésayer!!';
           return $this->redirect($this->generateUrl("LamMdlBundle_homepage"));
        
        }
        //'message'=>$mess ));
    }

    public function inscriptionOrgaAction() {
        $unOrganisme = new Organisme();
        $request = $this->getRequest();
        $url = $request->headers->get('refere'); // revenir en arrière 
        $form = $this->createForm(new OrganismeType(), $unOrganisme);
        $mess = "";

        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            // si contrainte respectée, enregistrement du visiteur
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($unOrganisme);
                $em->flush();
                $mess = 'Votre organisme a bien été enregistré !';

                //pour remettre le formulaire vide
                $unOrganisme = new Organisme();
                $form = $this->createForm(new OrganismeType(), $unOrganisme);
            }
        }
        // si tout s'est bien passé, on peut rediriger
        return $this->container->get('templating')->renderResponse('LamMdlBundle:formulaire:inscriptionOrganisme.html.twig', array('form' => $form->createView(),
                    'message' => $mess,
                    'adresse' => $url)
        );

        //return $this->render('LamMdlBundle:formulaire:inscriptionOrganisme.html.twig');
    }

}
