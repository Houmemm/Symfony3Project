<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Squad\FttBundle\Entity\Formation;
use Squad\FttBundle\Form\FormationType;

/**
 * Formation controller.
 *
 */
class FormationController extends Controller {

    /**
     * Lists all Formation entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Formation')->findAll();

        return $this->render('SquadFttBundle:Formation:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Formation entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Formation();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('formation_show', array('idFormation' => $entity->getIdFormation())));


        return $this->render('SquadFttBundle:Formation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Formation entity.
     *
     * @param Formation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Formation $entity) {
        $form = $this->createForm(new FormationType(), $entity, array(
            'action' => $this->generateUrl('formation_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Formation entity.
     *
     */
    public function newAction() {
        $entity = new Formation();
        $form = $this->createCreateForm($entity);

        return $this->render('SquadFttBundle:Formation:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Formation entity.
     *
     */
    public function showAction($idFormation) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Formation')->find($idFormation);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

        $deleteForm = $this->createDeleteForm($idFormation);

        return $this->render('SquadFttBundle:Formation:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Formation entity.
     *
     */
    public function editAction($idFormation) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Formation')->find($idFormation);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($idFormation);

        return $this->render('SquadFttBundle:Formation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Formation entity.
     *
     * @param Formation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Formation $entity) {
        $form = $this->createForm(new FormationType(), $entity, array(
            'action' => $this->generateUrl('formation_update', array('idFormation' => $entity->getIdFormation())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Formation entity.
     *
     */
    public function updateAction(Request $request, $idFormation) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Formation')->find($idFormation);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

        $deleteForm = $this->createDeleteForm($idFormation);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $em->flush();

        return $this->redirect($this->generateUrl('formation_edit', array('idFormation' => $idFormation)));


        return $this->render('SquadFttBundle:Formation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Formation entity.
     *
     */
    public function deleteAction(Request $request, $idFormation) {
        $form = $this->createDeleteForm($idFormation);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('SquadFttBundle:Formation')->find($idFormation);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

        $em->remove($entity);
        $em->flush();


        return $this->redirect($this->generateUrl('formation'));
    }

    /**
     * Creates a form to delete a Formation entity by idFormation.
     *
     * @param mixed $idFormation The entity idFormation
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($idFormation) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('formation_delete', array('idFormation' => $idFormation)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
