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
        $builder->add('id','text',array('label' => "Numéro : "))
                ->add('nom','text',array('label' => "Nom : "))
                ->add('prenom','text',array('label' => "Prénom : "))
                ->add('login','text',array('label' => "Login : "))
                ->add('mdp','text',array('label' => "Mot de passe : "))
                ->add('adresse','text',array('label' => "Adresse : "))
                ->add('cp','integer',array('label' => "CP : "))
                ->add('ville','text',array('label' => "Ville : ", 'required'=>false,"trim"=>TRUE))
                ->add('dateEmbauche','date',array('label' => "Date d'embauche : "))
                ->add('laCategorie');
    }
    
    public function getName(){
        return 'Lam_MdlBundle_organismeType';
    }
}

?>
