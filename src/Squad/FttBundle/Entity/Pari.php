<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pari
 *
 * @ORM\Table(name="pari", indexes={@ORM\Index(name="fk_pari_Match1_idx", columns={"Match_id_Match"}), @ORM\Index(name="fk_pari_User1_idx", columns={"User_id_user"})})
 * @ORM\Entity
 */
class Pari
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Pari", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPari;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var float
     *
     * @ORM\Column(name="Q1", type="float", precision=10, scale=0, nullable=false)
     */
    private $q1;

    /**
     * @var float
     *
     * @ORM\Column(name="Q2", type="float", precision=10, scale=0, nullable=false)
     */
    private $q2;

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
     * @var \Matchtennis
     *
     * @ORM\ManyToOne(targetEntity="Matchtennis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Match_id_Match", referencedColumnName="id_Match")
     * })
     */
    private $matchMatch;



    /**
     * Get idPari
     *
     * @return integer 
     */
    public function getIdPari()
    {
        return $this->idPari;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Pari
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set q1
     *
     * @param float $q1
     * @return Pari
     */
    public function setQ1($q1)
    {
        $this->q1 = $q1;

        return $this;
    }

    /**
     * Get q1
     *
     * @return float 
     */
    public function getQ1()
    {
        return $this->q1;
    }

    /**
     * Set q2
     *
     * @param float $q2
     * @return Pari
     */
    public function setQ2($q2)
    {
        $this->q2 = $q2;

        return $this;
    }

    /**
     * Get q2
     *
     * @return float 
     */
    public function getQ2()
    {
        return $this->q2;
    }

    /**
     * Set userUser
     *
     * @param \Squad\FttBundle\Entity\Utilisateur $userUser
     * @return Pari
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

    /**
     * Set matchMatch
     *
     * @param \Squad\FttBundle\Entity\Matchtennis $matchMatch
     * @return Pari
     */
    public function setMatchMatch(\Squad\FttBundle\Entity\Matchtennis $matchMatch = null)
    {
        $this->matchMatch = $matchMatch;

        return $this;
    }

    /**
     * Get matchMatch
     *
     * @return \Squad\FttBundle\Entity\Matchtennis 
     */
    public function getMatchMatch()
    {
        return $this->matchMatch;
    }
}
