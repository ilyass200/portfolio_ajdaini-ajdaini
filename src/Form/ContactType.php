<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Form\PersonneType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
// Entity
use App\Entity\Personne;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $delete_required = ['required'=>false];

        $builder
            ->add('sujet', TextType::class, $delete_required)
            ->add('ville', TextType::class, $delete_required)
            ->add('message',TextareaType::class,$delete_required)
            ->add('valid',SubmitType::class,['label'=>'envoyer'])
  
;
    }

    public function getBlockPrefix()
    {
        return '';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
            "allow_extra_fields" => true
        ]);
    }
}
