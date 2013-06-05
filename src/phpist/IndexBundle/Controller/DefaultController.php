<?php

namespace phpist\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('phpistIndexBundle:Default:index.html.twig');
    }
 
    public function errorAction($request = null,$exception = null)
    {
        $code = $exception->getStatusCode();
        return $this->render('phpistIndexBundle:Default:error.html.twig', array('statusCode' => $code));
    }
}
