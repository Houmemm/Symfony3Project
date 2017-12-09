<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Joueur
 *
 * @ORM\Table(name="joueur", indexes={@ORM\Index(name="fk_Joueur_Club1_idx", columns={"Club_id_Club"})})
 * @ORM\Entity(repositoryClass="Squad\FttBundle\Entity\JoueurRepository")
 * 
 */
class Joueur {

    /**
     * @var float
     *
     * @ORM\Column(name="cin_Joueur", type="float", precision=10, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $cinJoueur;

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
     * @ORM\Column(name="categorie", type="string", length=45, nullable=false)
     */
    private $categorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="point_aquis", type="integer", nullable=false)
     */
    private $pointAquis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Taille", type="integer", nullable=false)
     */
    private $taille;

    /**
     * @var integer
     *
     * @ORM\Column(name="poids", type="integer", nullable=false)
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="main_forte", type="string", length=45, nullable=false)
     */
    private $mainForte;

    /**
     * @var string
     *
     * @ORM\Column(name="nationaliter_joueur", type="string", length=45, nullable=false)
     */
    private $nationaliterJoueur;

    /**
     * @var string
     *
     * @ORM\Column(name="img_joueur_path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
     * @var \Club
     *
     * @ORM\ManyToOne(targetEntity="Club")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Club_id_Club", referencedColumnName="id_Club")
     * })
     */
    private $clubClub;

    function getCinJoueur() {
        return $this->cinJoueur;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getDateDeNaissance() {
        return $this->dateDeNaissance;
    }

    function getCategorie() {
        return $this->categorie;
    }

    function getPointAquis() {
        return $this->pointAquis;
    }

    function getTaille() {
        return $this->taille;
    }

    function getPoids() {
        return $this->poids;
    }

    function getMainForte() {
        return $this->mainForte;
    }

    function getNationaliterJoueur() {
        return $this->nationaliterJoueur;
    }

    function getPath() {
        return $this->path;
    }

    function getClubClub() {
        return $this->clubClub;
    }

    function setCinJoueur($cinJoueur) {
        $this->cinJoueur = $cinJoueur;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setDateDeNaissance(\DateTime $dateDeNaissance) {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    function setPointAquis($pointAquis) {
        $this->pointAquis = $pointAquis;
    }

    function setTaille($taille) {
        $this->taille = $taille;
    }

    function setPoids($poids) {
        $this->poids = $poids;
    }

    function setMainForte($mainForte) {
        $this->mainForte = $mainForte;
    }

    function setNationaliterJoueur($nationaliterJoueur) {
        $this->nationaliterJoueur = $nationaliterJoueur;
    }

    function setPath($path) {
        $this->path = $path;
    }

    function setClubClub($clubClub) {
        $this->clubClub = $clubClub;
    }

    private $file;

    /**
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null) {
        $this->file = $file;
    }

    /**
     * Get file.
     *
     * @return UploadedFile
     */
    public function getFile() {
        return $this->file;
    }

    public function getAbsolutePath() {
        return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
    }

    public function getWebPath() {
        return null === $this->path ? null : $this->getUploadDir() . '/' . $this->path;
    }

    protected function getUploadRootDir() {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        return 'uploads/joueurs';
    }

    public function upload() {
        // the file property can be empty if the field is not required
        if (null === $this->getFile()) {
            return;
        }

        // use the original file name here but you should
        // sanitize it at least to avoid any security issues
        // move takes the target directory and then the
        // target filename to move to
        $this->getFile()->move(
                $this->getUploadRootDir(), $this->getFile()->getClientOriginalName()
        );

        // set the path property to the filename where you've saved the file
        $this->path = $this->getFile()->getClientOriginalName();

        // clean up the file property as you won't need it anymore
        $this->file = null;
    }

    public function __toString() {
        if (isset($this->nom) && isset($this->prenom)) {
            return $this->nom . " " . $this->prenom;
        }
        return null;
    }

}
