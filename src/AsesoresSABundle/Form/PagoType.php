<?php

namespace AsesoresSABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PagoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tasapago')
            ->add('primapago')
            ->add('porcentajecomisionpago')
            ->add('metodopago', 'choice', array('required'=>true, 'choices' =>array(''=>'-- Seleccione --','Contado'=>'Contado', 'Credito'=>'Credito','Tarjeta de Credito'=>'Tarjeta de Credito', 'Transferencia Bancaria'=>'Transferencia Bancaria')))
            ->add('numerocuotas')
            ->add('comisionpago')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AsesoresSABundle\Entity\Pago'
        ));
    }
}
