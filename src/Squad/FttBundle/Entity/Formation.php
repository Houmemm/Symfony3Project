<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation", indexes={@ORM\Index(name="fk_Formation_User1_idx", columns={"User_id_user"})})
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Formation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_formation", type="string", length=255, nullable=false)
     */
    private $libelleFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="grade", type="string", length=255, nullable=false)
     */
    private $grade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_formation", type="date", nullable=false)
     */
    private $dateDebutFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_formation", type="date", nullable=false)
     */
    private $dateFinFormation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut_postilation", type="date", nullable=false)
     */
    private $dateDebutPostilation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_postilation", type="date", nullable=false)
     */
    private $dateFinPostilation;

    /**
     * @var float
     *
     * @ORM\Column(name="frais_formation", type="float", precision=10, scale=0, nullable=false)
     */
    private $fraisFormation;

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
     * Get idFormation
     *
     * @return integer 
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * Set libelleFormation
     *
     * @param string $libelleFormation
     * @return Formation
     */
    public function setLibelleFormation($libelleFormation)
    {
        $this->libelleFormation = $libelleFormation;

        return $this;
    }

    /**
     * Get libelleFormation
     *
     * @return string 
     */
    public function getLibelleFormation()
    {
        return $this->libelleFormation;
    }

    /**
     * Set grade
     *
     * @param string $grade
     * @return Formation
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
    }

    /**
     * Get grade
     *
     * @return string 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set dateDebutFormation
     *
     * @param \DateTime $dateDebutFormation
     * @return Formation
     */
    public function setDateDebutFormation($dateDebutFormation)
    {
        $this->dateDebutFormation = $dateDebutFormation;

        return $this;
    }

    /**
     * Get dateDebutFormation
     *
     * @return \DateTime 
     */
    public function getDateDebutFormation()
    {
        return $this->dateDebutFormation;
    }

    /**
     * Set dateFinFormation
     *
     * @param \DateTime $dateFinFormation
     * @return Formation
     */
    public function setDateFinFormation($dateFinFormation)
    {
        $this->dateFinFormation = $dateFinFormation;

        return $this;
    }

    /**
     * Get dateFinFormation
     *
     * @return \DateTime 
     */
    public function getDateFinFormation()
    {
        return $this->dateFinFormation;
    }

    /**
     * Set dateDebutPostilation
     *
     * @param \DateTime $dateDebutPostilation
     * @return Formation
     */
    public function setDateDebutPostilation($dateDebutPostilation)
    {
        $this->dateDebutPostilation = $dateDebutPostilation;

        return $this;
    }

    /**
     * Get dateDebutPostilation
     *
     * @return \DateTime 
     */
    public function getDateDebutPostilation()
    {
        return $this->dateDebutPostilation;
    }

    /**
     * Set dateFinPostilation
     *
     * @param \DateTime $dateFinPostilation
     * @return Formation
     */
    public function setDateFinPostilation($dateFinPostilation)
    {
        $this->dateFinPostilation = $dateFinPostilation;

        return $this;
    }

    /**
     * Get dateFinPostilation
     *
     * @return \DateTime 
     */
    public function getDateFinPostilation()
    {
        return $this->dateFinPostilation;
    }

    /**
     * Set fraisFormation
     *
     * @param float $fraisFormation
     * @return Formation
     */
    public function setFraisFormation($fraisFormation)
    {
        $this->fraisFormation = $fraisFormation;

        return $this;
    }

    /**
     * Get fraisFormation
     *
     * @return float 
     */
    public function getFraisFormation()
    {
        return $this->fraisFormation;
    }

    /**
     * Set userUser
     *
     * @param \Squad\FttBundle\Entity\Utilisateur $userUser
     * @return Formation
     */
    public function setUserUser(\Squad\FttBundle\Entity\Utilisateur $userUser = null)
    {
        $this->userUser = $userUser;

        return $this;
    }

    /**
     * Get userUser
     *
     * @return \Squad\FttBundle\Entity\Utilisateur 
     */
    public function getUserUser()
    {
        return $this->userUser;
    }
}
