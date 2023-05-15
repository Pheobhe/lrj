<?php

namespace App\Form;

use App\Entity\Actividad;
use App\Entity\Pregunta;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ActividadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('created_at')
            ->add('preguntas', EntityType::class, [
                'label' => 'Seleccione Pregunta',
                'class' => Pregunta::class,
                'by_reference' => false,
                'multiple'=> true
            ])        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Actividad::class,
        ]);
    }
}
