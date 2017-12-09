<?php

namespace Squad\FttBundle\Controller;

use DateInterval;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Squad\FttBundle\Entity\Evenement;
use Squad\FttBundle\Entity\MatchHasJoueur;
use Squad\FttBundle\Entity\Matchtennis;
use Squad\FttBundle\Entity\Tour;
use Squad\FttBundle\Entity\UtilisateurRepository;
use Squad\FttBundle\Entity\MatchtennisRepository;
use Squad\FttBundle\Form\EvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Null;

/**
 * Evenement controller.
 *  
 * @Route("/evenement")
 */
class EvenementController extends Controller {

    /**
     * Lists all Evenement entities.
     *
     * @Route("/", name="evenement")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Evenement')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /*
     * Creates a new Evenement entity.
     *
     * @Route("/", name="evenement_create")
     * @Method("POST")
     * @Template("SquadFttBundle:Evenement:new.html.twig")
     */

    public function createAction(Request $request) {
        $entity = new Evenement();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {


            $em = $this->getDoctrine()->getManager();
            //$entity->upload();
            $em->persist($entity);
            $em->flush();
            $stade = $this->getRequest()->get('stade');

            $joueurs = $this->getRequest()->get('joueurs');

            $arbitre = $this->getRequest()->get('arbitre');

            $generation = $this->getRequest()->get('auto');

            $n = 2;
            for ($i = 1; $i <= log($entity->getNbreJoueur(), 2); $i++) {
                //creation des tours
                $tour = new Tour($entity->getNbreJoueur() / $n, $i * 2, $entity);
                $em = $this->getDoctrine()->getManager();
                $em->persist($tour);
                $em->flush();
                $dateM = $entity->getDateDebut();

                for ($j = 1; $j <= ($entity->getNbreJoueur() / $n); $j++) {
                    //   Creation des matchs Vides   
                    $ar = $em->getRepository('SquadFttBundle:Utilisateur')->findBy(array('id' => $arbitre[$j - 1]));


                    $st = $em->getRepository('SquadFttBundle:Stade')->findBy(array('idStade' => $stade[$j - 1]));

                    $match = new Matchtennis();
                    $match->setDateMatch($dateM);
                    $match->setTourTour($tour);
                    $match->setUserUser($ar[0]);
                    $match->setValeurEnPoint($tour->getIdTour());
                    $match->setStadeStade($st[0]);
                    $em->persist($match);
                    $em->flush();
                    //IF CASE COCHER FONCTIONNE SINON NE FONCTIONNE PAS 
                    if ($generation != Null) {
                        if ($i == 1) {
                            // Affectation des Tour1 en fonction des joueurs selectionner
                            $joueur1 = $em->getRepository('SquadFttBundle:Joueur')->findBy(array('cinJoueur' => $joueurs[$j - 1]));
                            $matchHasJoueur = new MatchHasJoueur();
                            $matchHasJoueur->setJoueurCin($joueur1[0]);
                            $matchHasJoueur->setMatchMatch($match);
                            $em->persist($matchHasJoueur);
                            $em->flush();
                            $joueur2 = $em->getRepository('SquadFttBundle:Joueur')->findBy(array('cinJoueur' => $joueurs[$entity->getNbreJoueur() - $j]), null, 1, 0);
                            $matchHasJoueur2 = new MatchHasJoueur();
                            $matchHasJoueur2->setJoueurCin($joueur2[0]);
                            $matchHasJoueur2->setMatchMatch($match);
                            $em->persist($matchHasJoueur2);
                            $em->flush();
                        }
                    }
                }
                //avancement date du match P1D une période == un    jour
                $dateM = $dateM->add(new DateInterval('P1D'));
                $n = $n * 2;
            }
            return $this->redirect($this->generateUrl('evenement_show', array('id' => $entity->getId())));
        }

        return $this->render('SquadFttBundle:Evenement:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /*
     * Creates a form to create a Evenement entity.
     *
     * @param Evenement $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */

    private function createCreateForm(Evenement $entity) {
        $form = $this->createForm(new EvenementType(), $entity, array(
            'action' => $this->generateUrl('evenement_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Evenement entity.
     *
     * @Route("/new", name="evenement_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {

        $em = $this->getDoctrine()->getManager();
        $entity = new Evenement();


        $form = $this->createCreateForm($entity);
        $entities2 = $em->getRepository('SquadFttBundle:Stade')->findAll();
        $entities3 = $em->getRepository('SquadFttBundle:Joueur')->findAll();

        $entities4 = $this->getDoctrine()->getRepository('SquadFttBundle:Utilisateur')->getByRole("ARBITRE");
        return array(
            'entity' => $entity,
            'form' => $form->createView(), 'entities2' => $entities2, 'entities3' => $entities3, 'entities4' => $entities4
        );
    }

    /**
     * Finds and displays a Evenement entity.
     *
     * @Route("/{id}", name="evenement_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('SquadFttBundle:Evenement')->find($id);
        $tour = $em->getRepository('SquadFttBundle:Tour')->findBy(array('evenementEvenement' => $id));
        $match = $em->getRepository('SquadFttBundle:Matchtennis')->getMatchsByEvenement($id);
        $matchHasJoueur = array();
        $i = 0;
        $b = 0;
        foreach ($match as $m)
            {
            $matchHasJoueur2=$em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('matchMatch'=>$m->getIdMatch()));     
            foreach($matchHasJoueur2 as $m2 ) 
                {
                array_push( $matchHasJoueur ,$m2);
                }
            }
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity ');
        }
        // $entity->upload();
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity' => $entity,
            'match' => $match,
            'tour' => $tour,
            'matchHasJoueur' => $matchHasJoueur,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Evenement entity.
     *
     * @Route("/{id}/edit", name="evenement_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
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
     * Creates a form to edit a Evenement entity.
     *
     * @param Evenement $entity The entity
     *
     * @return Form The form
     */
    private function createEditForm(Evenement $entity) {
        $form = $this->createForm(new EvenementType(), $entity, array(
            'action' => $this->generateUrl('evenement_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }

    /**
     * Edits an existing Evenement entity.
     *
     * @Route("/{id}", name="evenement_update")
     * @Method("PUT")
     * @Template("SquadFttBundle:Evenement:edit.html.twig")
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('evenement_edit', array('id' => $id)));
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Evenement entity.
     *
     * @Route("/{id}", name="evenement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SquadFttBundle:Evenement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Evenement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('evenement'));
    }

    /**
     * Creates a form to delete a Evenement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('evenement_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Supprimer'))
                        ->getForm()
        ;
    }

}
