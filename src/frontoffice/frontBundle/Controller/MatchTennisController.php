<?php

namespace frontoffice\frontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Squad\FttBundle\Form\PariType;
use Squad\FttBundle\Entity\Pari;
use Squad\FttBundle\Entity\Soldes;

class MatchTennisController extends Controller {

    public function matchtennisAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->getRequest();
        $listMatch = $em->getRepository('SquadFttBundle:Matchtennis')->findBy(array(), array('dateMatch' => 'DESC'));
        $finalMatch = array();
        foreach ($listMatch as $e) {

            $mhj = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('matchMatch' => $e));
            $joueurs = array();
            foreach ($mhj as $m) {
                if ($m && $m->getJoueurCin()) {
                    $j = $em->getRepository('SquadFttBundle:Joueur')->findOneBy(array('cinJoueur' => $m->getJoueurCin()));
                    array_push($joueurs, $j);
                }
            }
            array_push($finalMatch, $e);
            $e->setJoueurs($joueurs);

            $sets = $em->getRepository('SquadFttBundle:Sets')->findBy(array('matchMatch' => $e));

            $e->setSets($sets);
        }



        $entities = $this->get('knp_paginator')->paginate(
                $finalMatch, $request->query->get('page', 1)/* page number */, 5/* limit per page */
        );


        return $this->render('frontofficefrontBundle:MatchTennis:Matchtennis.html.twig', array('entities' => $entities));
    }

    public function matchtennisShowAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Matchtennis')->find($id);

        $mhj = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('matchMatch' => $entity->getIdMatch()));
        $joueurs = array();
        foreach ($mhj as $m) {
            if ($m && $m->getJoueurCin()) {
                $j = $em->getRepository('SquadFttBundle:Joueur')->findOneBy(array('cinJoueur' => $m->getJoueurCin()));
                array_push($joueurs, $j);
            }
        }
        $entity->setJoueurs($joueurs);

        $sets = $em->getRepository('SquadFttBundle:Sets')->findBy(array('matchMatch' => $entity->getIdMatch()));

        $entity->setSets($sets);

        $pari = $em->getRepository('SquadFttBundle:Pari')->findBy(array('matchMatch' => $entity), array('montant' => 'DESC'));
        /////Render Final
        return $this->render('frontofficefrontBundle:MatchTennis:MatchtennisShow.html.twig', array('entity' => $entity,
                    'pj1' => $this->getPourcentageJoueur($joueurs[0]),
                    'pj2' => $this->getPourcentageJoueur($joueurs[1]),
                    'pvs' => $this->getPourcentageJoueur($joueurs[0], $joueurs[1]),
                    'q1' => $this->khaoula($joueurs[0], $joueurs[1]),
                    'q2' => $this->khaoula($joueurs[1], $joueurs[0]),
                    'pari' => $pari
        ));
    }

    public function getPourcentageJoueur($joueur) {
        $victory = 0;
        $total = 0;
        $em = $this->getDoctrine()->getManager();
        $mhj = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('joueurCin' => $joueur));
        $match = array();
        foreach ($mhj as $entitymhj) {
            $matchntity = $em->getRepository('SquadFttBundle:Matchtennis')->findBy(array('idMatch' => $entitymhj->getMatchMatch()));
            array_push($match, $matchntity);
        }
        foreach ($match as $matchentity) {
            $mhj2 = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('matchMatch' => $matchentity));
            $sets = $em->getRepository('SquadFttBundle:Sets')->findBy(array('matchMatch' => $matchentity));
            foreach ($sets as $s) {
                $total = $total + 1;
                if ($mhj2[0]->getJoueurCin() == $joueur) {
                    if ($s->getScoreJ1() > $s->getScoreJ2()) {
                        $victory = $victory + 1;
                    }
                }
                if ($mhj2[1]->getJoueurCin() == $joueur) {
                    if ($s->getScoreJ1() < $s->getScoreJ2()) {
                        $victory = $victory + 1;
                    }
                }
            }
        }
        if ($total == 0) {
            return 0;
        } else {
            return ($victory / $total) * 100;
        }
    }

    public function getPourcentageVs($joueur1, $joueur2) {
        $victory = 0;
        $total = 0;
        $em = $this->getDoctrine()->getManager();
        $mhj = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('joueurCin' => $joueur1));
        $match = array();
        foreach ($mhj as $entitymhj) {
            $matchntity = $em->getRepository('SquadFttBundle:Matchtennis')->findBy(array('idMatch' => $entitymhj->getMatchMatch()));

            array_push($match, $matchntity);
        }
        foreach ($match as $matchentity) {
            $mhj2 = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('matchMatch' => $matchentity));
            $sets = $em->getRepository('SquadFttBundle:Sets')->findBy(array('matchMatch' => $matchentity));
            foreach ($sets as $s) {
                $total = $total + 1;
                if ($mhj2[0]->getJoueurCin() == $joueur1 && $mhj2[1]->getJoueurCin() == $joueur2) {
                    if ($s->getScoreJ1() > $s->getScoreJ2()) {
                        $victory = $victory + 1;
                    }
                }
                if ($mhj2[1]->getJoueurCin() == $joueur1 && $mhj2[0]->getJoueurCin() == $joueur2) {
                    if ($s->getScoreJ1() < $s->getScoreJ2()) {
                        $victory = $victory + 1;
                    }
                }
            }
        }
        if ($total == 0) {
            return 0;
        } else {
            return ($victory / $total) * 100;
        }
    }

    public function khaoula($joueur1, $joueur2) {
        $q1 = $this->getPourcentageJoueur($joueur1);
        $q2 = $this->getPourcentageJoueur($joueur2);
        if ($q1 == 0 && $q2 == 0) {
            return 2;
        } else {
            $alter = ($q2) / ($q1 + $q2);
            $q1 = ($alter * $this->getPourcentageVs($joueur2, $joueur1)) / 100;
            $q1++;
            return $q1 * 2;
        }
    }

    public function MontantAction($id, $joueur) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SquadFttBundle:Matchtennis')->find($id);
        $selected = $em->getRepository('SquadFttBundle:Joueur')->findOneBy(array('cinJoueur' => $joueur));
        $mhj = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('matchMatch' => $entity->getIdMatch()));
        $joueurs = array();
        foreach ($mhj as $m) {
            if ($m && $m->getJoueurCin()) {
                $j = $em->getRepository('SquadFttBundle:Joueur')->findOneBy(array('cinJoueur' => $m->getJoueurCin()));
                array_push($joueurs, $j);
            }
        }
        $entity->setJoueurs($joueurs);

        $sets = $em->getRepository('SquadFttBundle:Sets')->findBy(array('matchMatch' => $entity->getIdMatch()));

        $entity->setSets($sets);


        return $this->render('frontofficefrontBundle:MatchTennis:Montant.html.twig', array('entity' => $entity,
                    'joueur' => $selected,
        ));
    }

    public function ParierAction($id, $joueur) {
        $montant = $_GET['montant'];
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $utilisateur = $em->getRepository('SquadFttBundle:Utilisateur')->find($user);
        
        $soldrepo = $em->getRepository('SquadFttBundle:Soldes')->findBy(array('userUser' => $user));
        $sold = 0;
        foreach ($soldrepo as $s) {
            if ($s->getTypeTransaction() == "Entrante") {
                $sold = $sold + $s->getValeur();
            }
        }
        
        if ($montant <= $sold) {

            $jm = $em->getRepository('SquadFttBundle:Joueur')->find($joueur);

            $match = $em->getRepository('SquadFttBundle:Matchtennis')->find($id);
            $mhj = $em->getRepository('SquadFttBundle:MatchHasJoueur')->findBy(array('matchMatch' => $match->getIdMatch()));
            $joueurs = array();
            foreach ($mhj as $m) {
                if ($m && $m->getJoueurCin()) {
                    $j = $em->getRepository('SquadFttBundle:Joueur')->findOneBy(array('cinJoueur' => $m->getJoueurCin()));
                    array_push($joueurs, $j);
                }
            }
            $match->setJoueurs($joueurs);

            if ($joueurs[0] == $jm) {
                $q1 = $this->khaoula($joueurs[0], $joueurs[1]);
                $q2 = 0;
            }
            if ($joueurs[1] == $jm) {
                $q1 = 0;
                $q2 = $this->khaoula($joueurs[1], $joueurs[0]);
            }

            $pari = new Pari();
            $pari->setMatchMatch($match);
            $pari->setMontant($montant);
            $pari->setQ1($q1);
            $pari->setQ2($q2);
            $pari->setUserUser($utilisateur);

            $em->persist($pari);

            $soldes = new Soldes();
            $soldes->setDateAjout(new \DateTime());
            $soldes->setPreuve("Pari sur match");
            $soldes->setUserUser($utilisateur);
            $soldes->setValeur($montant);
            $soldes->setTypeTransaction('Sortante');

            $em->persist($soldes);

            $em->flush();
        }


        /////Render Final
        return $this->redirect($this->generateUrl('front_matchtennis'));
    }

}
