<?php

namespace FTT\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
/**

 * @ORM\Entity

 */
class Utilisateur extends BaseUser

{

  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
/**
     * @var float
     *
     * @ORM\Column(name="cin_user", type="float", precision=10, scale=0, nullable=true)
     */
    private $cinUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=false)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_naissance", type="date", nullable=false)
     */
    private $dateDeNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="nationaliter", type="string", length=45, nullable=false)
     */
    private $nationaliter;

    /**
     * @var float
     *
     * @ORM\Column(name="tel", type="float", precision=10, scale=0, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="grade_arbitre", type="string", length=255, nullable=true)
     */
    private $gradeArbitre;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=45, nullable=false)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="type_arbitre", type="string", length=255, nullable=true)
     */
    private $typeArbitre;

    /**
     * Set cinUser
     *
     * @param float $cinUser
     * @return User
     */
    public function setCinUser($cinUser)
    {
        $this->cinUser = $cinUser;

        return $this;
    }

    /**
     * Get cinUser
     *
     * @return float 
     */
    public function getCinUser()
    {
        return $this->cinUser;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateDeNaissance
     *
     * @param \DateTime $dateDeNaissance
     * @return User
     */
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;

        return $this;
    }

    /**
     * Get dateDeNaissance
     *
     * @return \DateTime 
     */
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * Set nationaliter
     *
     * @param string $nationaliter
     * @return User
     */
    public function setNationaliter($nationaliter)
    {
        $this->nationaliter = $nationaliter;

        return $this;
    }

    /**
     * Get nationaliter
     *
     * @return string 
     */
    public function getNationaliter()
    {
        return $this->nationaliter;
    }

    /**
     * Set tel
     *
     * @param float $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return float 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set gradeArbitre
     *
     * @param string $gradeArbitre
     * @return User
     */
    public function setGradeArbitre($gradeArbitre)
    {
        $this->gradeArbitre = $gradeArbitre;

        return $this;
    }

    /**
     * Get gradeArbitre
     *
     * @return string 
     */
    public function getGradeArbitre()
    {
        return $this->gradeArbitre;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set typeArbitre
     *
     * @param string $typeArbitre
     * @return User
     */
    public function setTypeArbitre($typeArbitre)
    {
        $this->typeArbitre = $typeArbitre;

        return $this;
    }

    /**
     * Get typeArbitre
     *
     * @return string 
     */
    public function getTypeArbitre()
    {
        return $this->typeArbitre;
    }
}