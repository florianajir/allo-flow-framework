<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //remove confirmation field
        $builder->remove('plainPassword');
        $builder->add('plainPassword', PasswordType::class, array('label' => 'form.password', 'translation_domain' => 'FOSUserBundle'));
        $builder->add(
            'city_search',
            TextType::class,
            array(
                'mapped' => false,
                'label' => 'form.user.city',
                'translation_domain' => 'form'
            )
        );
        $builder->add(
            'city',
            CityType::class,
            array(
                'label' => false
            )
        );
        $builder->add(
            'locale',
            HiddenType::class
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
}
