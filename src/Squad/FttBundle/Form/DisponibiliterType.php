<?php

namespace Squad\FttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DisponibiliterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
  
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
                -->add('dateEmpechement', 'date', array(
                    'label' => 'Date de publication',
                    'widget' => 'single_text',
                    'input' => 'datetime',
                    'format' => 'dd/MM/yyyy')
                 );
        ;
                

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Squad\FttBundle\Entity\Disponibiliter'
        ));
    }

    /**
     * @return string
     */
    

    public function getName() {
        return 'squad_fttbundle_formation';
    }

}


