<?php

namespace frontoffice\frontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Squad\FttBundle\Entity\Joueur;
use Squad\FttBundle\Form\JoueurType;

/**
 * Joueur controller.
 *
 */
class JoueurController extends Controller {

    /**
     * Lists all Joueur entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Joueur')->findAll();

        return $this->render('frontofficefrontBundle:Joueur:showAll.html.twig', array(
                    'entities' => $entities,
        ));
    }
    public function showAction($cin) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Joueur')->find($cin);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Joueur entity.');
        }


        return $this->render('frontofficefrontBundle:Joueur:show.html.twig', array(
                    'entity' => $entity
        ));
    }
}


