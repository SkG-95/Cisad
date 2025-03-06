<?php

namespace App\Form;

use App\Entity\Infos;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InfosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('rank')
            ->add('victoire')
            ->add('defaite')
            ->add('user', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Infos::class,
            'csrf_protection' => true, // Active la protection CSRF
            'csrf_field_name' => '_token', // Nom du champ CSRF
            'csrf_token_id' => 'infos_item', // Identifiant unique pour ce formulaire
        ]);
    }
}
