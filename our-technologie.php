<?php

/*
     *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
     *  Puis on insère les élements redondants footer nav et header 
     */

$js = "";
$css = "./css/main.css";
$titre = "SoleCooler - Notre technologie";
$bodyId = "techno";
require_once("./inc/head.php");
require_once("./inc/header.php");
?>


<main>
     <div class="container space-arround-m">
          <h1>Notre technologie</h1>

          <!-- Cover -->
          <div class="cover">
               <figure>
                    <img src="./assets/img/technologie/climfeet-solecooler-travailleurs.jpg" alt="Climfeet pour les travailleurs">
                    <figcaption>Pour les travailleurs</figcaption>
               </figure>
               <figure>
                    <img src="./assets/img/technologie/climfeet-solecooler-sports.jpg" alt="Climfeet pour les sportifs" style="object-position: 75%;">
                    <figcaption>Pour les sportifs</figcaption>
               </figure>
               <figure>
                    <img src="./assets/img/technologie/climfeet-solecooler-randonnee.jpg" alt="Climfeet pour les randonneurs">
                    <figcaption>Pour les randonneurs</figcaption>
               </figure>
               <figure>
                    <img src="./assets/img/technologie/climfeet-solecooler-animaux.jpg" alt="Climfeet pour les animaux">
                    <figcaption>Pour les animaux</figcaption>
               </figure>
          </div>
          <!-- End Cover -->


          <div class="content">
               <div class="summary">
                    <ul>
                         <li><a href="#pour-qui">Pour qui ?</a></li>
                         <li><a href="#thermodynamique">Thermodynamique</a></li>
                         <li><a href="#les-alveoles">Les alvéoles</a></li>
                         <li><a href="#chaud-froid">Chaud & Froid</a></li>

                         <svg id="active" xmlns="http://www.w3.org/2000/svg" width="43" height="73" viewBox="0 0 43 73" fill="none">
                              <rect width="43" height="73" fill="#F6FAFE" />
                              <path d="M28.4286 36.4286C28.4286 16.3096 14.5014 20.3571 14.5 0" stroke="black" stroke-width="2" />
                              <path d="M14.5 73C14.5 52.5655 28.4987 56.6765 28.5 36" stroke="black" stroke-width="2" />
                              <circle cx="31" cy="36.416" r="12" fill="#3D79B1" />
                         </svg>
                    </ul>
               </div>

               <div class="body">
                    <div id="pour-qui">
                         <h2>Pour qui ?</h2>

                         <p>
                              Les sportifs professionnels ou amateurs, les travailleurs dans les entrepôts frigorifiques, du bâtiment & travaux publics mais aussi les militaires ou les pompiers ainsi que les animaux sont souvent exposés à des conditions extrêmes pendant toute la journée, voire plus. Les pieds sont les parties les plus exposées au froid ou au chaud car en contact direct avec le sol. Mettre des CLIMFEET dans vos chaussures va vous permettre de mieux réguler leur température.Seul un dispositif de thermorégulation n'utilisant que l'énergie de vos propres pas peut vous aider à conserver vos pieds au chaud ou au frais sans limite de temps (tant que vous marchez ou courez).
                         </p>
                    </div>

                    <div id="thermodynamique">
                         <h2>Thermodynamique</h2>

                         <p>
                              Le principe retenu par le brevet SoleCooler repose sur la thermodynamique et notamment sur le cycle de Carnot comme dans un climatiseur mais avec de l'air comme fluide car plus écologique même si le rendement sera moins bon.
                         </p>

                         <h3>Compression/détente</h3>
                         <p>
                              L'air est tout d'abord comprimé.Lors de la compression, l'air s'échauffe naturellement (c'est un peu comme l'échauffement que vous observez avec votre pompe à vélo).Une fois comprimé, l'air est détendu au travers de la tuyère et refroidit naturellement (comme lorsque que vous dégonflez votre pneu de voiture: l'air qui sort est beaucoup plus froid alors que le pneu est chaud).
                         </p>
                         <div>
                              <img src="./assets/img/technologie/solecooler-compression-detente.jpg" alt="Compression et détente">
                              <img src="./assets/img/technologie/solecooler-compression-detente-1.jpg" alt="Compression et détente">
                         </div>

                         <h3>Tuyère convergente/divergente</h3>
                         <p>
                              Pour reproduire ces phénomènes dans une semelle, nous avons imaginé et breveté un nouveau procédé qui utilise la pression du pied sur le sol à la place d'un compresseur:Des alvéoles fermées qui comprennent deux parties réalisées dans 2 matériaux différents et reliées par une tuyère parfaitement calibrée (à l'image d'une tuyère de fusée).Une partie est très souple et va permettre grâce à la pression du pied, de comprimer l'air occlus dans la deuxième partie qui est moins souple.Une fois que le pied se relève, l'air comprimé va revenir dans la partie plus souple au travers de la tuyère et donc naturellement refroidir.
                         </p>
                         <div>
                              <img src="./assets/img/technologie/Tuyère convergente-divergente.jpg" alt="Tuyère convergente/divergente">
                              <img src="./assets/img/technologie/Tuyère convergente-divergente-1.jpg" alt="Tuyère convergente/divergente">
                              <img src="./assets/img/technologie/Tuyère convergente-divergente-2.jpg" alt="Tuyère convergente/divergente">
                         </div>
                    </div>

                    <div id="les-alveoles">
                         <h2>Les alvéoles</h2>

                         <p style="margin-bottom: unset;">
                              Lorsque l'on coupe les alvéoles on peut voir leur structure :
                         </p>
                         <ul style="margin-bottom: 24px;">
                              <li>des alvéoles compressibles</li>
                              <li>des alvéoles peu compressibles (avec des renforts)</li>
                              <li>une séparation entre les 2 types d'alvéoles, avec des tuyères pour la compression/détente de l'air</li>
                         </ul>
                         <div>
                              <img src="./assets/img/technologie/Les alvéoles.png" alt="Les alvéoles" style="width: 100%">
                         </div>

                         <h3>Fonctionnement de la technologie de nos alvéoles</h3>
                         <ol>
                              <li>
                                   <div>Compression des alvéoles</div>
                                   <img src="./assets/img/technologie/Compression_of_alveolus.gif" alt="Compress des alvéoles">
                              </li>
                              <li>
                                   <div>Test et modélisation</div>
                                   <img src="./assets/img/technologie/20°C_good_challenge_to_keep_warm_your_feet.gif" alt="Test et modélisation">

                                   <p>
                                        Température extérieure : -20 ° C, un bon défi pour se réchauffer les pieds
                                        Voici une simulation CFD montrant les températures obtenues dans une alvéole de nos semelles grâce à la compression/détente lors de la pose répétée du pied.
                                   </p>

                                   <p>
                                        Voici les températures obtenues dans les alvéoles de nos semelles thermo-régulées par la seule pression des pieds. Sans batterie ni produits chimiques et donc sans empreinte carbone!Tout cela n'aurait pas été possible sans l'aide du programme Start Up d'Ansys , merci.
                                   </p>
                              </li>

                              <li>
                                   Répartition de l’air et de la chaleur dans l’alvéole
                                   <div>
                                        <img src="./assets/img/technologie/turbquartiervelocity040220.gif" alt="Répartition de l’air et de la chaleur dans l’alvéole">
                                        <img src="./assets/img/technologie/flux1.gif" alt="Répartition de l’air et de la chaleur dans l’alvéole">
                                   </div>
                              </li>
                         </ol>
                    </div>


                    <div id="chaud-froid">
                         <h2>Chaud & Froid</h2>

                         <img src="./assets/img/technologie/solecooler-chaud-froid.jpg" alt="Chaud & Froid">

                         <p>
                              Notre technologie fonctionne sur le même principe qu’un climatiseur. Sauf que vos pas sont les compresseurs !
                         </p>
                    </div>


               </div>
          </div>
     </div>
</main>


<?php
require_once("./inc/footer.php");
?>