<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends RessourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add(
                'price',
                MoneyType::class,
                array(
                    'divisor' => 100,
                )
            )
            ->add(
                'beginDate',
                DateTimeType::class
            )
            ->add(
                'endDate',
                DateTimeType::class
            )
            ->add(
                'creation',
                DateType::class
            )
            ->add(
                'stock',
                NumberType::class,
                array(
                    'attr' => array(
                        'min' => 1
                    )
                )
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product'
        ));
    }
}
