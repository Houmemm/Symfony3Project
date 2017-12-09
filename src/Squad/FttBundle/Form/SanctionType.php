<?php

namespace Squad\FttBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SanctionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateDebutSanction','date',array('widget' => 'single_text',
        'format' => 'yyyy-MM-dd','label' => 'Date debut de la sanction:','attr'=>array ('class'=>'form-control' )))
            ->add('typeSanction','integer',array('label' => 'La duree:','attr'=>array ('class'=>'form-control' )))
            
            ->add('descriptionSanction','text',array('label' => 'Description:','attr'=>array ('class'=>'form-control' )))
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Squad\FttBundle\Entity\Sanction'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'squad_fttbundle_sanction';
    }
}
