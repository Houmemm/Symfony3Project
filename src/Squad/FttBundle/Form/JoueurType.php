<?php

namespace Squad\FttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JoueurType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cinJoueur')
            ->add('nom')
            ->add('prenom')
            ->add('dateDeNaissance', 'date', [
                  'widget' => 'single_text',
                  'format' => 'dd-MM-yyyy',
                  'attr' => [
                  'class' => 'form-control input-inline datepicker',
                  'data-provide' => 'datepicker',
                  'data-date-format' => 'dd-mm-yyyy'
                  ]
            ])    
            ->add('categorie')
            ->add('categorie', 'choice', array(
                        'choices' => array(
                            'Amateur' => 'Amateur',
                            'Junior' => 'Junior',
                            'Senior' => 'Senior',
                            'Professionelle' => 'Professionelle',
                            
                        ),
                        'expanded' => false,
                        'required' => true,
                    ))
            ->add('pointAquis')
            ->add('taille')
            ->add('poids')
            ->add('mainForte', 'choice', array(
                        'choices' => array(
                            'Droite' => 'Droite',
                            'Gauche' => 'Gauche',
                            'Les deux' => 'Les deux',
                            
                        ),
                        'expanded' => false,
                        'required' => true,
                    ))    
            ->add('nationaliterJoueur')
            ->add('file', 'file')
            ->add('submit', 'submit', array('label' => 'Ajouter'))
                
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Squad\FttBundle\Entity\Joueur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'squad_fttbundle_joueur';
    }
}
