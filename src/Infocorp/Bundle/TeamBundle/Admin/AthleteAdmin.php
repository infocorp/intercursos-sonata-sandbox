<?php

namespace Infocorp\Bundle\TeamBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\DataGrid\ListMapper;
use Sonata\AdminBundle\DataGrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class AthleteAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', null, array('label' => 'Nome'))
            ->add('rga', null, array('label' => 'RGA'))
            ->add('team', 'sonata_type_model_list', array(
                'label' => 'Equipe',
            ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->addIdentifier('rga')
            ->addIdentifier('team')
        ;
    }
}