<?php

namespace Squad\FttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostulationType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nbreMatch')
                ->add('anciennete')
                ->add('file')
               
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Squad\FttBundle\Entity\Postulation'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'squad_fttbundle_postulation';
    }

}
