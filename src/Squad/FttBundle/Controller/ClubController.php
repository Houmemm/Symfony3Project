<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Squad\FttBundle\Entity\Club;
use Squad\FttBundle\Form\ClubType;
use Symfony\Component\Validator\Constraints;

/**
 * Club controller.
 *
 * @Route("/club")
 */
class ClubController extends Controller {

    /**
     * Lists all Club entities.
     *
     * @Route("/", name="club")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Club')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Club entity.
     *
     * @Route("/", name="club_create")
     * @Method("POST")
     * @Template("SquadFttBundle:Club:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Club();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $entity->upload();
        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('club_show', array('idClub' => $entity->getIdClub())));


        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Club entity.
     *
     * @param Club $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Club $entity) {
        $form = $this->createForm(new ClubType(), $entity, array(
            'action' => $this->generateUrl('club_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Ajouter',
            'attr' => array(
                'class' => 'btn btn-success'
            )
                )
        );

        return $form;
    }

    /**
     * Displays a form to create a new Club entity.
     *
     * @Route("/new", name="club_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {
        $entity = new Club();
        $form = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Club entity.
     *
     * @Route("/{idClub}", name="club_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($idClub) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Club')->find($idClub);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Club entity.');
        }

        $deleteForm = $this->createDeleteForm($idClub);

        return array(
            'entity' => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Club entity.
     *
     * @Route("/{idClub}/edit", name="club_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($idClub) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Club')->find($idClub);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Club entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($idClub);

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Club entity.
     *
     * @param Club $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Club $entity) {
        $form = $this->createForm(new ClubType(), $entity, array(
            'action' => $this->generateUrl('club_update', array('idClub' => $entity->getIdClub())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array(
            'label' => 'Modifier',
            'attr' => array(
                'class' => 'label label-warning'
            )
                )
        );

        return $form;
    }

    /**
     * Edits an existing Club entity.
     *
     * @Route("/{idClub}", name="club_update")
     * @Method("PUT")
     * @Template("SquadFttBundle:Club:edit.html.twig")
     */
    public function updateAction(Request $request, $idClub) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Club')->find($idClub);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Club entity.');
        }

        $deleteForm = $this->createDeleteForm($idClub);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $entity->upload();
        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('club_edit', array('idClub' => $idClub)));


        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Club entity.
     *
     * @Route("/{idClub}", name="club_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $idClub) {
        $form = $this->createDeleteForm($idClub);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('SquadFttBundle:Club')->find($idClub);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Club entity.');
        }

        $em->remove($entity);
        $em->flush();


        return $this->redirect($this->generateUrl('club'));
    }

    /**
     * Creates a form to delete a Club entity by id.
     *
     * @param mixed $idClub The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($idClub) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('club_delete', array('idClub' => $idClub)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array(
                            'label' => 'Supprimer',
                            'attr' => array(
                                'class' => 'label label-danger'
                            )
                                )
                        )
                        ->getForm();
    }

}
