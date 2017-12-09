<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity
 */
class Club {

    /**
     * @var integer
     *
     * @ORM\Column(name="id_Club", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClub;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_club", type="string", length=255, nullable=false)
     */
    private $libelleClub;

    /**
     * @var string
     *
     * @ORM\Column(name="emplacement_club", type="string", length=255, nullable=false)
     */
    private $emplacementClub;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_terrains", type="integer", nullable=false)
     */
    private $nbreTerrains;

    /**
     * @var string
     *
     * @ORM\Column(name="description_club", type="text", nullable=true)
     */
    private $descriptionClub;

    /**
     * @var string
     *
     * @ORM\Column(name="img_club", type="string",length=500, nullable=true)
     */
    private $imgClub;
    public $oldFile;
    public $tempFile;

    /**
     * @Assert\File(maxSize="6000000")
     */
   private $file;
    

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile()
    {
        return $this->file;
    }
    public function getAbsolutePath()
    {
        return null === $this->imgClub
            ? null
            : $this->getUploadRootDir().'/'.$this->imgClub;
    }

    public function getWebPath()
    {
        return null === $this->imgClub
            ? null
            : $this->getUploadDir().'/'.$this->imgClub;
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
    $this->imgClub = $this->getFile()->getClientOriginalName();

    // clean up the file property as you won't need it anymore
    $this->file = null;
    }
    function getIdClub() {
        return $this->idClub;
    }

    function getLibelleClub() {
        return $this->libelleClub;
    }

    function getEmplacementClub() {
        return $this->emplacementClub;
    }

    function getNbreTerrains() {
        return $this->nbreTerrains;
    }

    function getDescriptionClub() {
        return $this->descriptionClub;
    }

    function getImgClub() {
        return $this->imgClub;
    }

    function setIdClub($idClub) {
        $this->idClub = $idClub;
    }

    function setLibelleClub($libelleClub) {
        $this->libelleClub = $libelleClub;
    }

    function setEmplacementClub($emplacementClub) {
        $this->emplacementClub = $emplacementClub;
    }

    function setNbreTerrains($nbreTerrains) {
        $this->nbreTerrains = $nbreTerrains;
    }

    function setDescriptionClub($descriptionClub) {
        $this->descriptionClub = $descriptionClub;
    }

    function setImgClub($imgClub) {
        $this->imgClub = $imgClub;
    }

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null) {
        $this->file = $file;
    }

    

}
