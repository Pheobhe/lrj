<?php

namespace App\Form;
use App\Entity\Pago;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class CargaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pago', EntityType::class, [
                'label' => 'Seleccione Pago',
                'class' => Pago::class,
                'choice_label' => 'nombre',
            ])
            // ->add('created_at', DateType::class, [
            //     'widget' => 'single_text',
            // ])
        
            ->add('Siguiente', SubmitType::class, [
                'attr' => ['class' => 'btn btn-outline-primary'],
            ])
        ;
    }

    // public function configureOptions(OptionsResolver $resolver): void
    // {
    //     $resolver->setDefaults([
    //         'data_class' => Pago::class,
           
    //     ]);
    // }
}
