<?php

namespace frontoffice\frontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StadeController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Stade')->findAll();
        return $this->render('frontofficefrontBundle:Stade:index.html.twig', array(
                    'entities' => $entities,));
    }

    public function stadeMapAction($id) { 
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('SquadFttBundle:Stade')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Stade entity.');
            }

            $emp = $entity->getEmplacement();
            return $this->render('frontofficefrontBundle:Stade:stadeMap.html.twig', array('emp' => $emp,
                        'entity' => $entity,));
        }
    }





