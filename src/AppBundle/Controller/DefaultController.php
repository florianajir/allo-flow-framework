<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Florian Ajir <florianajir@gmail.com>
 */
class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $streams = $this->getDoctrine()
            ->getRepository('AppBundle:Stream')
            ->findLatests();

        // TODO load lists : cities, artists, events, addresses

        return $this->render('default/index.html.twig', [
            'streams' => $streams
        ]);
    }
}
