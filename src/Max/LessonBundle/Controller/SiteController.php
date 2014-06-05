<?php

namespace Max\LessonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SiteController extends Controller
{
   /**
     * @Route("/test")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}