<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class, ['label' => 'Prenom *', 'required' => false])
            ->add('lastname', TextType::class, ['label' => 'Nom *', 'required' => false])
            ->add('email', EmailType::class, ['label' => 'Email *', 'required' => false])
            ->add('password', PasswordType::class, ['label' => 'Mot de Passe *', 'required' => false])
            ->add('image', TextType::class, ['label' => 'Image de Profil', 'required' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
