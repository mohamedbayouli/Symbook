<?php

namespace App\Form;

use App\Entity\Livre;
use App\Entity\Categories;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Regex;

class LivreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre' ,TextType::class,[
                'constraints'=>[
                new Length([
                    'min'=> 3,
                    'max'=>50,
                   'minMessage'=> 'Le libelle doit contenir au moins {{ limit }} caractères',
                    'maxMessage'=>'Le libelle ne doit pas dépasser {{ limit }} caractères'
                ]),
                new Regex([
                    'pattern'=>'/^[a-zA-Z0-9\s]+$/',
                    'message'=>'Le libelle ne doit pas contenir de caractères spéciaux'
                ])
            ]
            ])
            ->add('slug')
            ->add('image')
            ->add('resume')
            ->add('editeur')
            ->add('dateEdition', null, [
                'widget' => 'single_text'
            ])
            ->add('prix')
            ->add('isbn')
            ->add('cat', EntityType::class, [
                'class' => Categories::class,
'choice_label' => 'libelle',
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Enregistrer',
                'attr' => ['class' => 'btn btn-primary w-100'],
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Livre::class,
        ]);
    }
}
