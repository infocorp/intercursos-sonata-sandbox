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
        $categoriesManager = $this->get('sonata.news.manager.category');
        $news = $this
            ->getDoctrine()
            ->getRepository('ApplicationSonataNewsBundle:Post')
            ->findAll()
        ;

        $categories = $categoriesManager->findBy(array('enabled' => true));
        
        return $this->render('InfocorpIntercursosBundle:Default:news.html.twig', array(
            'news' => $news,
            'categories' => $categories,
        ));
    }

    public function showNewsAction($slug)
    {
        $news = $this
            ->getDoctrine()
            ->getRepository('ApplicationSonataNewsBundle:Post')
            ->findOneBy(array('slug' => $slug))
        ;
        
        return $this->render('InfocorpIntercursosBundle:Default:show_news.html.twig', array(
            'news' => $news,
        ));
    }

    public function showCategoryAction($id)
    {
        $categoriesManager = $this->get('sonata.news.manager.category');

        $categories = $categoriesManager->findBy(array('enabled' => true));

        $news = $this
            ->getDoctrine()
            ->getRepository('ApplicationSonataNewsBundle:Post')
            ->findBy(array('category' => $categoriesManager->findOneBy(array('id' => $id))))
        ;

        return $this->render('InfocorpIntercursosBundle:Default:news.html.twig', array(
            'news' => $news,
            'categories' => $categories,
        ));
    }
}