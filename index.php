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
require_once("./inc/nav.php");
require_once("./inc/footer.php");

?>

<main>
  <div id="hero">
    <div class="corner-top">
      <svg xmlns="http://www.w3.org/2000/svg" width="1126" height="397" viewBox="0 0 1126 397" fill="none">
        <path opacity="0.65" d="M0.320923 396.029C0.32092 368.91 0.278652 1.53809 0.278652 1.53809L1125.3 0.693481C994.752 21.8124 693.328 100.802 531.993 247.807C370.658 394.813 85.3573 396.029 0.320923 396.029Z" fill="#FF0000" fill-opacity="0.61" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="1131" height="333" viewBox="0 0 1131 333" fill="none">
        <path opacity="0.15" d="M1.09387 332.37C1.09387 309.801 -0.000395224 0.500007 -0.000395224 0.500007L1130.05 -0.000213623C999.044 17.575 696.565 86.6803 534.656 209.019C372.748 331.358 86.4325 332.37 1.09387 332.37Z" fill="#E54138" />
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
        <span>J'achète</span>
      </a>
    </div>

    <span>SoleCooler</span>

    <div class="corner-bottom">
      <svg xmlns="http://www.w3.org/2000/svg" width="1442" height="846" viewBox="0 0 1442 846" fill="none">
        <path opacity="0.55" d="M1442 0.240234C1442 58.2402 1440.5 845.741 1440.5 845.741H0C167.333 800.574 553.7 631.641 760.5 317.241C967.3 2.84079 1333 0.240192 1442 0.240234Z" fill="#0C579D" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" width="1441" height="847" viewBox="0 0 1441 847" fill="none">
        <path opacity="0.2" d="M1440.5 0.240156C1440.5 58.2744 1438.92 846.24 1438.92 846.24H0.50024C0.49992 828.74 0.500561 837.24 0.5 823.427C199.08 756.484 537.781 570.478 728 295.24C945.412 -19.3455 1325.91 0.240114 1440.5 0.240156Z" fill="#0C579D" />
      </svg>
    </div>
  </div>


  <div>
    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="142" viewBox="0 0 1440 142" fill="none">
      <g filter="url(#filter0_d_147_2609)">
        <path d="M-1 58L103.145 35.5L187.261 78.5L306.927 35.5L418.082 78.5L449.125 47L513.714 78.5L693.965 20L856.69 58L952.323 35.5L1066.48 58L1223.2 20L1296.3 58L1365.4 20L1440 58V122H-1V58Z" fill="white" />
      </g>
      <defs>
        <filter id="filter0_d_147_2609" x="-6" y="0" width="1481" height="142" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix" />
          <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
          <feOffset dx="15" />
          <feGaussianBlur stdDeviation="10" />
          <feComposite in2="hardAlpha" operator="out" />
          <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
          <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_147_2609" />
          <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_147_2609" result="shape" />
        </filter>
      </defs>
    </svg>
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