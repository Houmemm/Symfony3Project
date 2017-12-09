<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Squad\FttBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Description of ArticlesRepository
 *
 * @author Gadour
 */
class ArticlesRepository extends EntityRepository {

    public function findArray($array) {
        $qb = $this->createQueryBuilder('u')
                ->Select('u')
                ->Where('u.idArticle IN (:array)')
                ->setParameter('array', $array);
        return $qb->getQuery()->getResult();
    }

}
