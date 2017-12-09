<?php

namespace SquadMail\MailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SquadMailMailBundle:Default:index.html.twig', array('name' => $name));
    }
}
