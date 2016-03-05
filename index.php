<?php 
  session_start();
  $title_page = "Accueil";
  require_once($_SERVER['DOCUMENT_ROOT']."site/includes/header.php"); 
?>
                    <div id="slider">
                    <!-- La banderolle qui contiens toute les images -->
                      <div id="mask">
                        <ul id="image_container">
                          <li><img class="redimention" src="images/hs/slider1.jpg"></li>
                          <li><img class="redimention" src="images/hs/slider2.jpg"></li>
                          <li><img class="redimention" src="images/hs/slider3.jpg"></li>
                          <li><img class="redimention" src="images/hs/slider4.jpg"></li>
                        </ul>
                      </div>
                      <img src="resources/glass.png" id="glass">
                      <!-- l'encart bleu. Quoter s'il est genant --><!--
                      <div id="encart">
                        <img src="resources/bouton.png" id="bouton">
                      </div>-->
                      <!-- fin de l'encart -->
                      <!-- Les fleches de navigations -->
                      <ul id="dots">
                        <!-- les petits points qui affichent ou nous en somme sur le slide -->
                          <li class="button1" onClick="changeImage(1)" ></li>
                          <li class="button2" onClick="changeImage(2)" ></li>
                          <li class="button3" onClick="changeImage(3)" ></li>
                          <li class="button4" onClick="changeImage(4)" ></li>
                      </ul>
                      <img src="resources/fleche-gauche.png" id="fleche_gauche" class="fleche" onClick="prevImage()" >
                      <img src="resources/fleche-droite.png" id="fleche_droite" class="fleche" onClick="nextImage()" >
                    </div>
                </div>
                <script>
                  // Des Variables pour pouvoir modifier facilement ce qui doit l'être
                  var secDuration = 5;
                  var image = 1;
                  var maxImages = 4;
                  var slider = document.getElementById('slider');
                  var timeout
                  
                  // La fonction qui change les images. Peut pointer vers une image spécifique, ou bien être appelée vide, pour passer ç celle d'apres
                  function changeImage(requiredImage) {
                  
                    // Début de l'algorithme  .
                    if (!requiredImage && requiredImage != 0){ //Si nous n'avons pas spécifié une image
                      if(image < maxImages){// Si l'image n'est pas la dernière, on avance d'une image
                        image++;
                      }
                      else{
                        image = 1;//Si Nous sommes sur la dernière, on reviens au début 
                      }
                    }
                    else{ // Si nous avont spécifié une image
                      if(requiredImage > maxImages){//Si nous avont spécifié une image au dela de la dernière, on revient à la première
                        image = 1;
                      }
                      else if(requiredImage < 1){ //Si nous avont spécifié une image 0 ou moins, on vas à la dernière image
                        image = maxImages;
                      }
                      else{
                        image = requiredImage; // Sinon, on vas à l'image spécifiée.
                      }
                    }
                    //On dis au slider à travers sa classe quel image il doit afficher
                    slider.className = "image"+image;
                    
                    // On nettoie et relance le timeout
                    clearTimeout(timeout)
                    timeout = setTimeout("changeImage()",secDuration*1000);
                  }
                  
                  //Deux petites fonctions tres compréhensibles
                  function nextImage(){
                    changeImage(image+1);
                  }
                  function prevImage(){
                    changeImage(image-1);
                  }
                  
                  //On met le slide sur l'image par défaut, ici la 1ere
                  changeImage(1);
                </script>
            </header>
            
            <!--==============================content================================-->
            <section id="content"><div class="ic">Site par vincent glaunec 2015-2016</div>
                <div class="main">
                    <div class="container_12">
                        <div class="container-bot">
                            <div class="container-top">
                                <div class="container">
                                    <div class="wrapper">
                                        <article class="grid_8">
                                            <div class="indent-left">
                                                <h2>Bienvenue</h2>
                                                <p class="prev-indent-bot"><strong>Hearthstone shop</strong> 
                                                    Premier site de vente de carte légendaire hearthstone
                                                </p>
                                                <p class="border-bot">Nous sommes spécialiste en carte légendaire Hearthstone nous pouvons fournir a tout les joueur qu'il soit débutant ou vétéran des carte qui prouverons votre supérieurité</p>
                                            </div>
                                            <div class="wrapper">
                                                <div class="grid_4 alpha">
                                                    <div class="indent-left">
                                                        <div class="maxheight indent-bot">
                                                            <h3>Les News</h3>
                                                                    <div class="col-xs-6 col-md-3 col-sm-6">
                                                                      <div class="carte">
                                                                        <div class="carte__transform">
                                                                          <img src="images/hs/ailedemort.jpg" width="140" height="200" alt="ailedemort">
                                                                        </div>
                                                                      </div>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="grid_4">
                                          <div class="col-xs-6 col-md-9 col-sm-4">
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
            
<?php  require_once($_SERVER['DOCUMENT_ROOT']."site/includes/footer.php"); ?>