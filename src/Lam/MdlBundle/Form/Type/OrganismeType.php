<?php
/**
 * Description of OrganismeType
 *
 * @author Godefroi
 */
namespace Lam\MdlBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Lam\MdlBundle\Entity\organisme;

class OrganismeType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options){
        $builder
                ->add('nomOrganisme','text',array('label' => "Nom organisme : "))
                ->add('mdpOrganisme','text',array('label' => "Mot de passe organisme : "))
                ->add('adresseOrganisme','text',array('label' => "Adresse organisme : "))
                ->add('villeOrganisme','text',array('label' => "Ville : ", 'required'=>false,"trim"=>TRUE))
                ->add('cpOrganisme','integer',array('label' => "CP : "))
                ->add('telOrganisme','integer',array('label' => "tel : "))
                ->add('mailOrganisme','text',array('label' => "Mail : "));
        
    }
    
    public function getName(){
        return 'Lam_MdlBundle_organismeType';
    }
}

?>
