<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TerminalType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero')
            ->add('estado', 'Symfony\Component\Form\Extension\Core\Type\ChoiceType', array(
                'choices'   => array('Habilitado' => 'habilitado', 'Deshabilitado' => 'deshabilitado', 'En Reparación' => 'en reparacion'), 'required'  => true, 'placeholder' => 'Seleccione un estado'))            
            ->add('coordenada', null, array('attr' => array(
             'placeholder' => 'ingrese las coordenadas, separadas por coma')))
            ->add('usuario', null, array('attr' => array(
             'placeholder' => 'Seleccione un Supervisor')))
            ->add('bateria')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Terminal'
        ));
    }
}
