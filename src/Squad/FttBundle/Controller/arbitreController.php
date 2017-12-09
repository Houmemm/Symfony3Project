<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Squad\FttBundle\Entity\Formation;
use Squad\FttBundle\Entity\Disponibiliter;

/**
 * Concours controller.
 *
 * @Route("/arbitre")
 */
class arbitreController extends Controller {

    /**
     * Lists all Formation entities.
     *
     * @Route("/", name="arbitre")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {

        $em = $this->getDoctrine()->getManager();
        //  return $this->render('SquadFttBundle:arbitre:index.html.twig');
        $entities = $em->getRepository('SquadFttBundle:Formation')->findAll();
        $entities2 = $em->getRepository('SquadFttBundle:Concours')->findAll();
        $formation = $this->getRequest()->get('formation');
        $concours = $this->getRequest()->get('concours');



        return array(
            'entities' => $entities,
            'entities2' => $entities2,
        );
    }

    public function dispoAction($date) {

        $em = $this->getDoctrine()->getManager();
        //  return $this->render('SquadFttBundle:arbitre:index.html.twig');
        $entities = $em->getRepository('SquadFttBundle:Formation')->findAll();
        $entities2 = $em->getRepository('SquadFttBundle:Concours')->findAll();
        $formation = $this->getRequest()->get('formation');
        $concours = $this->getRequest()->get('concours');

        $disponibilite = new Disponibiliter();

        $time = strtotime($date);

        $disponibilite->setDateEmpechement(new \DateTime($date));
        $iduser = $this->container->get('security.context')->getToken()->getUser();
        $user = $em->getRepository('SquadFttBundle:Utilisateur')->find($iduser);
        $disponibilite->setUserUser($user);

        $em->persist($disponibilite);
        $em->flush();

        return $this->redirect($this->generateUrl('arbitre', array(
                            'entities' => $entities,
                            'entities2' => $entities2
        )));
    }

}
