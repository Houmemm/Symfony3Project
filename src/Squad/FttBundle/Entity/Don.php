<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Don
 *
 * @ORM\Table(name="don", indexes={@ORM\Index(name="fk_Don_Club1_idx", columns={"Club_id_Club"})})
 * @ORM\Entity
 */
class Don
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Don", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDon;

    /**
     * @var float
     *
     * @ORM\Column(name="somme", type="float", precision=10, scale=0, nullable=true)
     */
    private $somme;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_don", type="date", nullable=true)
     */
    private $dateDon;

    /**
     * @var \Club
     *
     * @ORM\ManyToOne(targetEntity="Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Club_id_Club", referencedColumnName="id_Club")
     * })
     */
    private $clubClub;



    /**
     * Get idDon
     *
     * @return integer 
     */
    public function getIdDon()
    {
        return $this->idDon;
    }

    /**
     * Set somme
     *
     * @param float $somme
     * @return Don
     */
    public function setSomme($somme)
    {
        $this->somme = $somme;

        return $this;
    }

    /**
     * Get somme
     *
     * @return float 
     */
    public function getSomme()
    {
        return $this->somme;
    }

    /**
     * Set dateDon
     *
     * @param \DateTime $dateDon
     * @return Don
     */
    public function setDateDon($dateDon)
    {
        $this->dateDon = $dateDon;

        return $this;
    }

    /**
     * Get dateDon
     *
     * @return \DateTime 
     */
    public function getDateDon()
    {
        return $this->dateDon;
    }

    /**
     * Set clubClub
     *
     * @param \Squad\FttBundle\Entity\Club $clubClub
     * @return Don
     */
    public function setClubClub(\Squad\FttBundle\Entity\Club $clubClub = null)
    {
        $this->clubClub = $clubClub;

        return $this;
    }

    /**
     * Get clubClub
     *
     * @return \Squad\FttBundle\Entity\Club 
     */
    public function getClubClub()
    {
        return $this->clubClub;
    }
}
