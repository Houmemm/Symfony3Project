<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Stade
 *
 * @ORM\Table(name="stade")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks   

 */
class Stade {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_Stade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")

     */
    private $idStade;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_stade", type="string", length=255, nullable=false)
     */
    private $libelleStade;

    /**
     * @var string
     *
     * @ORM\Column(name="img_stade", type="string", length=255, nullable=true)
     */
    public $path;
    public $file;

    public function getUploadRootDir() {
        return __dir__ . '/../../../../web/uploads';
    }

    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    /**
     * @ORM\Prepersist()
     * @ORM\Preupdate()
     */
    public function preUplod() {
        $this->tempFile = $this->getAbsolutePath();
        $this->oldFile = $this->getPath();
        if (null !== $this->file) {
            $this->path = sha1(uniqid(mt_rand(), true)) . '.' . $this->file->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
        if (null !== $this->file) {
            $this->file->move($this->getUploadRootDir(), $this->path);
            unset($this->file);
            if ($this->oldFile != null) {
                unlink($this->tempFile);
            }
        }
    }

    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload() {
        $this->tempFile = $this->getAbsolutePath();
    }

    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        if (file_exists($this->tempFile)) {
            unlink($this->tempFile);
        }
    }

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement", type="string", length=255, nullable=false)
     */
    private $emplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="type_terrains", type="string", length=255, nullable=false)
     */
    private $typeTerrains;

    /**
     * @var integer
     *
     * @ORM\Column(name="capacite", type="integer", nullable=false)
     */
    private $capacite;

    /**
     * Get idStade
     *
     * @return integer 
     */
    public function getIdStade() {
        return $this->idStade;
    }

    /**
     * Set libelleStade
     *
     * @param string $libelleStade
     * @return Stade
     */
    public function setLibelleStade($libelleStade) {
        $this->libelleStade = $libelleStade;

        return $this;
    }

    /**
     * Get libelleStade
     *
     * @return string 
     */
    public function getLibelleStade() {
        return $this->libelleStade;
    }

    /**
     * Set emplacement
     *
     * @param string $emplacement
     * @return Stade
     */
    public function setEmplacement($emplacement) {
        $this->emplacement = $emplacement;

        return $this;
    }

    /**
     * Get emplacement
     *
     * @return string 
     */
    public function getEmplacement() {
        return $this->emplacement;
    }

    /**
     * Set typeTerrains
     *
     * @param string $typeTerrains
     * @return Stade
     */
    public function setTypeTerrains($typeTerrains) {
        $this->typeTerrains = $typeTerrains;

        return $this;
    }

    /**
     * Get typeTerrains
     *
     * @return string 
     */
    public function getTypeTerrains() {
        return $this->typeTerrains;
    }

    /**
     * Set capacite
     *
     * @param integer $capacite
     * @return Stade
     */
    public function setCapacite($capacite) {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer 
     */
    public function getCapacite() {
        return $this->capacite;
    }

    public function getPath() {
        return $this->path;
    }

    public function __toString() {
        if (isset($this->libelleStade)) {
            return $this->libelleStade;
        }
        return "";
    }

}
