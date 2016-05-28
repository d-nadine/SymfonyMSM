<?php

namespace msmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('msmBundle:Default:index.html.twig', array( ));
    }
}
