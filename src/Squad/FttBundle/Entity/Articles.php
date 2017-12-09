<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="fk_Articles_User1_idx", columns={"User_id_user"})})
 * @ORM\Entity(repositoryClass="Squad\FttBundle\Repository\ArticlesRepository")
 */
class Articles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_article", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_article", type="string", length=255, nullable=false)
     */
    private $libelleArticle;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="img_article", type="string", length=255, nullable=true)
     */
    private $pathArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_article", type="string", length=50)
     */
    private $etatArticle = 'Disponnible';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="User_id_user", referencedColumnName="id")
     * })
     */
    private $userUser;

    function getIdArticle() {
        return $this->idArticle;
    }

    function getLibelleArticle() {
        return $this->libelleArticle;
    }

    function getPrix() {
        return $this->prix;
    }

    function getDescription() {
        return $this->description;
    }

    function getPathArticle() {
        return $this->pathArticle;
    }

    function getEtatArticle() {
        return $this->etatArticle;
    }

    function getUserUser() {
        return $this->userUser;
    }

    function setIdArticle($idArticle) {
        $this->idArticle = $idArticle;
    }

    function setLibelleArticle($libelleArticle) {
        $this->libelleArticle = $libelleArticle;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setPathArticle($pathArticle) {
        $this->pathArticle = $pathArticle;
    }

    function setEtatArticle($etatArticle) {
        $this->etatArticle = $etatArticle;
    }

    function setUserUser($userUser) {
        $this->userUser = $userUser;
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
    public function getAbsolutePath()
    {
        return null === $this->pathArticle
            ? null
            : $this->getUploadRootDir().'/'.$this->pathArticle;
    }

    public function getWebPath()
    {
        return null === $this->pathArticle
            ? null
            : $this->getUploadDir().'/'.$this->pathArticle;
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
        return 'uploads/joueurs';
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
    $this->pathArticle = $this->getFile()->getClientOriginalName();

    // clean up the file property as you won't need it anymore
    $this->file = null;
    }
    

}
