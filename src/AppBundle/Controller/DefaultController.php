<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Photo;
use AppBundle\Entity\Stream;
use AppBundle\Form\PhotoType;
use AppBundle\Form\StreamType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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

        $stream = new Stream();
        $streamForm = $this->createForm(StreamType::class, $stream, array(
            'action' => $this->generateUrl('stream_new')
        ));
        $photo = new Photo();
        $photoForm = $this->createForm(PhotoType::class, $photo, array(
//            'action' => $this->generateUrl('photo_new')
        ));

        return $this->render('default/index.html.twig', [
            'streams' => $streams,
            'streamForm' => $streamForm->createView(),
            'photoForm' => $photoForm->createView()
        ]);
    }
}
