<?php
require_once('connect.php');

$username=$_GET['username'];
$email=$_GET['email'];
$enabled=$_GET['enabled'];
$salt=$_GET['salt'];
$password=$_GET['password'];
$cin_user=$_GET['cin_user'];
$nom=$_GET['nom'];
$prenom=$_GET['prenom'];
$date_de_naissance=$_GET['date_de_naissance'];
$nationaliter=$_GET['nationaliter'];
$tel=$_GET['tel'];
$grade_arbitre=$_GET['grade_arbitre'];
$role=$_GET['role'];
$type_arbitre=$_GET['type_arbitre'];

if($role=="fan"){
	$role="a:1:{i:0;s:8:".'"'."ROLE_FAN".'"'.";}   "    ;
}
  if($role=="Administrateur")
{$role="a:1:{i:0;s:10:".'"'."ROLE_ADMIN".'"'.";}   "    ;
}
if($role=="Arbitre")
{$role="a:1:{i:0;s:12:".'"'."ROLE_ARBITRE".'"'.";}   "    ;
}
  if ($role =="Respondable")
{$role="a:1:{i:0;s:16:".'"'."ROLE_RESPONSABLE".'"'.";}   "    ;
} 
if ($role =="Medecin") 
{ 
$role="a:1:{i:0;s:12:".'"'."ROLE_MEDECIN".'"'.";}   " ;
}

$salt="sdc0f2d6vy8wgg0o44cg48848440cgk";

$bcrypt = new Bcrypt(15);

$hash = $bcrypt->hash($password);

$sql = "INSERT INTO Utilisateur (username,username_canonical,email,email_canonical,enabled,salt,password,cin_user,nom,prenom,date_de_naissance,nationaliter,tel,grade_arbitre,roles,type_arbitre)
VALUES ( '$username','$username','$email','$email',1,'$salt','$hash','$cin_user','$nom','$prenom','$date_de_naissance','$nationaliter','$tel','$grade_arbitre','$role','$type_arbitre')"; 
if (mysqli_query($conn, $sql)) {
    echo "successfully added" ;
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);












class Bcrypt{
  private $rounds;
  public function __construct($rounds = 12) {
    if(CRYPT_BLOWFISH != 1) {
      throw new Exception("bcrypt not supported in this installation. See http://php.net/crypt");
    }

    $this->rounds = $rounds;
  }

  public function hash($input) {
    $hash = crypt($input, $this->getSalt());

    if(strlen($hash) > 13)
      return $hash;

    return false;
  }

  public function verify($input, $existingHash) {
    $hash = crypt($input, $existingHash);

    return $hash === $existingHash;
  }

  private function getSalt() {
    $salt = sprintf('$2a$%02d$', $this->rounds);

    $bytes = $this->getRandomBytes(16);

    $salt .= $this->encodeBytes($bytes);

    return $salt;
  }

  private $randomState;
  private function getRandomBytes($count) {
    $bytes = '';

    if(function_exists('openssl_random_pseudo_bytes') &&
        (strtoupper(substr(PHP_OS, 0, 3)) !== 'WIN')) { // OpenSSL is slow on Windows
      $bytes = openssl_random_pseudo_bytes($count);
    }

    if($bytes === '' && is_readable('/dev/urandom') &&
       ($hRand = @fopen('/dev/urandom', 'rb')) !== FALSE) {
      $bytes = fread($hRand, $count);
      fclose($hRand);
    }

    if(strlen($bytes) < $count) {
      $bytes = '';

      if($this->randomState === null) {
        $this->randomState = microtime();
        if(function_exists('getmypid')) {
          $this->randomState .= getmypid();
        }
      }

      for($i = 0; $i < $count; $i += 16) {
        $this->randomState = md5(microtime() . $this->randomState);

        if (PHP_VERSION >= '5') {
          $bytes .= md5($this->randomState, true);
        } else {
          $bytes .= pack('H*', md5($this->randomState));
        }
      }

      $bytes = substr($bytes, 0, $count);
    }

    return $bytes;
  }

  private function encodeBytes($input) {
    // The following is code from the PHP Password Hashing Framework
    $itoa64 = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    $output = '';
    $i = 0;
    do {
      $c1 = ord($input[$i++]);
      $output .= $itoa64[$c1 >> 2];
      $c1 = ($c1 & 0x03) << 4;
      if ($i >= 16) {
        $output .= $itoa64[$c1];
        break;
      }

      $c2 = ord($input[$i++]);
      $c1 |= $c2 >> 4;
      $output .= $itoa64[$c1];
      $c1 = ($c2 & 0x0f) << 2;

      $c2 = ord($input[$i++]);
      $c1 |= $c2 >> 6;
      $output .= $itoa64[$c1];
      $output .= $itoa64[$c2 & 0x3f];
    } while (1);

    return $output;
  }
}









/*
$sql = "INSERT INTO fos_user (username,username_canonical,nom, prenom,adresse,mail,login,motDePasse,nbPoint,statut)
VALUES ( '$login','$login','','$nom','$prenom','$adresse','$mail','$login','$motDePasse','$nbpoint','Particulier')";

if (mysqli_query($conn, $sql)) {
    echo "successfully added" ;
} else {
    echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
*/