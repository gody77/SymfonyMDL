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
               ->add("id","text",array('label'=>"Numero :"))
               ->add("nom","text",array('label'=>"Nom :"))
               ->add("prenom","text",array('label'=>"Prenom"))
               ->add("login","text",array('label'=>"login :"))
          
   }
   public function getName()
   {return 'Lam_Mdlbundle_participanttype';}
}
    


?>
