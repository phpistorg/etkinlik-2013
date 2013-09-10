<?php

namespace Php\WorkShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PhpWorkShopBundle:Default:index.html.twig');
    }
}
