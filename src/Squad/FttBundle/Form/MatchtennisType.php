<?php

namespace Squad\FttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Squad\FttBundle\Entity\UtilisateurRepository;

class MatchtennisType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('dateMatch', 'date')
                ->add('valeurEnPoint', 'integer')
                ->add('stadeStade', 'entity', array('class' => 'SquadFttBundle:Stade'))
                ->add('userUser', 'entity', array('class' => 'SquadFttBundle:Utilisateur', 'query_builder' => function(UtilisateurRepository $er) {
                        return $er->getByRoleType("ARBITRE");
                    }
                ))

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Squad\FttBundle\Entity\Matchtennis'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'squad_fttbundle_matchtennis';
    }

}
