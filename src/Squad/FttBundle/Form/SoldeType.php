<?php

namespace Squad\FttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SoldeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('valeur','integer')
            ->add('typeTransaction', 'choice', array(
                    'label' => "Veuillez choisir le type",
                    'choices' => array(
                        'virement' => 'virement',
                        'retrait' => 'retrait',),
                    'multiple' => false,))
            ->add('preuve','file')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
    */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Squad\FttBundle\Entity\Soldes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'squad_fttbundle_soldes';
    }
}
