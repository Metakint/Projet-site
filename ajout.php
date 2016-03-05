<?php 
session_start(); 
  $title_page = "Ajout";
  require_once($_SERVER['DOCUMENT_ROOT']."site/includes/header.php"); 
?>

<section id="content"><div class="ic">Site par vincent glaunec 2015-2016</div>
                <div class="main">
                    <div class="container_12">
                        <div class="container-bot">
                            <div class="container-top">
                                <div class="container">
                                    <div class="wrapper">
                                        <article class="grid_8">
                                            <div class="indent-left">
                                                <h3 class="prev-indent-bot">Formulaire d'ajout</h3>

<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'site/library/db.php');

$db = DB::getInstance();

$query = "SET NAMES utf8";
$result = $db->get($query);

if (isset($_POST['supprimer']) && isset($_POST['id_carte']))
{
	$queryDelete = "DELETE FROM carte WHERE id_carte='$id_carte";
	$result = $db->get($queryDelete);
		if(!$result) echo "échec de la suppression : $query<br>" .
	$db->error . "<br><br>";

}

if (isset($_POST['nom'])		 &&
	isset($_POST['vie']) 		 &&
	isset($_POST['attaque']) 	 &&
	isset($_POST['effet']) 		 &&
	isset($_POST['id_mana'])  	 &&
	isset($_POST['id_carte']))

{
	$nom   = get_post($db, 'nom');
	$vie   = get_post($db, 'vie');
	$attaque   = get_post($db, 'attaque');
	$effet   = get_post($db, 'effet');
	$id_mana   = get_post($db, 'id_mana');
	$id_carte   = get_post($db, 'id_carte');
	$queryInsert = "INSERT INTO carte VALUES" .
		"('$nom','$vie','$attaque','$effet','$id_mana','$id_carte')";
	$result = $db->get($queryInsert);

	if (!$result) echo "échec de l'insertion : $query<br>" .
	$db->error . "<br><br>";
}

echo <<<_END
<form action="" method="post"><pre>
	nom <input type="text" name"nom">
	vie <input type="text" name"vie">
	attaque <input type="text" name"attaque">
	effet <input type="text" name"effet">
	id_mana <input type="text" name"id_mana">
	id_carte <input type="text" name"id_carte">
		<input type="submit" value="AJOUTER CARTE">
</pre></form>
_END;

$querySelect = "SELECT * FROM carte;";
$result = $db->getAll($querySelect);
if (!$result) die ("échec de l'accès à la base de données : " . $db->error);

foreach ($result as $carte) {
	echo <<<_END
	<pre>
	nom $carte[1]
	vie $carte[3]
	attaque $carte[4]
	effet $carte[2]
	id_mana $carte[5]
	id_carte $carte[0]

	<pre>
	<form action="" method="post">
	<input type="submit" name="supprimer" value="Supprimer">
	<input type="hidden" name="id_carte" value="$carte[0]">
	</form>
	
_END;
}


?>

