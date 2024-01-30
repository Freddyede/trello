<?php

namespace App\Form;

use App\Entity\Tasks;
use Symfony\Component\{
    Form\AbstractType,
    Form\FormBuilderInterface,
    OptionsResolver\OptionsResolver
};
use Symfony\Component\Form\Extension\Core\Type\{
    SubmitType,
    TextareaType,
    TextType
};

class TasksType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class)
            ->add('content', TextareaType::class) // TextareaType::class => Form\Extension\Core
            ->add('submit', SubmitType::class) // SubmitType::class => Form\Extension\Core
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tasks::class,
        ]);
    }
}
