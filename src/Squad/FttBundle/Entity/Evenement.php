<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{       
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Evenement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_evenement", type="string", length=255, nullable=false)
     */
    private $libelleEvenement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255, nullable=false)
     */
    private $site;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_joueur", type="integer", nullable=false)
     */
    private $nbreJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="image_eve", type="string", length=500, nullable=true)
     */
    private $imageEve;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=100, nullable=true)
     */
    private $statut;
    
    function getId()
    {
    return $this->idEvenement;
    }
    
    function getIdEvenement() {
        return $this->idEvenement;
    }

    function getLibelleEvenement() {
        return $this->libelleEvenement;
    }

    function getDateDebut() {
        return $this->dateDebut;
    }

    function getDateFin() {
        return $this->dateFin;
    }

    function getType() {
        return $this->type;
    }

    function getSite() {
        return $this->site;
    }

    function getNbreJoueur() {
        return $this->nbreJoueur;
    }

    function getImageEve() {
        return $this->imageEve;
    }

    function getStatut() {
        return $this->statut;
    }

    function setIdEvenement($idEvenement) {
        $this->idEvenement = $idEvenement;
    }

    function setLibelleEvenement($libelleEvenement) {
        $this->libelleEvenement = $libelleEvenement;
    }

    function setDateDebut(\DateTime $dateDebut) {
        $this->dateDebut = $dateDebut;
    }

    function setDateFin(\DateTime $dateFin) {
        $this->dateFin = $dateFin;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setSite($site) {
        $this->site = $site;
    }

    function setNbreJoueur($nbreJoueur) {
        $this->nbreJoueur = $nbreJoueur;
    }

    function setImageEve($imageEve) {
        $this->imageEve = $imageEve;
    }

    function setStatut($statut) {
        $this->statut = $statut;
    }



}
