<?php
namespace Squad\FttBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SquadFttBundle:Default:accueil.html.twig');
    }
    public function evenementAction()
    {
        return $this->render('SquadFttBundle:Default:evenement.html.twig');
    }
    public function joueurAction()
    {
        return $this->render('SquadFttBundle:Default:joueur.html.twig');
    }
        public function arbitreAction()
    {
        return $this->render('SquadFttBundle:Default:arbitre.html.twig');
    } 
    public function stadeAction()
    {
        return $this->render('SquadFttBundle:Default:stade.html.twig');
    }  
     public function clubAction()
    {
        return $this->render('SquadFttBundle:Default:club.html.twig');
    }  
      
     public function concourAction()
    {
        return $this->render('SquadFttBundle:Default:concour.html.twig');
    }  
         public function formationAction()
    {
        return $this->render('SquadFttBundle:Default:formation.html.twig');
    } 
         public function actualiteAction()
    {
        return $this->render('SquadFttBundle:Default:actualite.html.twig');
    } 
             public function dopageAction()
    {
        return $this->render('SquadFttBundle:Default:gestionDopage.html.twig');
    }
            public function matchAction()
    {
        return $this->render('SquadFttBundle:Default:match.html.twig');
    }
         public function authentificationAction()
    {
        return $this->render('SquadFttBundle:Default:authentification.html.twig');
    }
    
    }
