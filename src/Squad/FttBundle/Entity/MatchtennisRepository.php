<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Squad\FttBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 * Description of MatchtennisRepository
 *
 * @author Rached
 */
class MatchtennisRepository extends EntityRepository {
     
    function getMatchsByEvenement($idEvent)
    {
          $query = $this->getEntityManager()
                ->createQuery("select s from SquadFttBundle:matchtennis s "
                        . "where s.tourTour in "
                        . "( select t.idTour  from SquadFttBundle:Tour t"
                        . "  where t.evenementEvenement='".$idEvent."')"
          );
        return $query->getResult();

    }
}
