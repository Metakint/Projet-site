<!DOCTYPE html>
<html lang="fr">
<head>
    <title>HearthStone - <?= $title_page; ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/Vegur_500.font.js" type="text/javascript"></script> 
    <script src="js/FF-cash.js" type="text/javascript"></script>      
    <script src="js/tms-0.3.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.equalheights.js" type="text/javascript"></script>
    <script src"sweetalert-master/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">    
    </head>
<body>
	<div class="main-bg">
        <div class="bg">
            <!--==============================header=================================-->
            <header>
                <div class="main">
                    <div class="wrapper">
                        <img src="images/hs/logo.jpg">
                        <div class="fright">
                            <div class="indent">
                                <span class="address">5 rue du carré vert</span>
                                <span class="phone">Tel: +33 (0)6 04 50 82 14</span>
                            </div>
                        </div>
                    </div>
                    <nav>
                        <ul class="menu" class="col-xs-12">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="acceuil.php">Présentation</a></li>
                            <li><a href="carte.php">Carte</a></li>
                            <li><a href="locations.php">Contact</a></li>
                            <li><a href="ajout.php">Ajout</a></li>
                            <?php if(!empty($_SESSION['login']) && !empty($_SESSION['password'])){
                                ?>
                                <li><a <?php if($title_page == "Special") { echo "class=\'active\'";} ?> href="includes/logout.php">Deconnexion</a></li>
                                <?php  
                            }else{
                                ?>
                                <li><a <?php if($title_page == "Special") { echo "class=\'active\'";} ?> href="special.php">Connexion</a></li>
                                <?php  
                            }
                            ?>

                            
                            
                            <li><a href="insrcription.php">Inscription</a></li>
                        </ul>
                    </nav>
                </div>
            </header>