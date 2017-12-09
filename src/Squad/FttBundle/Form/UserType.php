<?php

namespace Squad\FttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cinUser')
            ->add('nom')
            ->add('prenom')
            ->add('dateDeNaissance')
            ->add('nationaliter')
            ->add('tel')
            ->add('mail')
            ->add('login')
            ->add('password')
            ->add('gradeArbitre')
            ->add('role')
            ->add('typeArbitre')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Squad\FttBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'squad_fttbundle_user';
    }
}
