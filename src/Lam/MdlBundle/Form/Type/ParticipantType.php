<?php

namespace Lam\MdlBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Lam\MdlBundle\Entity\Inscription;

/**
 * Description of participantType
 *
 * @author Anthony
 */
class ParticipantType extends AbstractType {

    public function buildForm(FormBuilder $builder, array $option) {
        $builder
                ->add("id_formation","hidden")
                ->add("lorganisme")
                //   ->add("lemdp","password",array('label'=>"mdp :"))
                ->add("nbr_inscrits", "number", array('label' => "nombre participant :"));

        //test
    }

    public function getName() {
        return 'get';
    }

}

?>
