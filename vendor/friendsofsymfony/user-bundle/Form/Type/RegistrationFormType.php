<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace FOS\UserBundle\Form\Type;
use FTT\UserBundle\Form\StringToArrayTransformer;
use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegistrationFormType extends AbstractType {

    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class) {
        $this->class = $class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $transformer = new StringToArrayTransformer();
        $builder
                ->add('email', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\EmailType'), array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
                ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
                ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                    'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                    'options' => array('translation_domain' => 'FOSUserBundle'),
                    'first_options' => array('label' => 'form.password'),
                    'second_options' => array('label' => 'form.password_confirmation'),
                    'invalid_message' => 'fos_user.password.mismatch',
                ))
                ->add('nom')
                ->add('prenom')
                ->add('dateDeNaissance' ,'birthday' , array(
                'format'        => 'd M y',
                'empty_value'   => array('year' => 'Annee' , 'month' => 'Mois' , 'day' => 'Jour') )
)
                ->add('tel')
  
                           ->add('nationaliter', 'choice', array(
                          'label' => "Nationnalité ",
                           'choices' => array(
                        'Tunisie' => 'Tunisie',
                        'Belgique' => 'Belgique',
                        'Allemagne' => 'Allemagne',
                        'Maroc' => 'Maroc',
                        'Inde' => 'Inde ',),
                    'multiple' => false,))
                           ->add('grade_arbitre', 'choice', array(
                          'label' => "Grade_Arbitre ",
                           'choices' => array(
                        'A1' => 'A1',
                        'A2' => 'A2',
                        'A3' => 'A3',
                        'A4' => 'A4',),
                    'multiple' => false,))
                           ->add('type_arbitre', 'choice', array(
                          'label' => "type_Arbitre",
                           'choices' => array(
                        'amateur' => 'Amateur',
                        'National' => 'National',
                        'International' => 'International',),
                    'multiple' => false,))
                ->add($builder->create('roles', 'choice', array(
                            'label' => 'Role:',
                            'mapped' => true,
                            'expanded' => true,
                            'multiple' => false,
                            'choices' => array(
                                'ROLE_RESPONSABLE' => 'Responsable',
                                'ROLE_ARBITRE' => 'Arbitre',
                                'ROLE_MEDECIN' => 'Medecin',
                                'ROLE_ADMIN' => 'Admin',
                                'ROLE_FAN' => 'Fan',)
                        ))->addModelTransformer($transformer))





        ;
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'csrf_token_id' => 'registration',
            // BC for SF < 2.8
            'intention' => 'registration',
        ));
    }

    // BC for SF < 2.7
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $this->configureOptions($resolver);
    }

    // BC for SF < 3.0
    public function getName() {
        return $this->getBlockPrefix();
    }

    public function getBlockPrefix() {
        return 'fos_user_registration';
    }

}
