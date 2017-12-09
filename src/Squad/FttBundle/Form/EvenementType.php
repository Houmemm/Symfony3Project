<?php

namespace Squad\FttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EvenementType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('libelleEvenement')
                ->add('dateDebut')
                ->add('dateFin')
                         ->add('type', 'choice', array(
                    'label' => "Veuillez choisir le type",
                    'choices' => array(
                        'single' => 'Single',
                        'double' => 'Double',),
                    'multiple' => false,))
                           ->add('site', 'choice', array(
                          'label' => "Gouvernorat ",
                           'choices' => array(
                        'ariana' => 'ariana',
                        'beja' => 'beja',
                        'benArous' => 'benArous',
                        'bizerte' => 'bizerte',
                        'gabes' => 'gabes',
                        'jendouba' => 'jendouba',
                        'kairouan' => 'kairouan',
                        'kasserine' => 'kasserine',
                        'kebili' => 'kebili',
                        'mahdia' => 'mahdia',
                        'manouba' => 'manouba',
                        'mednine' => 'mednine',
                        'monastir' => 'monastir',
                        'nabeul' => 'nabeul',
                        'sfax' => 'sfax',
                        'sidiBouzid' => 'sidiBouzid',
                        'siliana' => 'siliana',
                        'sousse' => 'sousse',
                        'tatouinne' => 'tatouine',
                        'tozeur' => 'tozeur',
                        'tunis' => 'tunis',
                        'zaghouan' => 'zaghouan',),
                    'multiple' => false,))
         
                ->add('nbreJoueur', 'choice', array(
                    'label' => "Veuillez choisir le nombre de joueurs",
                    'choices' => array(
                        4 => '4',
                        8 => '8',
                        16 => '16',
                        32 => '32',
                        64 => '64',),
                    'multiple' => false,))
                ->add('imageEve','file',array('required'=>false))
                ->add('statut', 'choice', array(
                    'label' => "Voulez vous publiez cet evenement ?",
                    'choices' => array(
                        'publier' => 'publier',
                        'NonPublier' => 'NonPublier',),
                    'multiple' => false,))
        ;
    }

     
    
    
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Squad\FttBundle\Entity\Evenement'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'squad_fttbundle_evenement';
    }

}
