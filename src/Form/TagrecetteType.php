<?php

namespace App\Form;

use App\Entity\Tagrecette;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Recette;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;

class TagrecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'nom',
                    'class' => 'form-control',
                ]
                ])
       ->add('couleur', ColorType::class, [ 
                'label' => 'Couleur',
                'attr' => [
                    'class' => 'form-control form-control-color w-100', 
                ]
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
            'data_class' => Tagrecette::class,
        ]);
    }
}
