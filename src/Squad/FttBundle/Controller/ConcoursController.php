<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Squad\FttBundle\Entity\Concours;
use Squad\FttBundle\Form\ConcoursType;

/**
 * Concours controller.
 *
 * @Route("/concours")
 */
class ConcoursController extends Controller
{

    /**
     * Lists all Concours entities.
     *
     * @Route("/", name="concours")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $request=$this->getRequest();

        $listeConcours = $em->getRepository('SquadFttBundle:Concours')->findAll();
        
        $entities  = $this->get('knp_paginator')->paginate(
        $listeConcours,
        $request->query->get('page', 1)/*page number*/,
        2/*limit per page*/
    );

        return array(
            'entities' => $entities,
          
        );
    }
    /**
     * Creates a new Concours entity.
     *
     * @Route("/", name="concour_create")
     * @Method("POST")
     * @Template("SquadFttBundle:Concours:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Concours();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('concour_show', array('idConcour' => $entity->getIdConcour())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Concours entity.
     *
     * @param Concours $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Concours $entity)
    {
        $form = $this->createForm(new ConcoursType(), $entity, array(
            'action' => $this->generateUrl('concour_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create', 'attr' => array('class' => 'btn btn-success')));

        return $form;
    }

    /**
     * Displays a form to create a new Concours entity.
     *
     * @Route("/new", name="concour_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Concours();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Concours entity.
     *
     * @Route("/{idConcour}", name="concour_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($idConcour)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Concours')->find($idConcour);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Concours entity.');
        }

        $deleteForm = $this->createDeleteForm($idConcour);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Concours entity.
     *
     * @Route("/{idConcour}/edit", name="concour_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($idConcour)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Concours')->find($idConcour);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Concours entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($idConcour);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Concours entity.
    *
    * @param Concours $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Concours $entity)
    {
        $form = $this->createForm(new ConcoursType(), $entity, array(
            'action' => $this->generateUrl('concour_update', array('idConcour' => $entity->getIdConcour())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Concours entity.
     *
     * @Route("/{idConcour}", name="concour_update")
     * @Method("PUT")
     * @Template("SquadFttBundle:Concours:edit.html.twig")
     */
    public function updateAction(Request $request, $idConcour)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Concours')->find($idConcour);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Concours entity.');
        }

        $deleteForm = $this->createDeleteForm($idConcour);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('concour_edit', array('idConcour' => $idConcour)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Concours entity.
     *
     * @Route("/{idConcour}", name="concour_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $idConcour)
    {
        $form = $this->createDeleteForm($idConcour);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SquadFttBundle:Concours')->find($idConcour);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Concours entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('concour'));
    }

    /**
     * 
     * 
     * 
     * Creates a form to delete a Concours entity by idConcour.
     *
     * @param mixed $idConcour The entity idConcour
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($idConcour)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('concour_delete', array('idConcour' => $idConcour)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
