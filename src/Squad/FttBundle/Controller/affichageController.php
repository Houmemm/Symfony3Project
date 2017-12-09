<?php


namespace Squad\FttBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Squad\FttBundle\Entity\Formation;





class affichageController extends Controller
{

    /**
     * Lists all Formation entities.
     *
     */


public function showAction($idFormation)
    {
$em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Formation')->find($idFormation);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Formation entity.');
        }

        

        return $this->render('SquadFttBundle:affichage:afficherFormation.html.twig', array(
            'entity'      => $entity,
            
        ));
    }
    public function showConcoursAction($idConcour)
    {
      $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Concours')->find($idConcour);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find concours entity.');
        }

        

        return $this->render('SquadFttBundle:affichage:afficherConcour.html.twig', array(
            'entity'      => $entity,
            
        ));
    }
}
    