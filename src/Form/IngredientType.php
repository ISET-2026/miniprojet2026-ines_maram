<?php

namespace App\Form;

use App\Entity\Ingredient;
use App\Entity\Recette;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType; 
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class IngredientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'nom',
                    'class' => 'form-control',
                ],
            ])
            ->add('quantite',IntegerType::class, [
                'label' => 'quantite',
                'attr' => [
                    'placeholder' => 'quantite',
                    'class' => 'form-control',
                ],
            ])
            ->add('recette', EntityType::class, [
                'class' => Recette::class,
                'choice_label' => 'id',
            ])
           ->add('enregistrer', SubmitType::class, [
                'label' => '💾 Créer la catégorie',
                'attr' => ['class' => 'btn btn-primary w-100 mt-3'],
            ])
            ->getForm();
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ingredient::class,
        ]);
    }
}
