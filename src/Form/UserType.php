<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Persona;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {           
        $builder
            ->add('username', TextType::class, [
                'label'    => 'Username',
                'attr' => ['class' => 'form-group '],
                "label_attr" => ['class' => 'col-sm-3 col-form-label font-weight-bolder'],
                'required' => true,
            ])
            ->add('persona',EntityType::class, [
                'class' => Persona::class,
                'attr' => ['class' => 'form-group '],
                "label_attr" => ['class' => 'col-sm-3 col-form-label font-weight-bolder'],
                'required' => true,
            ])
            ->add('roles', ChoiceType::class, [
                'required' => true,
                'multiple' => true,
                'expanded' => false,
                'label' => 'Roles',   
                'attr' => ['class' => 'form-group form-control select2'],
                "label_attr" => ['class' => 'col-sm-3 col-form-label font-weight-bolder'],
                'choices'  => [
                  'Usuario' => 'ROLE_USER',
                  'Administrador' => 'ROLE_ADMIN',
                  'Usuario Externo' => 'ROLE_USER_EXTERNAL',
                  'Super Admin' => 'ROLE_SUPER_ADMIN'
                ],
            ])
            ->add('password', RepeatedType::class, [
                'type'              => PasswordType::class,
                'label'    => 'Contraseña',
                'attr' => ['class' => 'form-group'],
                'first_options'     => array('label' => 'Nueva contraseña'),
                'second_options'    => array('label' => 'Confirmar nueva contraseña'),
                'mapped'            => false,
                'invalid_message' => 'Las contraseñas no coinciden.',
                "label_attr" => ['class' => 'col-sm-3 col-form-label font-weight-bolder'],
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class, 
        ]);
    }
}
