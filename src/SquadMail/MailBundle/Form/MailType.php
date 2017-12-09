<?php
namespace SquadMail\MailBundle\Form;

use Symfony\Component\Form\AbstractType; 
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MailType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder
                ->add('objet', 'text',array('attr'=>array ('class'=>'form-control' ))) 
                
                
                ->add('file','file', array('label' => 'Rapport (PDF file)'))
                ->add('text', 'textarea',array('attr'=>array ('class'=>'form-control' )))
                ->add('Envoyer', 'submit',array('attr'=>array ('class'=>'btn btn-primary')));
                
    }
    public function getName() {
        return 'Mail';        
    }
}
