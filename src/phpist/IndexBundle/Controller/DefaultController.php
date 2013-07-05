<?php

namespace phpist\IndexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\StoreBundle\Entity\Speaker;

class DefaultController extends Controller
{
	public function indexAction()
   {
      $speakers = $this->get('doctrine')
                  ->getRepository('phpistIndexBundle:Speaker')
                  ->findAll();
      
      return $this->render('phpistIndexBundle:Default:index.html.twig', array('speakers' => $speakers));
   }
 		
   public function speakerAction($speakerName)
   {
      $speaker = $this->get('doctrine')
               ->getRepository('phpistIndexBundle:Speaker')
               ->findOneBySlug($speakerName);
      
      
      if(!empty($speaker) && $speaker->getIsActive() == 1) {
         return $this->render('phpistIndexBundle:Default:speaker.html.twig',array('speaker' => $speaker));
      }else{
         throw new \Exception('Something went wrong!');
      }
   }

   public function errorAction($request = null,$exception = null)
   {
   	$code = $exception->getStatusCode();
      return $this->render('phpistIndexBundle:Default:error.html.twig', array('statusCode' => $code));
   }
}
