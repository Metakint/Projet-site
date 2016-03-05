<?php 
session_start();
$title_page = "Contact";
require_once($_SERVER['DOCUMENT_ROOT']."site/includes/header.php");
 ?>
            <!--==============================content================================-->
            <section id="content"><div class="ic">Site de Vincent Glaunec 2015-2016</div>
                <div class="main">
                    <div class="container_12">
                        <div class="container-bot">
                            <div class="container-top">
                                <div class="container">
                                    <div class="wrapper">
                                        <article class="grid_8">
                                            <div class="indent-left">
                                                <h3 class="p1">Nous Contacter</h3>
                                                <form id="contact-form" method="post" enctype="multipart/form-data">                    
                                                    <fieldset>
                                                          <label><span class="text-form">Nom :</span><input name="name" type="text" /></label>
                                                          <label><span class="text-form">Email:</span><input name="email" type="text" /></label>                              
                                                          <label><span class="text-form">Tel:</span><input name="phone" type="text" /></label>                              
                                                          <div class="wrapper">
                                                            <div class="text-form">Message:</div>
                                                            <div class="extra-wrap">
                                                                <textarea></textarea>
                                                                <div class="clear"></div>
                                                                <div class="buttons">
                                                                    <a class="button" href="#" onClick="document.getElementById('contact-form').reset()">Effacer</a>
                                                                    <a class="button" href="#" onClick="document.getElementById('contact-form').submit()">Envoyer</a>
                                                                </div> 
                                                            </div>
                                                          </div>                            
                                                    </fieldset>						
                                                </form>
                                            </div>
                                        </article>
                                        <article class="grid_4">
                                            <div class="indent-left2 indent-top">
                                                <figure class="indent-bot">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d85390.77670692408!2d-1.816972327420548!3d48.02410747808673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480f1ef41e202f2f%3A0x2a06b2d8d5593a6b!2sBruz!5e0!3m2!1sfr!2sfr!4v1451992140457" width="260" height="202" frameborder="0" style="border:0" allowfullscreen></iframe>
                                                </figure>
                                                <div class="indent-left">
                                                    <dl class="main-address">
                                                        <dt>5 rue du Carré vert,<br> Bruz.</dt>
                                                        <dd><span>Telephone:</span>  +336 04 50 82 14;</dd>
                                                        <dd><span>E-mail:</span><a href="#">vincent.glaunec@outlook.fr</a></dd>
                                                    </dl>
                                                </div>
                                            </div>
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