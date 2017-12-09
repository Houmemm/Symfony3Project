<?php
require_once('connect.php');

$login=$_GET['login'];
$pwd=$_GET['motDePasse'];


$sql = "SELECT * FROM Utilisateur where username LIKE'".$login."' ";
$result = $conn->query($sql);
if( $result->num_rows > 0)
{   
while ($row = $result->fetch_assoc())
{
 if (password_verify($pwd, $row['password'])) {
 echo $row['id'];
} else {
    echo 'invalide';
} 
}
}
else  {
echo "invalide";
}