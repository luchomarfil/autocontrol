<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('dni')
            ->add('nombre', null, array('attr' => array(
             'placeholder' => 'ingrese el nombre completo')))
            ->add('password', 'Symfony\Component\Form\Extension\Core\Type\PasswordType')
            ->add('tipo_usuario', 'Symfony\Component\Form\Extension\Core\Type\HiddenType', array(
            'data' => 'No'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Usuario'
        ));
    }
}
