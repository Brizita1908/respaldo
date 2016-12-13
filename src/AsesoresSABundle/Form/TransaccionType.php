<?php

namespace AsesoresSABundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AsesoresSABundle\Entity\Usuarios;
use AsesoresSABundle\Entity\Movimiento;
use AsesoresSABundle\Form\UsuariosType;
use AsesoresSABundle\Form\MovimientoType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TransaccionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaentrega', 'date', array("widget"=>"single_text"/*,"html5"=>false,"attr"=>["class"=>"calendario"]*/))
            ->add('mediosolicitud', ChoiceType::class, array(
                'placeholder' => '-- Seleccione --',
                'choices' => array(
                    'T' => 'Teléfono',
                    'E' => 'Émail',
                    'C' => 'Carta',
                    'RS' => 'Redes Sociales'
                ),
            ))
            ->add('fechasolicitud', 'date', array("widget"=>"single_text"))
            ->add('cartafirmadaentrega', 'text')
            ->add('numerocartasolicitud')
            ->add('estadotransaccion', ChoiceType::class, array(
                'placeholder' => '-- Seleccione --',
                'choices' => array(
                    'A' => 'Activo',
                    'E' => 'En espera',
                    'I' => 'Inactivo'
                ),
            ))
            ->add('idmovimiento', EntityType::class, array(
                'placeholder' => '-- Seleccione --',
                'class' => 'AsesoresSABundle:Movimiento',
                'choice_label' => function($movimiento){
                    return $movimiento->getSiglamovimiento()." - ".$movimiento->getNombremovimiento();
                }
            ))
            ->add('idusuario', EntityType::class, array(
                'placeholder' => '-- Seleccione --',
                'class' => 'AsesoresSABundle:Usuarios',
                'choice_label' => 'nombreusuario'
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AsesoresSABundle\Entity\Transaccion'
        ));
    }
}
