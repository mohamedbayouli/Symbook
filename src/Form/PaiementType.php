<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('methode', ChoiceType::class, [
                'label' => 'Méthode de paiement',
                'choices' => [
                    'Paiement à domicile' => 'domicile',
                    'Paiement par carte bancaire (Test)' => 'carte',
                ],
                'expanded' => true,
            ])
            ->add('valider', SubmitType::class, [
                'label' => 'Confirmer le paiement',
                'attr' => ['class' => 'btn btn-primary']
            ]);
    }
}