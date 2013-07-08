<?php

namespace Infocorp\Bundle\IntercursosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InfocorpIntercursosBundle:Default:index.html.twig', array());
    }
}
