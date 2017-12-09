<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Squad\FttBundle\Entity\Utilisateur;
/**
 * Soldes
 *
 * @ORM\Table(name="soldes", indexes={@ORM\Index(name="fk_Soldes_User1_idx", columns={"User_id_user"})})
 * @ORM\Entity(repositoryClass="Squad\FttBundle\Repository\SoldesRepository")
 */
class Soldes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_transaction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTransaction;

    /**
     * @var float
     *
     * @ORM\Column(name="Valeur", type="float", precision=10, scale=0, nullable=false)
     */
    private $valeur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ajout", type="date", nullable=true)
     */
    private $dateAjout;

    /**
     * @var string
     *
     * @ORM\Column(name="preuve", type="string", length=250, nullable=false)
     */
    private $preuve;

    /**
     * @var string
     *
     * @ORM\Column(name="type_transaction", type="string", length=250, nullable=false)
     */
    private $typeTransaction;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_id_user", referencedColumnName="id")
     * })
     */
    private $userUser;
    
    
    function getIdTransaction() {
        return $this->idTransaction;
    }

    function getValeur() {
        return $this->valeur;
    }

    function getDateAjout() {
        return $this->dateAjout;
    }

    function getPreuve() {
        return $this->preuve;
    }

    function getTypeTransaction() {
        return $this->typeTransaction;
    }

    function getUserUser() {
        return $this->userUser;
    }

    function setIdTransaction($idTransaction) {
        $this->idTransaction = $idTransaction;
    }

    function setValeur($valeur) {
        $this->valeur = $valeur;
    }

    function setDateAjout(\DateTime $dateAjout) {
        $this->dateAjout = $dateAjout;
    }

    function setPreuve($preuve) {
        $this->preuve = $preuve;
    }

    function setTypeTransaction($typeTransaction) {
        $this->typeTransaction = $typeTransaction;
    }

    function setUserUser(Utilisateur $userUser) {
        $this->userUser = $userUser;
    }



}
