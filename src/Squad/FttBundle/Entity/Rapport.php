<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rapport
 *
 * @ORM\Table(name="rapport", indexes={@ORM\Index(name="fk_Rapport_Joueur1_idx", columns={"Joueur_cin_Joueur"}), @ORM\Index(name="fk_Rapport_User1_idx", columns={"User_id_user"})})
 * @ORM\Entity
 */
class Rapport
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Rapport", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRapport;

    /**
     * @var string
     *
     * @ORM\Column(name="resultat_test", type="string", length=255, nullable=false)
     */
    private $resultatTest;

    private $rapportDoppage;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=true)
     */
    private $commentaire;

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
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Joueur_cin_Joueur", referencedColumnName="cin_Joueur")
     * })
     */
    private $joueurCinJoueur;

    function getIdRapport() {
        return $this->idRapport;
    }

    function getResultatTest() {
        return $this->resultatTest;
    }

    

    function getCommentaire() {
        return $this->commentaire;
    }

    function getUserUser() {
        return $this->userUser;
    }

    function getJoueurCinJoueur() {
        return $this->joueurCinJoueur;
    }

    function setIdRapport($idRapport) {
        $this->idRapport = $idRapport;
    }

    function setResultatTest($resultatTest) {
        $this->resultatTest = $resultatTest;
    }

    

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    function setUserUser(Utilisateur $userUser) {
        $this->userUser = $userUser;
    }

    function setJoueurCinJoueur(Joueur $joueurCinJoueur) {
        $this->joueurCinJoueur = $joueurCinJoueur;
    }


}
