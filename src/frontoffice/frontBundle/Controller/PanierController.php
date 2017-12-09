<?php

namespace frontoffice\frontBundle\Controller;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Squad\FttBundle\Entity\Soldes;
use Squad\FttBundle\Form\ArticlesType;
use frontoffice\frontBundle\Controller\ArticlesController;

/**
 * Articles controller.
 *
 */
class PanierController extends Controller {

    public function ajouterAction($id) {


        $session = $this->getRequest()->getSession();
        if (!$session->has('panier'))
            $session->set('panier', array());
        $panier = $session->get('panier');

        if (!array_key_exists($id, $panier))
            $panier[$id] = 1;


        $session->set('panier', $panier);

        return $this->redirect($this->generateUrl('frontofficefront_panier'));
    }

    public function supprimerAction($id) {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier)) {
            unset($panier[$id]);
            $session->set('panier', $panier);
            $this->get('session')->getFlashBag()->add('success', 'Article supprimé avec succès !');
        }
        return $this->redirect($this->generateUrl('frontofficefront_panier'));
    }

    public function indexAction() {
        $session = $this->getRequest()->getSession();
        if (!$session->has('panier'))
            $session->set('panier', array());

        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.context')->getToken()->getUser();
        $user = $em->getRepository('SquadFttBundle:Utilisateur')->find($user);
        $article = $em->getRepository('SquadFttBundle:Articles')->findArray(array_keys($session->get('panier')));
//        $solde = $em->getRepository('SquadFttBundle:Soldes')->findBy(array('userUser' => $user));
        $solde = $em->getRepository('SquadFttBundle:Soldes')->findOneBy(array('userUser' => $user));
        if ($solde == null) {
            $solde = new Soldes();
            $solde->setValeur(0);
        }


        return $this->render('frontofficefrontBundle:Panier:show.html.twig', array('article' => $article,
                    'panier' => $session->get('panier'),
                    'user' => $user,
                    'solde' => $solde
        ));
    }

    public function acheterAction(Request $request) {

        $session = $this->getRequest()->getSession();
        if (!$session->has('panier'))
            $session->set('panier', array());
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('SquadFttBundle:Articles')->findArray(array_keys($session->get('panier')));
        $user = $this->container->get('security.context')->getToken()->getUser();
        $user = $em->getRepository('SquadFttBundle:Utilisateur')->find($user);
        $solde = $em->getRepository('SquadFttBundle:Soldes')->findOneBy(array('userUser' => $user));

        $total = 0;
        $s = 0;
        foreach ($article as $article) {
            $article->setEtatArticle("Non Disponnible");
            $article->setUserUser($user);
            $total = ($article->getPrix() + $total);
            $em->flush($article);
        }
        $s = $solde->getValeur();
        $s = $s - $total;
        $solde->setValeur($s);
        $em->flush($solde);

        $session->remove('panier');
        return $this->redirect($this->generateUrl('frontofficefront_articles'));
    }

    public function achatFailAction() {
        $session = $this->getRequest()->getSession();
        $panier = $session->get('panier');

        $session->set('panier', $panier);
        $this->get('session')->getFlashBag()->add('warning', 'Solde insufisant !');

        return $this->redirect($this->generateUrl('frontofficefront_panier'));
    }

}
