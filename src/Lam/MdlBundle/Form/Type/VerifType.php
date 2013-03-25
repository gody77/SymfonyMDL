<?php
/**
 * Description of VerifType
 *
 * @author Anthony
 */
namespace Lam\MdlBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Lam\MdlBundle\Entity\Organisme;

class VerifType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options){
        $builder
                
     ->add('nom_organisme', 'entity', array(
    'class' => 'LamMdlBundle:Organisme'))
     ->add('mdpOrganisme','password',array('label'=>"mdp :"));
                
        
    }
    
    public function getName(){
        return 'Lam_MdlBundle_VerifType';
    }
}

?>
