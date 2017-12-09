<?php

namespace Squad\FttBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_9B80EC6492FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_9B80EC64A0D96FBF", columns={"email_canonical"})})
 * @ORM\Entity(repositoryClass="Squad\FttBundle\Entity\UtilisateurRepository")
 */
class Utilisateur {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=255, nullable=false)
     */
    private $usernameCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=255, nullable=false)
     */
    private $emailCanonical;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=false)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=true)
     */
    private $locked;

    /**
     * @var boolean
     *
     * @ORM\Column(name="expired", type="boolean", nullable=true)
     */
    private $expired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    private $expiresAt;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_token", type="string", length=255, nullable=true)
     */
    private $confirmationToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    private $passwordRequestedAt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array", nullable=false)
     */
    private $roles;

    /**
     * @var boolean
     *
     * @ORM\Column(name="credentials_expired", type="boolean", nullable=true)
     */
    private $credentialsExpired;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="credentials_expire_at", type="datetime", nullable=true)
     */
    private $credentialsExpireAt;

    /**
     * @var float
     *
     * @ORM\Column(name="cin_user", type="float", precision=10, scale=0, nullable=true)
     */
    private $cinUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_naissance", type="date", nullable=true)
     */
    private $dateDeNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="nationaliter", type="string", length=45, nullable=true)
     */
    private $nationaliter;

    /**
     * @var float
     *
     * @ORM\Column(name="tel", type="float", precision=10, scale=0, nullable=true)
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
     * @ORM\Column(name="role", type="string", length=45, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="type_arbitre", type="string", length=255, nullable=true)
     */
    private $typeArbitre;

    function getId() {
        return $this->id;
    }

    function getIdUser() {
        return $this->id;
    }

    function getUsername() {
        return $this->username;
    }

    function getUsernameCanonical() {
        return $this->usernameCanonical;
    }

    function getEmail() {
        return $this->email;
    }

    function getEmailCanonical() {
        return $this->emailCanonical;
    }

    function getEnabled() {
        return $this->enabled;
    }

    function getSalt() {
        return $this->salt;
    }

    function getPassword() {
        return $this->password;
    }

    function getLastLogin() {
        return $this->lastLogin;
    }

    function getLocked() {
        return $this->locked;
    }

    function getExpired() {
        return $this->expired;
    }

    function getExpiresAt() {
        return $this->expiresAt;
    }

    function getConfirmationToken() {
        return $this->confirmationToken;
    }

    function getPasswordRequestedAt() {
        return $this->passwordRequestedAt;
    }

    function getRoles() {
        return $this->roles;
    }

    function getCredentialsExpired() {
        return $this->credentialsExpired;
    }

    function getCredentialsExpireAt() {
        return $this->credentialsExpireAt;
    }

    function getCinUser() {
        return $this->cinUser;
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

    function getNationaliter() {
        return $this->nationaliter;
    }

    function getTel() {
        return $this->tel;
    }

    function getGradeArbitre() {
        return $this->gradeArbitre;
    }

    function getRole() {
        return $this->role;
    }

    function getTypeArbitre() {
        return $this->typeArbitre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setUsernameCanonical($usernameCanonical) {
        $this->usernameCanonical = $usernameCanonical;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setEmailCanonical($emailCanonical) {
        $this->emailCanonical = $emailCanonical;
    }

    function setEnabled($enabled) {
        $this->enabled = $enabled;
    }

    function setSalt($salt) {
        $this->salt = $salt;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setLastLogin(\DateTime $lastLogin) {
        $this->lastLogin = $lastLogin;
    }

    function setLocked($locked) {
        $this->locked = $locked;
    }

    function setExpired($expired) {
        $this->expired = $expired;
    }

    function setExpiresAt(\DateTime $expiresAt) {
        $this->expiresAt = $expiresAt;
    }

    function setConfirmationToken($confirmationToken) {
        $this->confirmationToken = $confirmationToken;
    }

    function setPasswordRequestedAt(\DateTime $passwordRequestedAt) {
        $this->passwordRequestedAt = $passwordRequestedAt;
    }

    function setRoles($roles) {
        $this->roles = $roles;
    }

    function setCredentialsExpired($credentialsExpired) {
        $this->credentialsExpired = $credentialsExpired;
    }

    function setCredentialsExpireAt(\DateTime $credentialsExpireAt) {
        $this->credentialsExpireAt = $credentialsExpireAt;
    }

    function setCinUser($cinUser) {
        $this->cinUser = $cinUser;
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

    function setNationaliter($nationaliter) {
        $this->nationaliter = $nationaliter;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }

    function setGradeArbitre($gradeArbitre) {
        $this->gradeArbitre = $gradeArbitre;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function setTypeArbitre($typeArbitre) {
        $this->typeArbitre = $typeArbitre;
    }

    public function __toString() {
        $s =  $this->nom. " " . $this->prenom;
        return $s;
    }

}
