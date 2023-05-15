<?php
namespace App\Table;

use App\Entity\User;
use HelloSebastian\HelloBootstrapTableBundle\Columns\ColumnBuilder;
use HelloSebastian\HelloBootstrapTableBundle\Columns\TextColumn;
use HelloSebastian\HelloBootstrapTableBundle\Columns\DateTimeColumn;
use HelloSebastian\HelloBootstrapTableBundle\Columns\HiddenColumn;
use HelloSebastian\HelloBootstrapTableBundle\Columns\ActionColumn;
use HelloSebastian\HelloBootstrapTableBundle\Columns\BooleanColumn;
use HelloSebastian\HelloBootstrapTableBundle\Columns\CountColumn;
use HelloSebastian\HelloBootstrapTableBundle\HelloBootstrapTable;

class UserTable extends HelloBootstrapTable
{
    protected function buildColumns(ColumnBuilder $builder, $options)
    {
        $this->setTableDataset(array(
            'locale' => 'es-ES'
        ));
        $builder
            ->add('id', HiddenColumn::class, array(
                'title' => 'ID',
            ))
            ->add('username', TextColumn::class, array(
                'title' => 'USUARIO'
            ))
            ->add("roles", TextColumn::class, array(
                'title' => 'ROLES',                
                'data' => function (User $user) {
                    return $user->getStringRole();
                },
            ))
            ->add("persona", TextColumn::class, array(
                'title' => 'Persona al que pertenece',
                'data' =>  function (User $user) {
                    return ($user->getOrganismo())?$user->getOrganismo()->getNombre():"";
                }           
            ))
            ->add("createdAt", DateTimeColumn::class, array(
                'title' => 'CREADO EN'                
            ))
            ->add("actions", ActionColumn::class, array(
                'title' => 'Acciones',
                'width' => 150,
                'buttons' => array(
                 array(
                        'displayName' => '<i class="feather icon-eye"></i>',
                        'routeName' => 'user_edit',
                        'classNames' => 'btn btn-icon btn-outline-success',
                        'addIf' => function(User $user) {
                            return $this->security->isGranted('ROLE_USER');
                        }
                    )
                )
            ));
    }

    protected function getEntityClass()
    {
        return User::class;
    }
}