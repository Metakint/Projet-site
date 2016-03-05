<?php 
session_start();
$title_page = "Inscription";
require_once($_SERVER['DOCUMENT_ROOT']."site/includes/header.php");
 ?>
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

                                               <form method="post" action="">

                                              <legend>S'inscrire sur le site</legend>

                                              <div class="form-group">
                                                <label class="col-lg-2 control-label">Login</label>
                                                <div class="col-lg-10">
                                                  <input type="text" class="form-control" name="login" placeholder="Login">
                                                </div>
                                              </div><br/><br/><br/>

                                              <div class="form-group">
                                                <label class="col-lg-2 control-label">Mot de passe</label>
                                                <div class="col-lg-10">
                                                  <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                                                </div>
                                              </div>
                                            <br/><br/><center><button type="submit" name="submit" class="btn btn-primary">S'Inscrire</button></center>

                                            </form>
                                            </div>

                                            <?php require_once($_SERVER['DOCUMENT_ROOT'].'site/includes/register.php'); ?>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            
            <!--==============================footer=================================-->
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'site/includes/footer.php'); ?>