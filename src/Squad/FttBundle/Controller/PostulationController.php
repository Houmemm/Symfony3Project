<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Squad\FttBundle\Entity\Postulation;
use Squad\FttBundle\Form\PostulationType;

/**
 * Postulation controller.
 *
 */
class PostulationController extends Controller {

    /**
     * Lists all Postulation entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Postulation')->findAll();

        return $this->render('SquadFttBundle:Postulation:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Postulation entity.
     *
     */
    public function createAction(Request $request, $idFormation) {
        $entity = new Postulation();

        $form = $this->createCreateForm($entity, $idFormation);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $entity->upload();
        $formation = $em->getRepository('SquadFttBundle:Formation')->find($idFormation);
        $entity->setFormationFormation($formation);
        $current = $this->container->get('security.context')->getToken()->getUser();
        $user = $em->getRepository('SquadFttBundle:Utilisateur')->find($current);
        $entity->setUserUser($user);

        $em->persist($entity);
        $em->flush();


        return $this->render('SquadFttBundle:Postulation:new.html.twig', array(
                    'entity' => $entity,
                    'idFormation' => $idFormation,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a new Postulation entity.
     *
     */
    public function createConcoursAction(Request $request, $idConcour) {
        $entity = new Postulation();
        $form = $this->createCreateFormConcours($entity, $idConcour);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $concours = $em->getRepository('SquadFttBundle:Concours')->find($idConcour);
        $entity->setConcoursConcour($concours);
        $current = $this->container->get('security.context')->getToken()->getUser();
        $user = $em->getRepository('SquadFttBundle:Utilisateur')->find($current);
        $entity->setUserUser($user);

        $entity->upload();
        $em->persist($entity);
        $em->flush();


        return $this->render('SquadFttBundle:Postulation:new2.html.twig', array(
                    'entity' => $entity,
                    'idConcour' => $idConcour,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Postulation entity.
     *
     * @param Postulation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateFormConcours(Postulation $entity, $idConcour) {
        $form = $this->createForm(new PostulationType(), $entity, array(
            'action' => $this->generateUrl('postulation_createConcours', array('idConcour' => $idConcour)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Creates a form to create a Postulation entity.
     *
     * @param Postulation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Postulation $entity, $idFormation) {
        $form = $this->createForm(new PostulationType(), $entity, array(
            'action' => $this->generateUrl('postulation_create', array('idFormation' => $idFormation)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Postulation entity.
     *
     */
    public function newAction($idFormation) {
        $entity = new Postulation();
        $form = $this->createCreateForm($entity, $idFormation);

        return $this->render('SquadFttBundle:Postulation:new.html.twig', array(
                    'entity' => $entity,
                    'idFormation' => $idFormation,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Postulation entity.
     *
     */
    public function newConcoursAction($idConcour) {
        $entity = new Postulation();
        $form = $this->createCreateForm($entity, $idConcour);

        return $this->render('SquadFttBundle:Postulation:new2.html.twig', array(
                    'entity' => $entity,
                    'idConcour' => $idConcour,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Postulation entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Postulation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Postulation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SquadFttBundle:Postulation:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Postulation entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Postulation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Postulation entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SquadFttBundle:Postulation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Postulation entity.
     *
     * @param Postulation $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Postulation $entity) {
        $form = $this->createForm(new PostulationType(), $entity, array(
            'action' => $this->generateUrl('postulation_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Postulation entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Postulation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Postulation entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('postulation_edit', array('id' => $id)));
        }

        return $this->render('SquadFttBundle:Postulation:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Postulation entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SquadFttBundle:Postulation')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Postulation entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('postulation'));
    }

    /**
     * Creates a form to delete a Postulation entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('postulation_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
