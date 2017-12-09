<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Postulation
 *
 * @ORM\Table(name="postulation", indexes={@ORM\Index(name="fk_Postulation_Concours1_idx", columns={"Concours_id_Concour"}), @ORM\Index(name="fk_Postulation_Formation1_idx", columns={"Formation_id_Formation"}), @ORM\Index(name="fk_Postulation_User1_idx", columns={"User_id_user"})})
 * @ORM\Entity
 */
class Postulation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_Postulation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPostulation;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_match", type="integer", nullable=false)
     */
    private $nbreMatch;

    /**
     * @var integer
     *
     * @ORM\Column(name="anciennete", type="integer", nullable=false)
     */
    private $anciennete;

    /**
     * @var string
     *
     * @ORM\Column(name="cv_arbitre", type="string", length=500, nullable=true)
     */
    private $cvArbitre;

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
     * @var \Concours
     *
     * @ORM\ManyToOne(targetEntity="Concours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Concours_id_Concour", referencedColumnName="id_Concour")
     * })
     */
    private $concoursConcour;

    /**
     * @var \Formation
     *
     * @ORM\ManyToOne(targetEntity="Formation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Formation_id_Formation", referencedColumnName="id_Formation")
     * })
     */
    private $formationFormation;



    /**
     * Get idPostulation
     *
     * @return integer 
     */
    public function getIdPostulation()
    {
        return $this->idPostulation;
    }

    /**
     * Set nbreMatch
     *
     * @param integer $nbreMatch
     * @return Postulation
     */
    public function setNbreMatch($nbreMatch)
    {
        $this->nbreMatch = $nbreMatch;

        return $this;
    }

    /**
     * Get nbreMatch
     *
     * @return integer 
     */
    public function getNbreMatch()
    {
        return $this->nbreMatch;
    }

    /**
     * Set anciennete
     *
     * @param integer $anciennete
     * @return Postulation
     */
    public function setAnciennete($anciennete)
    {
        $this->anciennete = $anciennete;

        return $this;
    }

    /**
     * Get anciennete
     *
     * @return integer 
     */
    public function getAnciennete()
    {
        return $this->anciennete;
    }

    /**
     * Set cvArbitre
     *
     * @param string $cvArbitre
     * @return Postulation
     */
    public function setCvArbitre($cvArbitre)
    {
        $this->cvArbitre = $cvArbitre;

        return $this;
    }

    /**
     * Get cvArbitre
     *
     * @return string 
     */
    public function getCvArbitre()
    {
        return $this->cvArbitre;
    }

    /**
     * Set userUser
     *
     * @param \Squad\FttBundle\Entity\Utilisateur $userUser
     * @return Postulation
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
     * Set concoursConcour
     *
     * @param \Squad\FttBundle\Entity\Concours $concoursConcour
     * @return Postulation
     */
    public function setConcoursConcour(\Squad\FttBundle\Entity\Concours $concoursConcour = null)
    {
        $this->concoursConcour = $concoursConcour;

        return $this;
    }

    /**
     * Get concoursConcour
     *
     * @return \Squad\FttBundle\Entity\Concours 
     */
    public function getConcoursConcour()
    {
        return $this->concoursConcour;
    }

    /**
     * Set formationFormation
     *
     * @param \Squad\FttBundle\Entity\Formation $formationFormation
     * @return Postulation
     */
    public function setFormationFormation(\Squad\FttBundle\Entity\Formation $formationFormation = null)
    {
        $this->formationFormation = $formationFormation;

        return $this;
    }

    /**
     * Get formationFormation
     *
     * @return \Squad\FttBundle\Entity\Formation 
     */
    public function getFormationFormation()
    {
        return $this->formationFormation;
    }
    
    
    public function getAbsolutePath()
    {
        return null === $this->cvArbitre
            ? null
            : $this->getUploadRootDir().'/'.$this->cvArbitre;
    }

    public function getWebPath()
    {
        return null === $this->cvArbitre
            ? null
            : $this->getUploadDir().'/'.$this->cvArbitre;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/';
    }
    
    /**
     * @Assert\File(maxSize="6000000")
     */
    private $file;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }
    
    public function upload()
{
    // the file property can be empty if the field is not required
    if (null === $this->getFile()) {
        return;
    }

    // use the original file name here but you should
    // sanitize it at least to avoid any security issues

    // move takes the target directory and then the
    // target filename to move to
    $this->getFile()->move(
        $this->getUploadRootDir(),
        $this->getFile()->getClientOriginalName()
    );

    // set the path property to the filename where you've saved the file
    $this->path = $this->getFile()->getClientOriginalName();

    // clean up the file property as you won't need it anymore
    $this->file = null;
}
}
