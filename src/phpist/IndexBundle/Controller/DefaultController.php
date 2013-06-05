<?php

namespace phpist\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('phpistIndexBundle:Default:index.html.twig', array('name' => "osman"));
    }
}
