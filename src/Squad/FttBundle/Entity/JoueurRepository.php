<?php
namespace Squad\FttBundle\Entity;
use Doctrine\ORM\EntityRepository;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of JoueurRepository
 *
 * @author hppro
 */
class JoueurRepository extends EntityRepository {

    function getJoueur() {
        $query = $this->getEntityManager()
                ->createQuery("SELECT j FROM SquadFttBundle:Joueur j ,SquadFttBundle:Sanction s where s.joueurCinJoueur = j.cinJoueur ");

        return $query->getResult();
    }

}
