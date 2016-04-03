<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TagController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $tags = $this->getDoctrine()
            ->getRepository('AppBundle:Tag')
            ->findAll();

        return $this->render('tag/index.html.twig', [
            'tags' => $tags
        ]);
    }

    /**
     * @param Tag $tag
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Tag $tag)
    {
        return $this->render('tag/show.html.twig', array(
            'tag' => $tag
        ));
    }
}
