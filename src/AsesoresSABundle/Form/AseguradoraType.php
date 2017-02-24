<?php

namespace AsesoresSABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AseguradoraType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('siglaaseguradora')
            ->add('nombreaseguradora')
            ->add('estadoaseguradora', 'choice', array('required'=>true, 'choices' =>array(''=>'--Seleccione--','A'=>'Activo', 'I'=>'Inactivo')))
            ->add('Guardar', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AsesoresSABundle\Entity\Aseguradora'
        ));
    }
}
