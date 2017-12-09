<?php

namespace frontoffice\frontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('frontofficefrontBundle:Default:index.html.twig');
    }
    
    public function videoAction()
    {
        return $this->render('frontofficefrontBundle:Default:video.html.twig');
    }
    public function video1Action()
    {
        return $this->render('frontofficefrontBundle:Default:video1.html.twig');
    }
    public function video2Action()
    {
        return $this->render('frontofficefrontBundle:Default:video2.html.twig');
    }
    public function video3Action()
    {
        return $this->render('frontofficefrontBundle:Default:video3.html.twig');
    }
    
     public function actualitesAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Actualites')->findAll();

        return $this->render('frontofficefrontBundle:Default:actualites.html.twig', array('entities' => $entities));
    }
    
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Actualites')->find($id);

        return $this->render('frontofficefrontBundle:Default:ShowActualite.html.twig', array('entity' => $entity));
    }
}
