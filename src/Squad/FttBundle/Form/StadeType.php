<?php

namespace Squad\FttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class StadeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelleStade','text',array('attr'=>array ('class'=>'form-control' )))
            ->add('emplacement','text',array('attr'=>array ('class'=>'form-control' )))
            ->add('typeTerrains','choice',array('attr'=>array ('class'=>'form-control'),'choices' => array (
                                                                'Terre battue'=>'Terre battue',
                                                                'gazon'=>'gazon',
                                                                'Dur'=>'Dur',
                                                                'Indoor'=>'Indoor'),'required' => true))
            ->add('file','file', array('required' => false))
            ->add('capacite',  'integer',array('attr'=>array ('class'=>'form-control' )))
           ;
       
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Squad\FttBundle\Entity\Stade'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'squad_fttbundle_stade';
    }
}
