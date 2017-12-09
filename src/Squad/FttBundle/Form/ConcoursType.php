<?php

namespace Squad\FttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConcoursType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
  
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelleConcour')
            ->add('dateDebutConcour')
            ->add('lieuConcour')
            ->add('descriptionConcours')
            ->add('fraisParticipation')
            ->add('dateDebutDepot')
            ->add('dateFinDepot')
            ->add('typeConcour')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Squad\FttBundle\Entity\Concours'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'squad_fttbundle_concours';
    }
}
