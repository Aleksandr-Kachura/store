<?php
namespace Bundles\StoreBundle\Form;
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 26.05.15
 * Time: 7:54
 */


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('price')
            ->add('brend')

        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bundles\StoreBundle\Entity\Product',
           // 'csrf_protection' => false
            // Rest of options omitted
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'prodbundle';
    }
}