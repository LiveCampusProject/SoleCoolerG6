<?php

/*
     *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
     *  Puis on insère les élements redondants footer nav et header 
     */

$js = "";
$css = "./css/main.css";
$titre = "SoleCooler";
$bodyId = "index";
require_once("./inc/head.php");
require_once("./inc/header.php");
// require_once("./inc/nav.php");
require_once("./inc/footer.php");

?>

<main>
  <div id="hero">
    <div class="corner-top">
      <svg xmlns="http://www.w3.org/2000/svg" width="1132" height="396" viewBox="0 0 1132 396" fill="none">
        <path opacity="0.15" d="M2.09094 332.678C2.09094 310.109 0.996675 0.808113 0.996675 0.808113L1131.05 0.307892C1000.04 17.8831 697.562 86.9884 535.653 209.327C373.745 331.666 87.4296 332.678 2.09094 332.678Z" fill="url(#paint0_radial_194_4876)" />
        <path opacity="0.65" d="M1.31799 395.337C1.31799 368.218 1.27572 0.84571 1.27572 0.84571L1126.29 0.00109863C995.749 21.12 694.325 100.109 532.99 247.115C371.655 394.121 86.3544 395.337 1.31799 395.337Z" fill="url(#paint1_radial_194_4876)" />
        <defs>
          <radialGradient id="paint0_radial_194_4876" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1024.55 66.5878) rotate(65.6349) scale(330.87 1068.82)">
            <stop stop-color="#E54138" />
            <stop offset="1" stop-color="#E54138" stop-opacity="0" />
          </radialGradient>
          <radialGradient id="paint1_radial_194_4876" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(1020.27 78.8375) rotate(69.2405) scale(383.391 1092.26)">
            <stop stop-color="#E54138" />
            <stop offset="1" stop-color="#E54138" stop-opacity="0" />
          </radialGradient>
        </defs>
      </svg>
    </div>

    <div class="container">
      <h1>
        <b>La semelle chauffante</b>
        <br>
        grâce à l'énergie de vos pas
      </h1>

      <p>
        CLIMFEET : Conserver vos pieds au chaud ou au frais sans limite de temps
      </p>

      <a href="#" class="button-1">
        <span>Découvrir</span>
      </a>
    </div>

    <span id="bg-text">SoleCooler</span>

    <div class="corner-bottom">
      <svg xmlns="http://www.w3.org/2000/svg" width="1440" height="847" viewBox="0 0 1440 847" fill="none">
        <path opacity="0.55" d="M1439.5 1C1439.5 59 1438 846.5 1438 846.5H-2.5C164.833 801.334 551.2 632.401 758 318.001C964.8 3.60056 1330.5 0.999958 1439.5 1Z" fill="url(#paint0_radial_194_4872)" />
        <path opacity="0.2" d="M1440 0.999917C1440 59.0342 1438.42 847 1438.42 847H7.23544e-05C-0.000248077 829.5 0.000800729 804.813 0.000239968 791C198.58 724.057 537.281 571.237 727.5 296C944.912 -18.5858 1325.41 0.999875 1440 0.999917Z" fill="url(#paint1_radial_194_4872)" />
        <defs>
          <radialGradient id="paint0_radial_194_4872" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(718.5 423.75) rotate(90) scale(422.75 721)">
            <stop stop-color="#0C579D" />
            <stop offset="1" stop-color="#0C579D" stop-opacity="0" />
          </radialGradient>
          <radialGradient id="paint1_radial_194_4872" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(720 423.88) rotate(90) scale(423.12 720)">
            <stop stop-color="#0C579D" />
            <stop offset="1" stop-color="#0C579D" stop-opacity="0" />
          </radialGradient>
        </defs>
      </svg>
    </div>
  </div>






  <article>
    <h1 data-i18n="title">How To Cook A Juicy Chicken Breast</h1>
    <p data-i18n="content">
      There’s a big difference between juicy chicken breasts and rubbery
      chicken breasts. Obviously, you want to avoid the latter at all costs.
      Follow these 4 steps and you’re gold. You want to add protein to
      favorites like Caesar salad or fix up a quick chicken salad or club
      sandwich? Try this method and savor the results.
    </p>
  </article>
  <aside>
    <h2 data-i18n="ingredients.title">Ingredients</h2>
    <ul>
      <li data-i18n="ingredients.$0">1 pound boneless chicken breasts</li>
      <li data-i18n="ingredients.$1">2 teaspoons olive oil</li>
      <li data-i18n="ingredients.$2">salt and pepper</li>
    </ul>
  </aside>
</main>