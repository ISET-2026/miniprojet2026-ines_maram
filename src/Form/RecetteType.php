<?php

namespace App\Form;

use App\Entity\CategorieRecette;
use App\Entity\Recette;
use App\Entity\TagRecette;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
            ->add('titre',TextType::class, [
                  'label' => 'Nom de recette',
                'attr' => [
                    'placeholder' => 'nom',
                    'class' => 'form-control',
                ]
                ])
            ->add('description',TextareaType::class, [
                  'label' => 'description',
                'attr' => [
                    'placeholder' => 'description',
                    'class' => 'form-control',
                ]
                ])
            ->add('instructions',TextareaType::class, [
                  'label' => 'instruction',
                'attr' => [
                    'placeholder' => 'instruction',
                    'class' => 'form-control',
                ]
                ])
            ->add('tempsPreparation',IntegerType::class, [
                  'label' => 'tempsPreparation',
                'attr' => [
                    'placeholder' => 'tempsPreparation',
                    'class' => 'form-control',
                ]
                        ])
                ->add('tempsCuisson', IntegerType::class, [
            'label' => 'Temps de cuisson',
            'required' => false, 
            'attr' => [
                'placeholder' => 'tempsCuisson',
                'class' => 'form-control',
            ]
])
            ->add('difficulte', ChoiceType::class, [
                 'label' => 'Difficulté',
                'choices'  => [
        'Facile' => 'facile',
        'Moyen' => 'moyen',
        'Difficile' => 'difficile',
        ],
        'attr' => [
            'class' => 'form-control',
         ]
        ])
            ->add('nbPersonnes',IntegerType::class, [
                  'label' => 'nbPersonnes',
                'attr' => [
                    'placeholder' => 'nbPersonnes',
                    'class' => 'form-control',
                ]
                ])
            
            ->add('publiee', CheckboxType::class, [
    'label' => 'Publier cette recette ?',
    'required' => false, 
      
    'attr' => [
        'class' => 'form-check-input', 
    ],
    'label_attr' => [
        'class' => 'form-check-label'
    ],
    'row_attr' => [
        'class' => 'form-check mb-3'
    ]
])
  
    ->add('imageFile', FileType::class, [
        'required' => false,
        'mapped' => false,
    ])

        ->add('categorie', EntityType::class, [
                'class' => CategorieRecette::class,
                'choice_label' => 'nom', 
                'label' => 'Catégorie',
                'attr' => ['class' => 'form-control']
            ])
            
            ->add('tags', EntityType::class, [
                'class' => TagRecette::class,
                'choice_label' => 'nom',
                'multiple' => true,
                'expanded' => true, 
                'label' => 'Tags',
             
         'by_reference' => false,
            ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    
    {
        $resolver->setDefaults([
        'data_class' => Recette::class,
        'allow_extra_fields' => true, 
    ]);
    }
}
