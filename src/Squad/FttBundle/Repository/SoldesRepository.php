<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Squad\FttBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Description of SoldesRepository
 *
 * @author Gadour
 */
class SoldesRepository extends EntityRepository {

    public function findSoldes($id) {
//        $qb = $this->createQueryBuilder('SELECT s FROM Soldes s where s.userUser=:id')
//                ->setParameter('userUser', $userUser);
//        $qb = $this->createQueryBuilder('s')
//                ->Select('s')
//                ->from('Soldes','s')
//                ->Where($qb->expr()->eq('s.userUser',':id'))
//                ->setParameter('id', $id);
//        return $qb->getQuery()->getResult();
        $qb = $this->createQueryBuilder(
                        'SELECT s
    FROM SquadFttBundle:Soldes s
    WHERE s.userUser = :id'
    
                )->setParameter('id', $id);
        $solde = $qb->getQuery()->getResult();
        return $solde;
    }
    

}
