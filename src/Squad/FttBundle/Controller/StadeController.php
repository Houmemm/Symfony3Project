<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Squad\FttBundle\Entity\Stade;
use Squad\FttBundle\Form\StadeType;

/**
 * Stade controller.
 *
 */
class StadeController extends Controller
{

    /**
     * Lists all Stade entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Stade')->findAll();

        return $this->render('SquadFttBundle:Stade:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Stade entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Stade();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stade_show', array('id' => $entity->getIdStade())));
        }

        return $this->render('SquadFttBundle:Stade:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Stade entity.
     *
     * @param Stade $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Stade $entity)
    {
        $form = $this->createForm(new StadeType(), $entity
        );

        $form->add('submit', 'submit', array('label' => 'Ajouter','attr'=>array ('class'=>'btn btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new Stade entity.
     *
     */
    public function newAction()
    {
        $entity = new Stade();
        $form   = $this->createCreateForm($entity);

        return $this->render('SquadFttBundle:Stade:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Stade entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Stade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stade entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SquadFttBundle:Stade:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Stade entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Stade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stade entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SquadFttBundle:Stade:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Stade entity.
    *
    * @param Stade $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Stade $entity)
    {
        $form = $this->createForm(new StadeType(), $entity, array(
            'action' => $this->generateUrl('stade_update', array('id' => $entity->getIdStade())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier',
                                              'attr'=>array ('class'=>'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Stade entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Stade')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stade entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('stade'));
        }

        return $this->render('SquadFttBundle:Stade:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Stade entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SquadFttBundle:Stade')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Stade entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('stade'));
    }

    /**
     * Creates a form to delete a Stade entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('stade_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer',
                    'attr'=>array ('class'=>'btn btn-danger')))
            ->getForm()
        ;
    }
}
