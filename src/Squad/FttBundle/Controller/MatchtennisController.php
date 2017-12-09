<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Squad\FttBundle\Entity\Matchtennis;
use Squad\FttBundle\Form\MatchtennisType;

/**
 * Matchtennis controller.
 *
 * @Route("/matchtennis")
 */
class MatchtennisController extends Controller {

    /**
     * Lists all Matchtennis entities.
     *
     * @Route("/", name="matchtennis")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Matchtennis')->findBy(array(), array('dateMatch' => 'DESC'));

        foreach ($entities as $e) {
            $mhj = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('matchMatch' => $e->getIdMatch()));
            $joueurs = array();
            foreach ($mhj as $m) {
                if ($m && $m->getJoueurCin()) {
                    $j = $em->getRepository('SquadFttBundle:Joueur')->findOneBy(array('cinJoueur' => $m->getJoueurCin()));
                    array_push($joueurs, $j);
                }
            }
            $e->setJoueurs($joueurs);

            $sets = $em->getRepository('SquadFttBundle:Sets')->findBy(array('matchMatch' => $e->getIdMatch()));

            $e->setSets($sets);
        }
        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Matchtennis entity.
     *
     * @Route("/", name="matchtennis_create")
     * @Method("POST")
     * @Template("SquadFttBundle:Matchtennis:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Matchtennis();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $tour = $em->getRepository('SquadFttBundle:Tour')->find(1);
            $entity->setTourTour($tour);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('back_matchtennis_show', array('id' => $entity->getIdMatch())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Matchtennis entity.
     *
     * @param Matchtennis $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Matchtennis $entity) {
        $form = $this->createForm(new MatchtennisType(), $entity, array(
            'action' => $this->generateUrl('back_matchtennis_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crée','attr'=>array('class'=>"btn icon-btn btn-info")));

        return $form;
    }

    /**
     * Displays a form to create a new Matchtennis entity.
     *
     * @Route("/new", name="matchtennis_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {
        $entity = new Matchtennis();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Matchtennis entity.
     *
     * @Route("/{id}", name="matchtennis_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Matchtennis')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Matchtennis entity.');
        }

        $mhj = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('matchMatch' => $entity->getIdMatch()));
        $joueurs = array();
        foreach ($mhj as $m) {
            if ($m && $m->getJoueurCin()) {
                $j = $em->getRepository('SquadFttBundle:Joueur')->findOneBy(array('cinJoueur' => $m->getJoueurCin()));
                array_push($joueurs, $j);
            }
        }
        $entity->setJoueurs($joueurs);

        $sets = $em->getRepository('SquadFttBundle:Sets')->findBy(array('matchMatch' => $entity->getIdMatch()));

        $entity->setSets($sets);
        $deleteForm = $this->createDeleteForm($id);


        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Matchtennis entity.
     *
     * @Route("/{id}/edit", name="matchtennis_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Matchtennis')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Matchtennis entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Matchtennis entity.
     *
     * @param Matchtennis $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Matchtennis $entity) {
        $form = $this->createForm(new MatchtennisType(), $entity, array(
            'action' => $this->generateUrl('back_matchtennis_update', array('id' => $entity->getIdMatch())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier','attr'=>array('class'=>"btn icon-btn btn-warning")));

        return $form;
    }

    /**
     * Edits an existing Matchtennis entity.
     *
     * @Route("/{id}", name="matchtennis_update")
     * @Method("PUT")
     * @Template("SquadFttBundle:Matchtennis:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Matchtennis')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Matchtennis entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('back_matchtennis_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Matchtennis entity.
     *
     * @Route("/{id}", name="matchtennis_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SquadFttBundle:Matchtennis')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Matchtennis entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('back_matchtennis'));
    }

    /**
     * Creates a form to delete a Matchtennis entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('back_matchtennis_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                       ->add('submit', 'submit', array('label' => 'Supprimer','attr'=>array('class'=>"btn icon-btn btn-danger")) ) 
                        ->getForm()
        ;
    }

}
