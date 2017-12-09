<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concours
 *
 * @ORM\Table(name="concours")
 * @ORM\Entity
 */
class Concours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Concour", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConcour;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_concour", type="string", length=255, nullable=false)
     */
    private $libelleConcour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_concour", type="date", nullable=false)
     */
    private $dateDebutConcour;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_concour", type="string", length=255, nullable=false)
     */
    private $lieuConcour;

    /**
     * @var string
     *
     * @ORM\Column(name="description_concours", type="text", nullable=false)
     */
    private $descriptionConcours;

    /**
     * @var float
     *
     * @ORM\Column(name="frais_participation", type="float", precision=10, scale=0, nullable=false)
     */
    private $fraisParticipation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_depot", type="date", nullable=false)
     */
    private $dateDebutDepot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_depot", type="date", nullable=false)
     */
    private $dateFinDepot;

    /**
     * @var string
     *
     * @ORM\Column(name="type_concour", type="string", length=255, nullable=false)
     */
    private $typeConcour;



    /**
     * Get idConcour
     *
     * @return integer 
     */
    public function getIdConcour()
    {
        return $this->idConcour;
    }

    /**
     * Set libelleConcour
     *
     * @param string $libelleConcour
     * @return Concours
     */
    public function setLibelleConcour($libelleConcour)
    {
        $this->libelleConcour = $libelleConcour;

        return $this;
    }

    /**
     * Get libelleConcour
     *
     * @return string 
     */
    public function getLibelleConcour()
    {
        return $this->libelleConcour;
    }

    /**
     * Set dateDebutConcour
     *
     * @param \DateTime $dateDebutConcour
     * @return Concours
     */
    public function setDateDebutConcour($dateDebutConcour)
    {
        $this->dateDebutConcour = $dateDebutConcour;

        return $this;
    }

    /**
     * Get dateDebutConcour
     *
     * @return \DateTime 
     */
    public function getDateDebutConcour()
    {
        return $this->dateDebutConcour;
    }

    /**
     * Set lieuConcour
     *
     * @param string $lieuConcour
     * @return Concours
     */
    public function setLieuConcour($lieuConcour)
    {
        $this->lieuConcour = $lieuConcour;

        return $this;
    }

    /**
     * Get lieuConcour
     *
     * @return string 
     */
    public function getLieuConcour()
    {
        return $this->lieuConcour;
    }

    /**
     * Set descriptionConcours
     *
     * @param string $descriptionConcours
     * @return Concours
     */
    public function setDescriptionConcours($descriptionConcours)
    {
        $this->descriptionConcours = $descriptionConcours;

        return $this;
    }

    /**
     * Get descriptionConcours
     *
     * @return string 
     */
    public function getDescriptionConcours()
    {
        return $this->descriptionConcours;
    }

    /**
     * Set fraisParticipation
     *
     * @param float $fraisParticipation
     * @return Concours
     */
    public function setFraisParticipation($fraisParticipation)
    {
        $this->fraisParticipation = $fraisParticipation;

        return $this;
    }

    /**
     * Get fraisParticipation
     *
     * @return float 
     */
    public function getFraisParticipation()
    {
        return $this->fraisParticipation;
    }

    /**
     * Set dateDebutDepot
     *
     * @param \DateTime $dateDebutDepot
     * @return Concours
     */
    public function setDateDebutDepot($dateDebutDepot)
    {
        $this->dateDebutDepot = $dateDebutDepot;

        return $this;
    }

    /**
     * Get dateDebutDepot
     *
     * @return \DateTime 
     */
    public function getDateDebutDepot()
    {
        return $this->dateDebutDepot;
    }

    /**
     * Set dateFinDepot
     *
     * @param \DateTime $dateFinDepot
     * @return Concours
     */
    public function setDateFinDepot($dateFinDepot)
    {
        $this->dateFinDepot = $dateFinDepot;

        return $this;
    }

    /**
     * Get dateFinDepot
     *
     * @return \DateTime 
     */
    public function getDateFinDepot()
    {
        return $this->dateFinDepot;
    }

    /**
     * Set typeConcour
     *
     * @param string $typeConcour
     * @return Concours
     */
    public function setTypeConcour($typeConcour)
    {
        $this->typeConcour = $typeConcour;

        return $this;
    }

    /**
     * Get typeConcour
     *
     * @return string 
     */
    public function getTypeConcour()
    {
        return $this->typeConcour;
    }
}
