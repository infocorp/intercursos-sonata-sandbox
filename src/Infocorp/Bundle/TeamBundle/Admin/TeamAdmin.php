<?php
namespace Infocorp\Bundle\TeamBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\DataGrid\ListMapper;
use Sonata\AdminBundle\DataGrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TeamAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', null, array('label' => 'Nome'))
            ->add('course', null, array('label' => 'Curso'))
            ->add('sport', 'sonata_type_model_list', array('label' => 'Modalidade'))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('course')
            ->add('sport')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('course')
            ->add('sport')
        ;
    }
}