<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Squad\FttBundle\Entity\MatchHasJoueur;
use Squad\FttBundle\Form\MatchHasJoueurType;

/**
 * MatchHasJoueur controller.
 *
 */
class MatchHasJoueurController extends Controller {

    /**
     * Lists all MatchHasJoueur entities.
     *
     */
    public function indexAction($match) {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('matchMatch' => $match));

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
        return $this->render('SquadFttBundle:MatchHasJoueur:index.html.twig', array(
                    'entities' => $entities,
                    'mat' => $e,
        ));
    }

    /**
     * Creates a new MatchHasJoueur entity.
     *
     */
    public function createAction(Request $request, $match) {
        $entity = new MatchHasJoueur();
        $form = $this->createCreateForm($entity, $match);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $m = $em->getRepository('SquadFttBundle:Matchtennis')->find($match);
            $entity->setMatchMatch($m);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('back_matchhasjoueur', array('match' => $match)));
        }

        return $this->render('SquadFttBundle:MatchHasJoueur:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a MatchHasJoueur entity.
     *
     * @param MatchHasJoueur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(MatchHasJoueur $entity, $match) {
        $form = $this->createForm(new MatchHasJoueurType(), $entity, array(
            'action' => $this->generateUrl('back_matchhasjoueur_create', array('match' => $match)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Cree','attr'=>array('class'=>"btn icon-btn btn-info")));

        return $form;
    }

    /**
     * Displays a form to create a new MatchHasJoueur entity.
     *
     */
    public function newAction($match) {

        $entity = new MatchHasJoueur();

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

        return $this->render('SquadFttBundle:MatchHasJoueur:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'mat' => $e,
        ));
    }

    /**
     * Finds and displays a MatchHasJoueur entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:MatchHasJoueur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MatchHasJoueur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SquadFttBundle:MatchHasJoueur:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing MatchHasJoueur entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:MatchHasJoueur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MatchHasJoueur entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SquadFttBundle:MatchHasJoueur:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a MatchHasJoueur entity.
     *
     * @param MatchHasJoueur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(MatchHasJoueur $entity) {
        $form = $this->createForm(new MatchHasJoueurType(), $entity, array(
            'action' => $this->generateUrl('back_matchhasjoueur_update', array('id' => $entity->getIdMatchHasJoueur())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier','attr'=>array('class'=>"btn icon-btn btn-warning")));

        return $form;
    }

    /**
     * Edits an existing MatchHasJoueur entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:MatchHasJoueur')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find MatchHasJoueur entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('back_matchhasjoueur_edit', array('id' => $id)));
        }

        return $this->render('SquadFttBundle:MatchHasJoueur:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a MatchHasJoueur entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SquadFttBundle:MatchHasJoueur')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find MatchHasJoueur entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('back_matchhasjoueur', array('match' => $entity->getMatchMatch())));
    }

    /**
     * Creates a form to delete a MatchHasJoueur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('back_matchhasjoueur_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Supprime','attr'=>array('class'=>"btn icon-btn btn-danger")))
                        ->getForm()
        ;
    }

}
