<?php

namespace AppBundle\Form;

use AppBundle\Form\DataTransformer\TagListTransformer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TagListType extends AbstractType
{
    /**
     * @var TagListTransformer
     */
    private $transformer;

    /**
     * @param TagListTransformer $transformer
     */
    public function __construct(TagListTransformer $transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer($this->transformer);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'required'  => false,
            'translation_domain' => 'form',
            'block_name' => 'tag_list',
            'label' => 'form.tags',
            'label_attr' => array(
                'class' => 'sr-only'
            ),
            'attr' => array(
                'placeholder' => 'form.tags'
            )
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return TextType::class;
    }
}
