<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Stream;
use AppBundle\Form\StreamType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StreamController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        //TODO use $request to sort / filter / paginate
        $streams = $this->getDoctrine()
            ->getRepository('AppBundle:Stream')
            ->findAll();

        return $this->render('stream/index.html.twig', [
            'streams' => $streams
        ]);
    }

    /**
     * @param Stream $stream
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Stream $stream)
    {
        return $this->render('stream/show.html.twig', array(
            'stream' => $stream
        ));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $stream = new Stream();
        $form = $this->createForm(StreamType::class, $stream);
        $form->handleRequest($request);
//        var_dump($form);
//        $response = $this->render('stream/new.html.twig', array('form' => $form->createView()));
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stream);
            $em->flush();
            $referer = $request->headers->get('referer');
            $response = $this->redirect($referer);
            $this->get('session')->getFlashBag()->add('success', 'Stream posted');
        } else {
//            $this->get('session')->
            $response = $this->redirect($this->generateUrl('homepage'));
        }

        return $response;
    }
}
