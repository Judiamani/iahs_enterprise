<?php
session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
    // connexion à la base de données
    $db_username = 'iahsconnect';
    $db_password = 'iahsconnect@727';
    $db_name     = 'iahs';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');
    
    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));
    
    if($email !== "" && $password !== "")
    {
        $requete = "SELECT count(*) FROM users where 
              email = '".$email."' and password = '".$password."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse      = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        if($count!=0) // nom d'utilisateur et mot de passe correctes
        {
           $_SESSION['email'] = $email;
           header("Location: index1.php");
        }
        else
        {
           header('Location: login.php?p=index.php'); // utilisateur ou mot de passe incorrect
        }
    }
    else
    {
       header('Location: login.php?p=index.php'); // utilisateur ou mot de passe vide
    }
}
else
{
   header('Location: index.php');
}
mysqli_close($db); // fermer la connexion

//Class Auth
class Auth{
  function login($d){
    global $PDO;
    $req = $PDO->prepare('SELECT users.email,users.name,users.role,users.stat,roles.name,roles.slug,roles.level FROM users LEFT JOIN roles ON users.id=roles.id_role WHERE email=:email AND password=:password');
    $req = $req->execute($d);
    $data = $req->fetchAll();
    if(count($data)>0){
      $_SESSION['Auth'] = $data[0];
      return true;
    }
    return false;
  }
}
$Auth = new Auth();
?>