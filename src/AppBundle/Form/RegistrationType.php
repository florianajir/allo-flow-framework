<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //remove confirmation field
        $builder->remove('plainPassword');
        $builder->add('plainPassword', PasswordType::class, array('label' => 'form.password', 'translation_domain' => 'FOSUserBundle'));
        $builder->add(
            'city',
            TextType::class,
            array(
                'label' => 'form.user.city',
                'translation_domain' => 'form'
            )
        );
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}