<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Squad\FttBundle\Entity\Sanction;
use Squad\FttBundle\Form\SanctionType;

/**
 * Sanction controller.
 *
 */
class SanctionController extends Controller {

    /**
     * Lists all Sanction entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Sanction')->findAll();

        return $this->render('SquadFttBundle:Sanction:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Sanction entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Sanction();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $request1 = Request::createFromGlobals();
        $b = $request1->query->get('id');

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity1 = $em->getRepository('SquadFttBundle:Joueur')->find($b);
            $entity->setJoueurCinJoueur($entity1);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('sanction_show', array('id' => $entity->getIdSanction())));
        }

        return $this->render('SquadFttBundle:Sanction:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Sanction entity.
     *
     * @param Sanction $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Sanction $entity) {
        $form = $this->createForm(new SanctionType(), $entity, array(
            'action' => $this->generateUrl('sanction_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'sanction', 'attr' => array('class' => 'btn btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new Sanction entity.
     *
     */
    public function newAction() {
        $entity = new Sanction();
        $form = $this->createCreateForm($entity);
        $request = Request::createFromGlobals();
        $b = $request->query->get('id');
        $em = $this->getDoctrine()->getManager();
        $entity1 = $em->getRepository('SquadFttBundle:Joueur')->find($b);
        return $this->render('SquadFttBundle:Sanction:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'b' => $b,
                    'entity1' => $entity1,
        ));
    }

    /**
     * Finds and displays a Sanction entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Sanction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sanction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SquadFttBundle:Sanction:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Sanction entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Sanction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sanction entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SquadFttBundle:Sanction:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Sanction entity.
     *
     * @param Sanction $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Sanction $entity) {
        $form = $this->createForm(new SanctionType(), $entity, array(
            'action' => $this->generateUrl('sanction_update', array('id' => $entity->getIdSanction())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier', 'attr' => array('class' => 'btn btn-primary')));

        return $form;
    }

    /**
     * Edits an existing Sanction entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Sanction')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sanction entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('sanction'));
        }

        return $this->render('SquadFttBundle:Sanction:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Sanction entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SquadFttBundle:Sanction')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sanction entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('sanction'));
    }

    /**
     * Creates a form to delete a Sanction entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('sanction_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Supprimer', 'attr' => array('class' => 'btn btn-danger')))
                        ->getForm()
        ;
    }

    public function listJoueurAction() {
        $em = $this->getDoctrine()->getManager();

        $sanctionner = $this->getDoctrine()->getRepository('SquadFttBundle:Joueur')->getJoueur();
        $joueurs = $em->getRepository('SquadFttBundle:Joueur')->findAll();
        $entities = array();
        foreach ($joueurs as $e) {
            $verif = 0;
            foreach ($sanctionner as $s) {
                if ($e->getCinJoueur() == $s->getCinJoueur()) {
                    $verif = 1;
                }
            }
            if ($verif == 0) {
                array_push($entities, $e);
            }
        }
        return $this->render('SquadFttBundle:Sanction:listJoueur.html.twig', array(
                    'entities' => $entities,
        ));
    }

}
