<?php

namespace App\Table;

use App\Entity\Persona;
use HelloSebastian\HelloBootstrapTableBundle\Columns\ColumnBuilder;
use HelloSebastian\HelloBootstrapTableBundle\Columns\TextColumn;
use HelloSebastian\HelloBootstrapTableBundle\Columns\HiddenColumn;
use HelloSebastian\HelloBootstrapTableBundle\Columns\ActionColumn;
use HelloSebastian\HelloBootstrapTableBundle\Columns\BooleanColumn;
use HelloSebastian\HelloBootstrapTableBundle\HelloBootstrapTable;


class PersonaTable extends HelloBootstrapTable
{
    protected function buildColumns(ColumnBuilder $builder, $options)
    {
        $this->setTableDataset(array(
            'locale' => 'es-ES'
        ));
        $builder
            ->add('id_per', HiddenColumn::class, array(
                'title' => 'Identificador'
            ))
            ->add('nombre', TextColumn::class, array(
                'title' => 'Nombre'
            ))
           
            ->add('tel', TextColumn::class, array(
                'title' => 'Telefono'
            ))
            ->add('correo', TextColumn::class, array(
                'title' => 'Nombre'
            ))

            ->add('removed', BooleanColumn::class, array(
                'title' => 'Estado',
                'trueLabel' => '<span class="badge badge-pill badge-danger">Removido</span>',
                'falseLabel' => '<span class="badge badge-pill badge-success">Vigente</span>'
            ))
            ->add("actions", ActionColumn::class, array(
                'title' => 'Acciones',
                'width' => 150,
                'buttons' => array(
                    array(
                        'displayName' => '<i class="feather icon-eye"></i>',
                        'routeName' => 'app_persona_edit',
                        'attr' => ["title" => "Ver Persona"],
                        'classNames' => 'btn btn-icon btn-outline-info btn-xs',
                    ),


                )
            ));
    }

    protected function getEntityClass()
    {
        return Persona::class;
    }
}
