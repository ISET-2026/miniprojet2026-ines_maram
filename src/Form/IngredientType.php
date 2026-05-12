<?php

namespace App\Form;

use App\Entity\Ingredient;
use App\Entity\Recette;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class IngredientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Nom de l’ingrédient',
                    'class' => 'form-control',
                ],
            ])
            ->add('quantite', IntegerType::class, [
                'label' => 'Quantité',
                'attr' => [
                    'placeholder' => 'Quantité',
                    'class' => 'form-control',
                ],
            ])

            ->add('recette', EntityType::class, [
                'class' => Recette::class,
                'choice_label' => 'titre', 
                'placeholder' => 'Choisir une recette',
                'attr' => [
                    'class' => 'form-control',
                ],
            ])

            ->add('enregistrer', SubmitType::class, [
                'label' => '💾 Enregistrer',
                'attr' => [
                    'class' => 'btn btn-primary w-100 mt-3',
                ],
            ])
            ->add('recette', EntityType::class, [
    'class' => Recette::class,
    'choice_label' => 'titre',
    'attr' => [
        'class' => 'form-control',
        'style' => 'display:none', 
    ],
    'label' => false,
    'placeholder' => false,
]);

            
            

            
    }
    

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ingredient::class,
        ]);
    }
}