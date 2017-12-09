<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Squad\FttBundle\Entity\Matchtennis;
use Squad\FttBundle\Entity\Joueur;


/**
 * MatchHasJoueur
 *
 * @ORM\Table(name="match_has_joueur", indexes={@ORM\Index(name="fk_Match_has_Joueur_Joueur1_idx", columns={"Joueur_cin"}), @ORM\Index(name="fk_Match_has_Joueur_Match_idx", columns={"Match_id_Match"})})
 * @ORM\Entity
 */
class MatchHasJoueur

{ 
    /**
     * @var integer
     *
     * @ORM\Column(name="id_match_has_joueur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMatchHasJoueur;

    /**
     * @var \Matchtennis
     *
     * @ORM\ManyToOne(targetEntity="Matchtennis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Match_id_Match", referencedColumnName="id_Match")
     * })
     */
    private $matchMatch;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Joueur_cin", referencedColumnName="cin_Joueur")
     * })
     */
    private $joueurCin;

    function getIdMatchHasJoueur() {
        return $this->idMatchHasJoueur;
    }

    function getMatchMatch() {
        return $this->matchMatch;
    }

    function getJoueurCin() {
        return $this->joueurCin;
    }

    function setIdMatchHasJoueur($idMatchHasJoueur) {
        $this->idMatchHasJoueur = $idMatchHasJoueur;
    }

    function setMatchMatch(Matchtennis $matchMatch) {
        $this->matchMatch = $matchMatch;
    }

    function setJoueurCin(Joueur $joueurCin) {
        $this->joueurCin = $joueurCin;
    }


}
