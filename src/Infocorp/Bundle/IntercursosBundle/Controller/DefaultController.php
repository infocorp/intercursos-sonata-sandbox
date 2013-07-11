<?php

namespace Infocorp\Bundle\IntercursosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $news = $this
            ->getDoctrine()
            ->getRepository('ApplicationSonataNewsBundle:Post')
            ->findLastPostQueryBuilder(10)
            ->getQuery()
            ->getResult()
        ;
        
        return $this->render('InfocorpIntercursosBundle:Default:index.html.twig', array(
            'news' => $news,
        ));
    }
}