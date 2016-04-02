<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class StreamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'name',
                TextType::class,
                array(
                    'attr' => array(
                        'autocomplete' => 'off',
                        'placeholder' => 'Stream'
                    )
                )
            )
            ->add(
                'description',
                TextareaType::class,
                array(
                    'attr' => array()
                )
            )
            ->add('tags', CollectionType::class, array(
                    'required'  => false,
                    'entry_type' => TagType::class,
                    'allow_add' => true,
                    'by_reference' => false,
                    'prototype_name' => 'prototype'
                )
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Stream'
        ));
    }
}