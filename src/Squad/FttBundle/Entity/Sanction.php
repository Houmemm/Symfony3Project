<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sanction
 *
 * @ORM\Table(name="sanction", indexes={@ORM\Index(name="fk_Sanction_Joueur1_idx", columns={"Joueur_cin_Joueur"})})
 * @ORM\Entity
 */
class Sanction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Sanction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSanction;

    /**
     * @var string
     *
     * @ORM\Column(name="type_sanction", type="string", length=255, nullable=false)
     */
    private $typeSanction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_sanction", type="date", nullable=false)
     */
    private $dateDebutSanction;

    /**
     * @var string
     *
     * @ORM\Column(name="description_sanction", type="text", nullable=true)
     */
    private $descriptionSanction;

    /**
     * @var \Joueur
     *
     * @ORM\ManyToOne(targetEntity="Joueur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Joueur_cin_Joueur", referencedColumnName="cin_Joueur")
     * })
     */
    private $joueurCinJoueur;

    function getIdSanction() {
        return $this->idSanction;
    }

    function getTypeSanction() {
        return $this->typeSanction;
    }

    function getDateDebutSanction() {
        return $this->dateDebutSanction;
    }

    function getDescriptionSanction() {
        return $this->descriptionSanction;
    }

    function getJoueurCinJoueur() {
        return $this->joueurCinJoueur;
    }

    function setIdSanction($idSanction) {
        $this->idSanction = $idSanction;
    }

    function setTypeSanction($typeSanction) {
        $this->typeSanction = $typeSanction;
    }

    function setDateDebutSanction(\DateTime $dateDebutSanction) {
        $this->dateDebutSanction = $dateDebutSanction;
    }

    function setDescriptionSanction($descriptionSanction) {
        $this->descriptionSanction = $descriptionSanction;
    }

    function setJoueurCinJoueur(Joueur $joueurCinJoueur) {
        $this->joueurCinJoueur = $joueurCinJoueur;
    }


}
