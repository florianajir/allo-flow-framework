<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Stream;
use AppBundle\Form\StreamType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $streams = $this->getDoctrine()
            ->getRepository('AppBundle:Stream')
            ->findLatests();

        $stream = new Stream();
        $form = $this->createForm(StreamType::class, $stream);

        return $this->render('default/index.html.twig', [
            'streams' => $streams,
            'form' => $form->createView()
        ]);
    }
}
