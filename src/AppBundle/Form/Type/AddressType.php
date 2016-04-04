<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddressType extends RessourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add(
                'street',
                CityType::class
            )
            ->add(
                'additional',
                CityType::class
            )
            ->add(
                'latitude',
                HiddenType::class
            )
            ->add(
                'longitude',
                HiddenType::class
            )
            ->add(
                'city',
                CityType::class
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', 'AppBundle\Entity\Address');
    }
}
