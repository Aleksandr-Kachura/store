<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 29.05.15
 * Time: 19:39
 */
namespace Site\ShopBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProductAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title')
            ->add('description')
            ->add('price')
            ->add('category')
            ->add('brend')
            //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('description')
            ->add('price')
            ->add('category')
            ->add('brend')

            //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('title')
            ->add('description')
            ->add('price')
            ->add('category')
            ->add('brend')

            //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }
}