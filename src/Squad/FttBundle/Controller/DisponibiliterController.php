<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Squad\FttBundle\Entity\Disponibiliter;
use Squad\FttBundle\Form\DisponibiliterType;

/**
 * Concours controller.
 *
 * @Route("/Disponibiliter")
 */
class DisponibiliterController extends Controller {

    public function indexAction($d) {

        $em = $this->getDoctrine()->getManager();
        $entity = new Disponibiliter();
        $user->$em->getRepository('SquadFttBundle:Utilisateur')->find(39);

        $entity->setDateEmpechement(new \DateTime($d));
        $entity->setUserUser($user);



        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('arbitre'));

        
    }

    /**
     * Creates a new Disponibiliter entity.
     *
     * @Route("/", name="disponibiliter")
     * @Method("POST")
     * @Template("SquadFttBundle:Disponibiliter:index.html.twig")
     */
    public function createAction(Request $request) {

        $entity = new Disponibiliter();
        $form = $this->createForm(new DisponibiliterType());

        if ($request->isMethod('POST')) {
            $form->submit($request);


            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('index', array('idDispo' => $entity->getIdDispo())));
            }

            return array(
                'entity' => $entity,
                'form' => $form->createView(),
            );
        }
    }

}
