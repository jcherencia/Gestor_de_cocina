<?php

namespace Gestor_cocina\RecetasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RecetasType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('slug')
            ->add('fecha_creacion')
            ->add('descripcion')
            ->add('comensales')
            ->add('tiempo')
            ->add('foto')
            ->add('tags')
            ->add('precio')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestor_cocina\RecetasBundle\Entity\Recetas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gestor_cocina_recetasbundle_recetas';
    }
}
