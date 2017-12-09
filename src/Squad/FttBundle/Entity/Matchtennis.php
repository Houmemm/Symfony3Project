<?php

namespace Squad\FttBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Squad\FttBundle\Entity\Stade;
use Squad\FttBundle\Entity\Utilisateur;
use Squad\FttBundle\Entity\Tour;

/**
 * Matchtennis
 *
 * @ORM\Table(name="matchtennis", indexes={@ORM\Index(name="Stade_id_Stade", columns={"Stade_id_Stade"}), @ORM\Index(name="Tour_id_Tour", columns={"Tour_id_Tour"}), @ORM\Index(name="User_id_user", columns={"User_id_user"})})
 *  @ORM\Entity(repositoryClass="Squad\FttBundle\Entity\MatchtennisRepository")
 */
class Matchtennis
{
   

    /**
     * @var integer
     *
     * @ORM\Column(name="id_Match", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMatch;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_match", type="date", nullable=false)
     */
    private $dateMatch;

    /**
     * @var integer
     *
     * @ORM\Column(name="valeur_en_point", type="integer", nullable=true)
     */
    private $valeurEnPoint;

    /**
     * @var \Tour
     *
     * @ORM\ManyToOne(targetEntity="Tour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tour_id_Tour", referencedColumnName="id_Tour")
     * })
     */
    private $tourTour;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_id_user", referencedColumnName="id")
     * })
     */
    private $userUser;

    /**
     * @var \Stade
     *
     * @ORM\ManyToOne(targetEntity="Stade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Stade_id_Stade", referencedColumnName="id_Stade")
     * })
     */
    private $stadeStade;

    function getIdMatch() {
        return $this->idMatch;
    }

    function getDateMatch() {
        return $this->dateMatch;
    }

    function getValeurEnPoint() {
        return $this->valeurEnPoint;
    }

    function getTourTour() {
        return $this->tourTour;
    }

    function getUserUser() {
        return $this->userUser;
    }

    function getStadeStade() {
        return $this->stadeStade;
    }

    function setIdMatch($idMatch) {
        $this->idMatch = $idMatch;
    }

    function setDateMatch(\DateTime $dateMatch) {
        $this->dateMatch = $dateMatch;
    }

    function setValeurEnPoint($valeurEnPoint) {
        $this->valeurEnPoint = $valeurEnPoint;
    }

    function setTourTour(Tour $tourTour) {
        $this->tourTour = $tourTour;
    }

    function setUserUser(Utilisateur $userUser) {
        $this->userUser = $userUser;
    }

    function setStadeStade(Stade $stadeStade) {
        $this->stadeStade = $stadeStade;
    }

  
    private $joueurs;

    function getJoueurs() {
        return $this->joueurs;
    }

    function setJoueurs($joueurs) {
        $this->joueurs = $joueurs;
    }

    private $sets;

    function getSets() {
        return $this->sets;
    }

    function setSets($sets) {
        $this->sets = $sets;
    }

}
