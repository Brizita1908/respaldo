<?php

namespace AsesoresSABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RamoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('siglaramo', 'text')
            ->add('nombreramo', 'text')
            ->add('tiporamo','choice', array('required'=>true, 'choices' =>array(''=>'-- Seleccione --','G'=>'General', 'E'=>'Especifico')))
            ->add('estadoramo', 'choice', array('required'=>true, 'choices' =>array(''=>'-- Seleccione --','A'=>'Activo', 'I'=>'Inactivo')))
            ->add('Guardar', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AsesoresSABundle\Entity\Ramo'
        ));
    }
}
