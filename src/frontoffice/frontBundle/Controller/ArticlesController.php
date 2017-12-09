<?php

namespace frontoffice\frontBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Squad\FttBundle\Entity\Articles;
use Squad\FttBundle\Form\ArticlesType;

/**
 * Articles controller.
 *
 */
class ArticlesController extends Controller {

    /**
     * Lists all Articles entities.
     *
     */
    public function indexAction() {
        $session = $this->getRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('SquadFttBundle:Articles')->findAll();

        if ($session->has('panier')) {
            $panier = $session->get('panier');
            $total = count($session->get('panier'));
        } else {
            $panier = false;
            $total = 0;
        }
        return $this->render('frontofficefrontBundle:Articles:showAll.html.twig', array(
                    'entities' => $entities,
                    'panier' => $panier,
                    'total' =>$total
        ));
    }

    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Articles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articles entity.');
        }


        return $this->render('frontofficefrontBundle:Articles:show.html.twig', array(
                    'entity' => $entity,
        ));
    }

}
