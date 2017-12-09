<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Disponibiliter
 *
 * @ORM\Table(name="disponibiliter", indexes={@ORM\Index(name="fk_Disponibiliter_User1_idx", columns={"User_id_user"})})
 * @ORM\Entity
 */
class Disponibiliter
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Dispo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDispo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_empechement", type="date", nullable=false)
     */
    private $dateEmpechement;

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
     * Get idDispo
     *
     * @return integer 
     */
    public function getIdDispo()
    {
        return $this->idDispo;
    }

    /**
     * Set dateEmpechement
     *
     * @param \DateTime $dateEmpechement
     * @return Disponibiliter
     */
    public function setDateEmpechement($dateEmpechement)
    {
        $this->dateEmpechement = $dateEmpechement;

        return $this;
    }

    /**
     * Get dateEmpechement
     *
     * @return \DateTime 
     */
    public function getDateEmpechement()
    {
        return $this->dateEmpechement;
    }

    /**
     * Set userUser
     *
     * @param \Squad\FttBundle\Entity\Utilisateur $userUser
     * @return Disponibiliter
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
