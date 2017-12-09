<?php

namespace frontoffice\frontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Description of ClubController
 *
 * @author hp
 */
class ClubController extends Controller {
    
    public function listeclubsAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Club')->findAll();

        return $this->render('frontofficefrontBundle:Default:listeclubs.html.twig', array('entities' => $entities));
    }
    
    public function afficherClubsAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Club')->find($id);

        return $this->render('frontofficefrontBundle:Default:afficherClubs.html.twig', array('entity' => $entity));
    }
}
