<?php

namespace Fastech\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FastechCMSBundle:Default:index.html.twig');
    }
}
