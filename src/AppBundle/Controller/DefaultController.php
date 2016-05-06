<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Florian Ajir <florianajir@gmail.com>
 */
class DefaultController extends Controller
{
    /**
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $streams = $this->getDoctrine()
            ->getRepository('AppBundle:Stream')
            ->findLatests();

        $users = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->findLatests();

        // TODO load lists : cities, artists, events, addresses

        return $this->render('default/index.html.twig', [
            'latest_streams' => $streams,
            'latest_users' => $users
        ]);
    }

    /**
     * Change the locale for the current user
     *
     * @param string $language
     * @param Request $request
     *
     * @return array
     */
    public function setLocaleAction($language, Request $request)
    {
        if ($language != null) {
            $request->getSession()->set('_locale', $language);
        }

        $url = $request->headers->get('referer');
        if (empty($url)) {
            $url = $this->get('router')->generate('index');
        }

        //TODO if user connected update his locale in database

        return new RedirectResponse($url);
    }
}
