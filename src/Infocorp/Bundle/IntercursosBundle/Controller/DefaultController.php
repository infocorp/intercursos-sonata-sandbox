<?php

namespace Infocorp\Bundle\IntercursosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $newsRepo = $this->getDoctrine()
            ->getRepository('SonataNewsBundle:Post')
            ->findLastPostQueryBuilder()
        return $this->render('InfocorpIntercursosBundle:Default:index.html.twig', array());
    }
}