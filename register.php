<?php
//Connexion à la BDD
  try
  {
  
   $bdd = new PDO ('mysql:host=localhost;dbname=hearthstone', 'root', '');
  
  }
  
  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }
  
    if(ISSET($_POST['submit']))
{


//On créer les variables
$login =   htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);
$password = hash("sha256", $password);




$req = $bdd->prepare('INSERT INTO membre(login, password) VALUES (:login, :password)');


$req->execute(array("login" => $login, "password" => $password));


if(!empty($login) && !empty($password))
{

}else{
?>


<b>Pseudo ou MDP vide !</b>


<?php
}


if(empty($login) && empty($password))
{


}else{



$_SESSION['login'] = $_POST['login'];
header('Location: site/special.php');


}


}
   
   ?>