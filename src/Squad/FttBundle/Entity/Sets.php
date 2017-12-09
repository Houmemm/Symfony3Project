<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sets
 *
 * @ORM\Table(name="sets", indexes={@ORM\Index(name="fk_Sets_Match1_idx", columns={"Match_id_Match"})})
 * @ORM\Entity
 */
class Sets
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_set", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSet;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_j1", type="integer", nullable=false)
     */
    private $scoreJ1;

    /**
     * @var integer
     *
     * @ORM\Column(name="score_j2", type="integer", nullable=false)
     */
    private $scoreJ2;

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
     * Get idSet
     *
     * @return integer 
     */
    public function getIdSet()
    {
        return $this->idSet;
    }

    /**
     * Set scoreJ1
     *
     * @param integer $scoreJ1
     * @return Sets
     */
    public function setScoreJ1($scoreJ1)
    {
        $this->scoreJ1 = $scoreJ1;

        return $this;
    }

    /**
     * Get scoreJ1
     *
     * @return integer 
     */
    public function getScoreJ1()
    {
        return $this->scoreJ1;
    }

    /**
     * Set scoreJ2
     *
     * @param integer $scoreJ2
     * @return Sets
     */
    public function setScoreJ2($scoreJ2)
    {
        $this->scoreJ2 = $scoreJ2;

        return $this;
    }

    /**
     * Get scoreJ2
     *
     * @return integer 
     */
    public function getScoreJ2()
    {
        return $this->scoreJ2;
    }

    /**
     * Set matchMatch
     *
     * @param \Squad\FttBundle\Entity\Matchtennis $matchMatch
     * @return Sets
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
