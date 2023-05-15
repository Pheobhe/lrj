<?php
namespace App\Table;

use App\Entity\Pago;
use HelloSebastian\HelloBootstrapTableBundle\Columns\ColumnBuilder;
use HelloSebastian\HelloBootstrapTableBundle\Columns\TextColumn;
use HelloSebastian\HelloBootstrapTableBundle\Columns\DateTimeColumn;
use HelloSebastian\HelloBootstrapTableBundle\Columns\HiddenColumn;
use HelloSebastian\HelloBootstrapTableBundle\Columns\ActionColumn;
use HelloSebastian\HelloBootstrapTableBundle\Columns\BooleanColumn;
use HelloSebastian\HelloBootstrapTableBundle\HelloBootstrapTable;


class PagoTable extends HelloBootstrapTable
{  
    protected function buildColumns(ColumnBuilder $builder, $options)
    {
        $this->setTableDataset(array(
            'locale' => 'es-ES'
        ));
        $builder
            ->add('id', HiddenColumn::class, array(
                'title' => 'Identificador'
            ))
            ->add('nombre', TextColumn::class, array(
                'title' => 'Nombre'
            ))
            ->add('id_pago', HiddenColumn::class, array(
                'title' => 'Nombre'
            ))
            ->add('id_act', HiddenColumn::class, array(
                'title' => 'Telefono'
            ))
            ->add('correo', TextColumn::class, array(
                'title' => 'Nombre'
            ))
            ->add('createdAt', HiddenColumn::class, array(
                'title' => 'Fecha Pago'
            ))
            ->add('removed', BooleanColumn::class, array(
                'title' => 'Estado',
                'trueLabel' => '<span class="badge bg-danger">Removido</span>',
                'falseLabel' => '<span class="badge bg-success">Vigente</span>'
            ))
            ->add("actions", ActionColumn::class, array(
                    'title' => 'Acciones',
                    'width' => 150,
                    'buttons' => array( 
                        array(
                            'displayName' => '<i class="feather icon-eye"></i>',
                            'routeName' => 'app_pago_edit',
                            'attr' => ["title" => "Ver Pago"],
                            'classNames' => 'btn btn-icon btn-outline-info btn-xs',
                        ),

                       
                )
            ));
	        
    }

    protected function getEntityClass()
    {
        return Pago::class;
    }
}
