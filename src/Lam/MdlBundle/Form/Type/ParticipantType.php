<?php

namespace AR\GsbBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use AR\GsbBundle\Entity\visiteur;


/**
 * Description of VisiteurType
 *
 * @author Anthony
 */
class ParticipantType extends AbstractType
{
   public function buildForm(FormBuilder $builder,array $option)
   {
       $builder
               ->add("nbParticipant","integer",array('label'=>"Nombres Particpants :"))
               ->add("nomOrganisme","choice",array('label'=>"Nom  de l'organisme:"))
               ->add("mdp","password",array('label'=>"Mot de passe :"));
       //test
          
   }
   public function getName()
   {return 'Lam_Mdlbundle_participanttype';}
}
    


?>
