<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Squad\FttBundle\Entity\Sets;
use Squad\FttBundle\Form\SetsType;

/**
 * Sets controller.
 *
 * @Route("/sets")
 */
class SetsController extends Controller {

    /**
     * Lists all Sets entities.
     *
     * @Route("/", name="sets")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($match) {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Sets')->findBy(array('matchMatch' => $match));

        $e = $em->getRepository('SquadFttBundle:Matchtennis')->find($match);

        $mhj = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('matchMatch' => $e));
        $joueurs = array();
        foreach ($mhj as $m) {
            if ($m && $m->getJoueurCin()) {
                $j = $em->getRepository('SquadFttBundle:Joueur')->findOneBy(array('cinJoueur' => $m->getJoueurCin()));
                array_push($joueurs, $j);
            }
        }
        $e->setJoueurs($joueurs);

        $sets = $em->getRepository('SquadFttBundle:Sets')->findBy(array('matchMatch' => $e));

        $e->setSets($sets);
        return array(
            'entities' => $entities,
            'mat' => $e,
        );
    }

    /**
     * Creates a new Sets entity.
     *
     * @Route("/", name="sets_create")
     * @Method("POST")
     * @Template("SquadFttBundle:Sets:new.html.twig")
     */
    public function createAction(Request $request, $match) {
        $entity = new Sets();
        $form = $this->createCreateForm($entity, $match);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $m = $em->getRepository('SquadFttBundle:MatchTennis')->find($match);
            $entity->setMatchMatch($m);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('back_sets', array('match' => $match)));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Sets entity.
     *
     * @param Sets $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Sets $entity, $match) {
        $form = $this->createForm(new SetsType(), $entity, array(
            'action' => $this->generateUrl('back_sets_create', array('match' => $match)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Cree','attr'=>array('class'=>"btn icon-btn btn-info")));

        return $form;
    }

    /**
     * Displays a form to create a new Sets entity.
     *
     * @Route("/new", name="sets_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction($match) {
        $entity = new Sets();

        $em = $this->getDoctrine()->getManager();
        $e = $em->getRepository('SquadFttBundle:Matchtennis')->find($match);

        $mhj = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('matchMatch' => $e));
        $joueurs = array();
        foreach ($mhj as $m) {
            if ($m && $m->getJoueurCin()) {
                $j = $em->getRepository('SquadFttBundle:Joueur')->findOneBy(array('cinJoueur' => $m->getJoueurCin()));
                array_push($joueurs, $j);
            }
        }
        $e->setJoueurs($joueurs);

        $sets = $em->getRepository('SquadFttBundle:Sets')->findBy(array('matchMatch' => $e));

        $e->setSets($sets);
        $form = $this->createCreateForm($entity, $match);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
            'mat' => $e,
        );
    }

    /**
     * Displays a form to edit an existing Sets entity.
     *
     * @Route("/{id}/edit", name="sets_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Sets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sets entity.');
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
     * Creates a form to edit a Sets entity.
     *
     * @param Sets $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Sets $entity) {
        $form = $this->createForm(new SetsType(), $entity, array(
            'action' => $this->generateUrl('back_sets_update', array('id' => $entity->getIdSet())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier','attr'=>array('class'=>"btn icon-btn btn-warning")));

        return $form;
    }

    /**
     * Edits an existing Sets entity.
     *
     * @Route("/{id}", name="sets_update")
     * @Method("PUT")
     * @Template("SquadFttBundle:Sets:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Sets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sets entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('back_sets_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Sets entity.
     *
     * @Route("/{id}", name="sets_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SquadFttBundle:Sets')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sets entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('back_sets', array('match' => $entity->getMatchMatch()->getId())));
    }

    /**
     * Creates a form to delete a Sets entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('back_sets_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Supprimer','attr'=>array('class'=>"btn icon-btn btn-danger")))
                        ->getForm()
        ;
    }

}
