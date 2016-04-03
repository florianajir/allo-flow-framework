<?php
namespace AppBundle\Form\DataTransformer;

use AppBundle\Entity\Tag;
use AppBundle\Manager\TagManager;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Form\DataTransformerInterface;

class TagListTransformer implements DataTransformerInterface
{
    /**
     * @var TagManager
     */
    private $manager;

    /**
     * TagListTransformer constructor.
     *
     * @param TagManager $manager
     */
    public function __construct(TagManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * Transforms an object (Tag ArrayCollection) to a string (tags name list).
     *
     * @param Tag[]|ArrayCollection|null $tags
     * @return string
     */
    public function transform($tags)
    {
        if (null === $tags) {
            return '';
        }
        $names = array();
        foreach ($tags as $tag) {
            $names[] = $tag->getName();
        }

        return implode(', ', $names);
    }

    /**
     * Transforms a string (name list) to an object (Tag ArrayCollection).
     *
     * @param string $tagNames
     *
     * @return Tag[]|null
     */
    public function reverseTransform($tagNames)
    {
        // no tag name? It's optional, so that's ok
        if (!$tagNames) {
            return;
        }

        $names = explode(',', $tagNames);
        $tags = new ArrayCollection();
        foreach ($names as $tagName) {
            $tagName = trim($tagName);
            $tag = $this->manager->loadTag($tagName);
            if (null === $tag) {
                // create the tag
                $tag = new Tag();
                $tag->setName($tagName);
                $this->manager->create($tag);
            }
            $tags->add($tag);
        }

        return $tags;
    }
}
