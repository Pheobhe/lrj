<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;


class ProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {           
        $builder
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
