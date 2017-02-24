<?php

namespace AsesoresSABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AsesoresSABundle\Entity\Cliente;
use AsesoresSABundle\Entity\Aseguradora;
use AsesoresSABundle\Form\ClienteType;
use AsesoresSABundle\Form\AseguradoraType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PolizaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeropoliza', 'integer', array('required'=>true, 'max_length'=>'The value {{ 4 }} is no'))
            ->add('idaseguradora', EntityType::class, array(
                'placeholder' => '-- Seleccione --',
                'class' => 'AsesoresSABundle:Aseguradora',
                'choice_label' => function($aseguradora){
                    return $aseguradora->getSiglaaseguradora()." - ".$aseguradora->getNombreaseguradora();
                }
            ))
            ->add('idcliente', EntityType::class, array(
                'placeholder' => '-- Seleccione --',
                'class' => 'AsesoresSABundle:Cliente',
                'choice_label' => function($cliente){
                    return $cliente->getFilecliente()." - ".$cliente->getNombrecliente()." ".$cliente->getApellidocliente();
                }
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AsesoresSABundle\Entity\Poliza'
        ));
    }
}
