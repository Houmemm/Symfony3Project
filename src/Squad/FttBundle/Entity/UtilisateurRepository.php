<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of UtilisateurRepository
 *
 * @author Rached
 */
class UtilisateurRepository extends EntityRepository {

    function getByRole($r) {
        $query = $this->getEntityManager()
                ->createQuery("select s from"
                . " SquadFttBundle:Utilisateur s "
                . " where s.roles LIKE '%" . $r . "%'");

        return $query->getResult();
    }

    function getByRoleType($r) {
        $query = $this->createQueryBuilder('s')
                ->from('SquadFttBundle:Utilisateur', 'a')
                ->where("s.roles LIKE '%" . $r . "%'");

        return $query;
    }

}
