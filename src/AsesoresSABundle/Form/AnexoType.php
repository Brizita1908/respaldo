<?php

namespace AsesoresSABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AsesoresSABundle\Entity\Ramo;
use AsesoresSABundle\Form\RamoType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AnexoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroanexo')
            ->add('iniciovigenciaanexo', 'date', array("widget"=>"single_text"))
            ->add('finvigenciaanexo', 'date', array("widget"=>"single_text"))
            ->add('valortotalaseguradoanexo')
            //->add('idpago')
            ->add('idramo', EntityType::class, array(
                'placeholder' => '-- Seleccione --',
                'class' => 'AsesoresSABundle:Ramo',
                'choice_label' => function($ramo){
                    return $ramo->getSiglaramo()." - ".$ramo->getNombreramo();
                }
            ))
            //->add('idpoliza')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AsesoresSABundle\Entity\Anexo'
        ));
    }
}
