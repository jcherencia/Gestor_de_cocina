<?php

namespace Gestor_cocina\AlmacenBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductosType extends AbstractType
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
            ->add('precio')
            ->add('unidadCompra')
            ->add('unidad')
            ->add('stock')
            ->add('stockMin')
            ->add('foto')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gestor_cocina\AlmacenBundle\Entity\Productos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'gestor_cocina_almacenbundle_productos';
    }
}
