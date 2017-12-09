<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Squad\FttBundle\Entity\Joueur;
use Squad\FttBundle\Form\JoueurType;

/**
 * Joueur controller.
 *
 */
class JoueurController extends Controller {

    /**
     * Lists all Joueur entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Joueur')->findAll();

        return $this->render('SquadFttBundle:Joueur:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Joueur entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Joueur();

        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->upload();
            $club = $em->getRepository('SquadFttBundle:Club')->findOneBy(array('idClub' => $this->getRequest()->get('clubs')));
            $entity->setClubClub($club);

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('joueur_show', array('cin' => $entity->getCinJoueur())));
        }
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository('SquadFttBundle:Club')->findAll();

        return $this->render('SquadFttBundle:Joueur:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'club' => $club,
        ));
    }

    /**
     * Creates a form to create a Joueur entity.
     *
     * @param Joueur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Joueur $entity) {
        $form = $this->createForm(new JoueurType(), $entity, array(
            'action' => $this->generateUrl('joueur_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Joueur entity.
     *
     */
    public function newAction() {
        $entity = new Joueur();
        $form = $this->createCreateForm($entity);

        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository('SquadFttBundle:Club')->findAll();

        return $this->render('SquadFttBundle:Joueur:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'club' => $club,
        ));
    }

    /**
     * Finds and displays a Joueur entity.
     *
     */
    public function showAction($cin) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Joueur')->find($cin);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Joueur entity.');
        }

        $deleteForm = $this->createDeleteForm($cin);

        return $this->render('SquadFttBundle:Joueur:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Joueur entity.
     *
     */
    public function editAction($cin) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Joueur')->find($cin);
        $club = $em->getRepository('SquadFttBundle:Club')->findOneBy(array('idClub' => $this->getRequest()->get('clubs')));
        $entity->setClubClub($club);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Joueur entity.');
        }
        
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($cin);
        $club = $em->getRepository('SquadFttBundle:Club')->findAll();
        return $this->render('SquadFttBundle:Joueur:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'club' => $club,
        ));
    }

    /**
     * Creates a form to edit a Joueur entity.
     *
     * @param Joueur $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Joueur $entity) {
        $form = $this->createForm(new JoueurType(), $entity, array(
            'action' => $this->generateUrl('joueur_update', array('cin' => $entity->getCinJoueur())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Joueur entity.
     *
     */
    public function updateAction(Request $request, $cin) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Joueur')->find($cin);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Joueur entity.');
        }

        $deleteForm = $this->createDeleteForm($cin);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $joueur = $editForm->getData();
            $joueur->upload();
            $club = $em->getRepository('SquadFttBundle:Club')->findOneBy(array('idClub' => $this->getRequest()->get('clubs')));
            $entity->setClubClub($club);
            $em->merge($joueur);
            $em->flush();

            return $this->redirect($this->generateUrl('joueur_edit', array('cin' => $cin)));
        }
        $em = $this->getDoctrine()->getManager();
        $club = $em->getRepository('SquadFttBundle:Club')->findAll();
        return $this->render('SquadFttBundle:Joueur:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'club' => $club,
        ));
    }

    /**
     * Deletes a Joueur entity.
     *
     */
    public function deleteAction(Request $request, $cin) {

        
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('SquadFttBundle:Joueur')->find($cin);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Joueur entity.');
        }

        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('joueur'));
    }

    /**
     * Creates a form to delete a Joueur entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($cin) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('joueur_delete', array('cin' => $cin)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Supprimer', 'attr' => array('class' => 'btn btn-danger btn-sm')))
                        ->getForm()
        ;
    }

}
