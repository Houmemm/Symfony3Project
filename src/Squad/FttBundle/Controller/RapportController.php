<?php

namespace Squad\FttBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Squad\FttBundle\Entity\Rapport;
use Squad\FttBundle\Entity\Joueur;
use Squad\FttBundle\Form\RapportType;


/**
 * Rapport controller.
 *
 */
class RapportController extends Controller
{

    /**
     * Lists all Rapport entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Rapport')->findAll();

        return $this->render('SquadFttBundle:Rapport:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Rapport entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Rapport();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $request1 = Request::createFromGlobals();
        $a=$request1->query->get('id');
        

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity1 = $em->getRepository('SquadFttBundle:Joueur')->find($a);
            $entity->setJoueurCinJoueur($entity1);
            $user = $this->container->get('security.context')->getToken()->getUser();
            $entity2 = $em->getRepository('SquadFttBundle:Utilisateur')->find($user);
            $entity->setUserUser($entity2);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('rapport_show', array('id' => $entity->getIdRapport())));
        }

        return $this->render('SquadFttBundle:Rapport:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            
        ));
    }

    /**
     * Creates a form to create a Rapport entity.
     *
     * @param Rapport $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Rapport $entity)
    {
        $form = $this->createForm(new RapportType(), $entity, array(
            'action' => $this->generateUrl('rapport_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter','attr'=>array ('class'=>'btn btn-primary')));

        return $form;
    }

    /**
     * Displays a form to create a new Rapport entity.
     *
     */
    public function newAction()
    {  
        $request = Request::createFromGlobals();
        $a=$request->query->get('id');

        $entity = new Rapport();
        $form   = $this->createCreateForm($entity);
        $em = $this->getDoctrine()->getManager();
        $entity1 = $em->getRepository('SquadFttBundle:Joueur')->find($a);
        return $this->render('SquadFttBundle:Rapport:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'a' =>$a,
            'entity1'=> $entity1,
        ));
    }

    /**
     * Finds and displays a Rapport entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Rapport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapport entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
         
        
        return $this->render('SquadFttBundle:Rapport:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Rapport entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Rapport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapport entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SquadFttBundle:Rapport:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Rapport entity.
    *
    * @param Rapport $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Rapport $entity)
    {
        $form = $this->createForm(new RapportType(), $entity, array(
            'action' => $this->generateUrl('rapport_update', array('id' => $entity->getIdRapport())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier','attr'=>array ('class'=>'btn btn-primary')));

        return $form;
    }
    /**
     * Edits an existing Rapport entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Rapport')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Rapport entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('rapport'));
        }

        return $this->render('SquadFttBundle:Rapport:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Rapport entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SquadFttBundle:Rapport')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Rapport entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rapport'));
    }

    /**
     * Creates a form to delete a Rapport entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rapport_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer','attr'=>array ('class'=>'btn btn-danger')))
            
            ->getForm()
        ;
    }
     /**
     * Lists all Rapport entities.
     *
     */
    public function listJoueurAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SquadFttBundle:Joueur')->findAll();

        return $this->render('SquadFttBundle:Rapport:listJoueur.html.twig', array(
            'entities' => $entities,
        ));
    }
    
    public function rapportPdfAction($id){
        $em = $this->getDoctrine()->getManager();
        $rapport = $em->getRepository('SquadFttBundle:Rapport')->findOneBy(array('idRapport' => $id));
            if(!$rapport){
               return $this->redirect($this->generateUrl('rapport')) ; 
            }
            
        $html = $this->renderView('SquadFttBundle:Rapport:rapportPdf.html.twig', array('rapport' => $rapport));
   
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
        $html2pdf->pdf->SetAuthor('Federation Tunisienne de Tennis');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->pdf->SetTitle('Rapport');
        $html2pdf->pdf->SetSubject('Resultat de test de dopage');
        $html2pdf->pdf->SetKeywords('rapport,ftt');
        $html2pdf->writeHTML($html);
        $content = $html2pdf->Output('', true);
        $response = new Response();
        $response->setContent($content);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-disposition', 'filename=new.pdf');
 
        return $response;
    }
}
