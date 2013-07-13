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
            ->findLastPosts(10)
            ->getQuery()
            ->getResult()
        ;
        
        return $this->render('InfocorpIntercursosBundle:Default:index.html.twig', array(
            'news' => $news,
        ));
    }

    public function newsAction()
    {
        $news = $this
            ->getDoctrine()
            ->getRepository('ApplicationSonataNewsBundle:Post')
            ->findAll()
        ;

        return $this->render('InfocorpIntercursosBundle:Default:news.html.twig', array(
            'news' => $news,
        ));
    }

    public function showNewsAction($id)
    {
        $news = $this
            ->getDoctrine()
            ->getRepository('ApplicationSonataNewsBundle:Post')
            ->find($id)
        ;
        
        return $this->render('InfocorpIntercursosBundle:Default:show_news.html.twig', array(
            'news' => $news,
        ));
    }
}