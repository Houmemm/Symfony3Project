<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="fk_Ticket_Match1_idx", columns={"Match_id_Match"}), @ORM\Index(name="fk_Ticket_User1_idx", columns={"User_id_user"})})
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code_ticket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeTicket;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_ticket", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixTicket;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_ticket", type="string", length=45, nullable=false)
     */
    private $etatTicket;

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
     * Get codeTicket
     *
     * @return integer 
     */
    public function getCodeTicket()
    {
        return $this->codeTicket;
    }

    /**
     * Set prixTicket
     *
     * @param float $prixTicket
     * @return Ticket
     */
    public function setPrixTicket($prixTicket)
    {
        $this->prixTicket = $prixTicket;

        return $this;
    }

    /**
     * Get prixTicket
     *
     * @return float 
     */
    public function getPrixTicket()
    {
        return $this->prixTicket;
    }

    /**
     * Set etatTicket
     *
     * @param string $etatTicket
     * @return Ticket
     */
    public function setEtatTicket($etatTicket)
    {
        $this->etatTicket = $etatTicket;

        return $this;
    }

    /**
     * Get etatTicket
     *
     * @return string 
     */
    public function getEtatTicket()
    {
        return $this->etatTicket;
    }

    /**
     * Set userUser
     *
     * @param \Squad\FttBundle\Entity\Utilisateur $userUser
     * @return Ticket
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
     * @return Ticket
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
