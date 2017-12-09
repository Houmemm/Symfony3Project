<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Squad\FttBundle\Entity\Evenement;
/**
 * Tour
 *
 * @ORM\Table(name="tour", indexes={@ORM\Index(name="fk_Tour_Evenement1_idx", columns={"Evenement_id_Evenement"})})
 * @ORM\Entity
 */
class Tour
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Tour", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTour;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_match", type="integer", nullable=false)
     */
    private $nbreMatch;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_points", type="integer", nullable=false)
     */
    private $nbrePoints;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Evenement_id_Evenement", referencedColumnName="id_Evenement")
     * })
     */
    private $evenementEvenement;

    function __construct($nbreMatch, $nbrePoints, Evenement $evenementEvenement) {
        $this->nbreMatch = $nbreMatch;
        $this->nbrePoints = $nbrePoints;
        $this->evenementEvenement = $evenementEvenement;
    }

    
    function getIdTour() {
        return $this->idTour;
    }

    function getNbreMatch() {
        return $this->nbreMatch;
    }

    function getNbrePoints() {
        return $this->nbrePoints;
    }

    function getEvenementEvenement() {
        return $this->evenementEvenement;
    }

    function setIdTour($idTour) {
        $this->idTour = $idTour;
    }

    function setNbreMatch($nbreMatch) {
        $this->nbreMatch = $nbreMatch;
    }

    function setNbrePoints($nbrePoints) {
        $this->nbrePoints = $nbrePoints;
    }

    function setEvenementEvenement(Evenement $evenementEvenement) {
        $this->evenementEvenement = $evenementEvenement;
    }


}
