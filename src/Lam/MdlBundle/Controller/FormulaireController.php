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

            echo $mess3;
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
                echo  $idFormation . "on  y crois".$nbInscrit ;
                
                //requete
                $update = $this->getDoctrine()
                      ->getEntityManager()
                      ->getRepository('LamMdlBundle:Inscription')
                      ->NbInscriptFormation($nbInscrit,$idFormation);
                
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($uneInscription);
                $em->flush();
                $mess = 'L\'inscription à bien été ajouté';

                //pour remetttre le formulaire a zero
                //  $uneInscription =new Inscription();
                // $form=$this->createForm(new ParticipantType(),$uneInscription);
                //Quand tout a bien passé , on peux rédiger(avec une route ) c'est facultatif
                return $this->redirect($this->generateUrl("LamMdlBundle_formationinformatique"));
            }
        }

        return $this->container->get('templating')->renderResponse('LamMdlBundle:formulaire:ajout.html.twig', array(
                    'form' => $form->createView(), 'message' => $mess, "message2" => $mess2, 'message4' => $mess4
        ));
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
