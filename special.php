<?php 
session_start();
$bdd = new PDO ('mysql:host=localhost;dbname=hearthstone', 'root', '');
if(!empty($_POST['password']) && !empty($_POST['login'])){
	$login = htmlspecialchars($_POST['login']);
	$password = htmlspecialchars($_POST['password']);
	$users = $bdd->query('SELECT * FROM membre');
	while($list_users = $users->fetch()){
		if($list_users['login'] == $login && hash("sha256", $password) == $list_users['password']){
			$_SESSION['login'] = $login;
    		$_SESSION['password'] = $password;
		}
	}
     
    
}

$title_page = "Connect";
require_once($_SERVER['DOCUMENT_ROOT'].'site/includes/header.php'); ?>         
<!--==============================content================================-->
<section id="content"><div class="ic">Site par vincent glaunec 2015-2016</div>
    <div class="main">
        <div class="container_12">
            <div class="container-bot">
                <div class="container-top">
                    <div class="container">
                        <div class="wrapper">
                            <article class="grid_4">
                                <div class="indent-left">
                                    <form method="post">

                                    <legend>Connexion</legend>

                                    <div class="form-group">
                                        <label for="login" class="col-lg-2 control-label">Login</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" name="login" id="id" placeholder="Login">
                                    </div>
                                    <br></br>

                                    <div class="form-group">
                                      <label class="col-lg-2 control-label" for="password">Mot de passe</label>
                                      <div class="col-lg-10">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
                                      </div>
                                    </div>

                                <br/><br/><input type="submit" value="connexion" swal("Bonjour!", "connexion", "connexion est un succes")>
                                </form>

                                
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            
<?php require_once($_SERVER['DOCUMENT_ROOT'].'site/includes/footer.php'); ?>