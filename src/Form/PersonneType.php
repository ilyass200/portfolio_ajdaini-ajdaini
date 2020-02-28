<?php

namespace App\Form;

use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PersonneType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $delete_required = ['required'=>false];

        $builder
            ->add('prenom_prs',TextType::class,$delete_required, ['label' => 'prenom'])
            ->add('nom_prs',TextType::class, $delete_required, ['label' => 'nom'])
            ->add('email_prs',TextType::class,$delete_required, ['label' => 'email'])
            ->add('mdp_prs',PasswordType::class,$delete_required, ['label' => 'mdp','value'=>'123123'])
            //->add('save', SubmitType::class, ['label' => 'save']);
        ;
    }
    
    public function getBlockPrefix()
    {
        return '';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Personne::class,
            "allow_extra_fields" => true
        ]);
    }
}
