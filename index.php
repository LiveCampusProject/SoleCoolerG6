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


  <section class="container space-arround-m">
    <h2 class="h2-tiny">Nos partenaires</h2>
    <div class="customer-logos slider">
      <div class="slide"><img src="./assets/img/logos/logo Elkem.png"></div>
      <div class="slide"><img src="./assets/img/logos/Logo - agefiph.png"></div>
      <div class="slide"><img src="./assets/img/logos/Logo Ansys fluent.png"></div>
      <div class="slide"><img src="./assets/img/logos/Logo Ceei.png"></div>
      <div class="slide"><img src="./assets/img/logos/Logo Initiative.png"></div>
      <div class="slide"><img src="./assets/img/logos/logo Elkem.png"></div>
      <div class="slide"><img src="./assets/img/logos/Logo - agefiph.png"></div>
      <div class="slide"><img src="./assets/img/logos/Logo Ansys fluent.png"></div>
      <div class="slide"><img src="./assets/img/logos/Logo Ceei.png"></div>
      <div class="slide"><img src="./assets/img/logos/Logo Initiative.png"></div>
      <!-- <div class="slide"><img src="./assets/img/logos/"></div> -->
    </div>
  </section>


  <section id="product" class="container space-arround-m">
    <div class="contents">

      <img src="./assets/img/products/Produit SoleCooler.png" alt="">

      <div>
        <h2>CLIMFEET : La semelle réversible thermo-régulée</h2>
        <p>
          Une semelle souple alvéolaire qui produit de la chaleur et du froid par la seule pression de vos pas et sans empreinte carbone.
          <br><br>
          Elle garde vos pieds au chaud en situation de froid tout en créant du frais durant les périodes estivales.
        </p>
        <a href="#" class="button-2">
          <span>Acheter</span>
        </a>
      </div>
    </div>

    <div class="points">
      <div class="grid">
        <div class="card">
          <svg xmlns="http://www.w3.org/2000/svg" width="66" height="71" viewBox="0 0 66 71" fill="none">
            <path d="M11.0869 62.7982C-4.39152 41.5319 27.1135 0.72682 55.1036 18.2716C90.0913 40.2026 31.4023 90.7103 11.0869 62.7982Z" fill="#E7F3FD" />
            <path d="M31.3523 5.47583C30.614 5.74654 29.8388 6.34947 29.445 6.94009C29.2482 7.2354 28.2392 9.68404 27.1933 12.3911C26.1597 15.0858 25.0153 17.8913 24.6462 18.6418C23.4403 21.0536 21.853 23.2684 20.0812 25.0157L19.1091 25.9754L19.0353 24.9788C18.8999 23.1823 17.9771 21.8288 16.5374 21.2997C15.8976 21.0536 15.6023 21.0413 11.2095 21.0413C5.64777 21.0413 5.64777 21.0413 4.47882 22.2102C3.21144 23.4653 3.30988 21.9641 3.34679 39.6213L3.3837 54.9407L3.67902 55.4944C4.07277 56.245 4.73722 56.9217 5.4755 57.3155L6.09074 57.6477L10.9634 57.6846C15.6638 57.7215 15.8607 57.7092 16.5251 57.4631C17.3987 57.1309 18.2478 56.3188 18.6661 55.4206C18.8999 54.9038 18.986 54.4485 19.0476 53.4641L19.1337 52.1844L20.4257 52.935C24.0802 55.0514 27.021 56.0235 30.7001 56.3434C31.5122 56.4172 35.4374 56.4788 39.498 56.4788C47.3114 56.4788 47.8405 56.4418 48.9849 55.8635C49.6493 55.519 50.7321 54.4977 51.1136 53.8456C51.9995 52.3321 52.0241 50.0434 51.1751 48.653L50.9413 48.2715L51.5812 47.9762C52.9593 47.3364 54.0913 45.786 54.3989 44.1249C54.5958 43.0297 54.4235 42.1684 53.6976 40.5319C53.6607 40.4458 53.8944 40.2612 54.2267 40.1012C54.5466 39.9536 55.1372 39.4983 55.531 39.1168C57.106 37.5418 57.512 35.2409 56.5646 33.186L56.2569 32.5215L56.8107 32.2508C57.4997 31.9186 58.5948 30.8973 58.9886 30.2206C59.8991 28.6579 59.8991 26.4676 58.9886 24.9049C58.6071 24.2651 57.5366 23.2315 56.8968 22.9116C55.7648 22.3333 55.9247 22.3456 46.0194 22.2717L36.5941 22.2102L37.9968 17.6575C39.0673 14.1752 39.4118 12.8833 39.461 12.1819C39.5841 10.3854 38.9196 8.63814 37.5661 7.24771C36.2495 5.88189 34.7976 5.27896 32.8534 5.30357C32.2751 5.30357 31.5984 5.3897 31.3523 5.47583ZM34.5515 8.24439C35.4005 8.61353 36.3234 9.62251 36.6187 10.4838C37.0247 11.7143 36.9386 12.2065 35.3759 17.2268C34.1085 21.312 33.9485 21.9272 33.9855 22.5547C34.047 23.4284 34.5269 24.1667 35.3144 24.6096L35.8681 24.9172L45.5888 24.9788C56.2816 25.0403 55.6171 24.9911 56.38 25.8032C57.5982 27.0829 57.1798 29.1624 55.5556 29.9129C55.1003 30.1221 54.6696 30.1467 50.1046 30.1467C44.5798 30.1467 44.4937 30.159 44.1245 30.9465C43.8784 31.451 43.8784 31.5495 44.1122 32.0417C44.4691 32.7799 44.4691 32.7922 48.8126 32.8538L52.7624 32.9153L53.3038 33.2844C54.8296 34.3672 54.8296 36.5083 53.3038 37.5911L52.7624 37.9602L48.1974 38.0217C44.8382 38.0709 43.5462 38.1202 43.3493 38.2432C42.4757 38.7354 42.4757 40.0151 43.3493 40.5073C43.5339 40.618 44.5921 40.6795 46.8931 40.7288C50.1292 40.7903 50.1661 40.7903 50.6091 41.0979C50.8675 41.2702 51.2243 41.627 51.4089 41.8854C51.7042 42.3161 51.7411 42.4883 51.7411 43.3127C51.7411 44.1372 51.7042 44.3094 51.4089 44.7401C51.2243 44.9985 50.8675 45.3553 50.6091 45.5276L50.1661 45.8352L46.2163 45.8967C41.9589 45.9583 41.8728 45.9829 41.5282 46.635C41.2944 47.0903 41.2944 47.4102 41.5405 47.8778C41.8605 48.5176 42.2911 48.6038 44.912 48.6038C47.496 48.6038 47.7913 48.6776 48.505 49.4282C49.797 50.7817 49.1817 53.1319 47.4099 53.6487C47.0776 53.7471 44.4198 53.7717 38.329 53.7471C28.6698 53.6856 28.9282 53.7102 26.0735 52.7135C24.5601 52.1844 23.9694 51.9014 21.2009 50.351L19.0722 49.1575L19.0845 39.3137V29.47L20.2534 28.4856C22.9482 26.2338 25.3722 23.1084 27.021 19.7493C27.4517 18.8633 28.5468 16.1932 29.4696 13.8061C31.5491 8.36743 31.5614 8.34283 31.9675 8.08443C32.4228 7.78911 33.6778 7.86294 34.5515 8.24439ZM15.7499 23.8344C15.9468 23.9452 16.156 24.1667 16.2298 24.3266C16.4267 24.745 16.4144 54.0055 16.2298 54.4362C16.156 54.5961 15.9222 54.8299 15.7007 54.9407C15.3685 55.1129 14.8271 55.1375 10.988 55.1006L6.64445 55.0637L6.31222 54.7192L5.96769 54.387V39.3875C5.96769 24.5604 5.96769 24.3881 6.21378 24.1174C6.34913 23.9698 6.57062 23.7975 6.70597 23.736C6.84132 23.6868 8.85929 23.6375 11.1726 23.6375C14.9132 23.6252 15.4423 23.6499 15.7499 23.8344Z" fill="#0C579D" />
          </svg>

          <p>Efficace</p>
          <p>
            -4°C ou +4°C
            <br>
            dès 7 pas
          </p>

        </div>
        <div class="card">
          <svg xmlns="http://www.w3.org/2000/svg" width="66" height="71" viewBox="0 0 66 71" fill="none">
            <path d="M11.0869 62.7982C-4.39152 41.5319 27.1135 0.72682 55.1036 18.2716C90.0913 40.2026 31.4023 90.7103 11.0869 62.7982Z" fill="#E7F3FD" />
            <path d="M30.1583 0.430858C29.7892 0.5416 29.297 0.738475 29.0509 0.886131C28.4234 1.25527 27.4759 2.19043 27.1314 2.79336C26.43 3.97461 26.4546 3.21172 26.4546 22.2225V39.7197L26.0609 39.8797C25.2857 40.1996 23.7845 41.2824 22.9355 42.1314C21.4712 43.608 20.3392 45.5521 19.7855 47.5578C19.564 48.3822 19.5148 48.8867 19.5148 50.634C19.5025 52.4674 19.5394 52.8488 19.7855 53.6978C20.7698 57.1062 22.8001 59.6902 25.7532 61.2775C30.4905 63.8369 36.1999 63.0002 40.0021 59.198C41.5525 57.6353 42.6353 55.7773 43.2013 53.6486C43.4474 52.7627 43.4843 52.2951 43.4843 50.634C43.4843 48.9728 43.4474 48.5053 43.2013 47.6193C42.6353 45.5275 41.5648 43.6326 40.0636 42.1314C39.2146 41.2824 37.7134 40.1996 36.9382 39.8797L36.5444 39.7197V22.2225C36.5444 3.1625 36.5691 3.98691 35.8554 2.76875C35.3755 1.94433 34.2066 0.923045 33.3821 0.615428C32.4593 0.258592 31.0443 0.184764 30.1583 0.430858ZM32.73 2.54726C33.2837 2.76875 33.9112 3.37168 34.2435 3.99922L34.5142 4.4914L34.5511 22.7639L34.5757 41.0363L35.1663 41.2701C36.5198 41.8115 38.3778 43.1281 39.2269 44.1494C42.303 47.8408 42.3892 52.9965 39.436 56.8478C37.5903 59.2473 34.588 60.7115 31.4995 60.7115C29.9245 60.7115 28.6202 60.4039 27.1314 59.6779C23.7722 58.0537 21.6804 54.9283 21.4589 51.1877C21.2005 46.9918 23.4153 43.4111 27.4759 41.4547L28.5464 40.9502V22.7393C28.5464 2.81797 28.4972 4.18379 29.2847 3.27324C30.146 2.28887 31.4503 2.01816 32.73 2.54726Z" fill="#0C579D" />
            <path d="M30.5151 34.0721V43.6575L29.8752 43.8051C27.6727 44.3219 25.667 46.1061 24.8672 48.2717C24.5104 49.2315 24.3873 51.1387 24.6088 52.1477C25.1625 54.7194 27.3282 56.9096 29.9122 57.5249C30.9211 57.7586 32.0778 57.7586 33.0868 57.5249C35.7323 56.8973 37.8979 54.6825 38.4024 52.0739C38.6116 50.9911 38.4885 49.2192 38.1317 48.2717C37.3319 46.1061 35.3262 44.3219 33.136 43.8051L32.4838 43.6575V34.0721V24.4868H31.4995H30.5151V34.0721ZM33.1606 45.9092C35.0801 46.6229 36.3106 48.2348 36.5075 50.2651C36.7413 52.8122 34.8463 55.1993 32.2623 55.6053C29.1123 56.0975 26.2207 53.4397 26.4914 50.2774C26.7129 47.6196 28.8293 45.6631 31.4625 45.6508C32.1885 45.6508 32.6684 45.7247 33.1606 45.9092Z" fill="#0C579D" />
            <path d="M38.5137 4.30664V5.29102H41.0361H43.5586V4.30664V3.32227H41.0361H38.5137V4.30664Z" fill="#0C579D" />
            <path d="M38.5628 7.42012C38.5259 7.51856 38.5136 7.97383 38.5382 8.44141L38.5751 9.29043L40.0886 9.32734L41.5898 9.36426V8.30605V7.26016H40.1132C38.9812 7.26016 38.612 7.29707 38.5628 7.42012Z" fill="#0C579D" />
            <path d="M38.5379 12.3293L38.5748 13.3506L41.0727 13.3875L43.5582 13.4121V12.3662V11.3203H41.0357H38.501L38.5379 12.3293Z" fill="#0C579D" />
            <path d="M38.5137 16.3652V17.3496H40.0518H41.5898V16.3652V15.3809H40.0518H38.5137V16.3652Z" fill="#0C579D" />
            <path d="M38.5137 20.4258V21.4102H41.0361H43.5586V20.4258V19.4414H41.0361H38.5137V20.4258Z" fill="#0C579D" />
            <path d="M38.5998 23.465C38.5506 23.502 38.5137 23.9818 38.5137 24.5109V25.4707H40.0518H41.5898V24.4248V23.3789H40.1379C39.3381 23.3789 38.6367 23.4158 38.5998 23.465Z" fill="#0C579D" />
            <path d="M38.5628 27.5994C38.5259 27.6979 38.5136 28.1531 38.5382 28.6207L38.5751 29.4697L41.073 29.5066L43.5585 29.5312V28.4854V27.4395H41.0976C39.1411 27.4395 38.612 27.4764 38.5628 27.5994Z" fill="#0C579D" />
            <path d="M38.5137 32.4844V33.4688H40.0518H41.5898V32.4844V31.5H40.0518H38.5137V32.4844Z" fill="#0C579D" />
            <path d="M38.5137 36.5449V37.5293H41.0361H43.5586V36.5449V35.5605H41.0361H38.5137V36.5449Z" fill="#0C579D" />
          </svg>

          <p>Résistant</p>
          <p>
            Conçu pour travailler
            <br>
            entre -40°C et +60°C
          </p>

        </div>
        <div class="card">
          <svg xmlns="http://www.w3.org/2000/svg" width="66" height="71" viewBox="0 0 66 71" fill="none">
            <path d="M11.0869 62.7982C-4.39152 41.5319 27.1135 0.72682 55.1036 18.2716C90.0913 40.2026 31.4023 90.7103 11.0869 62.7982Z" fill="#E7F3FD" />
            <path d="M26.7016 4.31934C22.0135 4.55313 19.1465 4.75 18.9619 4.83614C18.4574 5.08223 18.2113 5.54981 18.1252 6.42344C17.9037 8.82285 19.2326 11.1484 21.4475 12.2436C22.2473 12.6373 22.641 12.7357 24.6344 13.0311C25.8772 13.2279 27.0092 13.4494 27.1568 13.5355C27.7598 13.917 27.969 14.7168 27.6244 15.3689C27.526 15.5658 25.5818 17.5592 23.2932 19.7986L19.1342 23.8838L17.8422 22.5426C17.1285 21.8043 16.2303 20.9922 15.8488 20.7584C13.9047 19.5033 11.3822 19.368 9.31505 20.4016C8.60138 20.7461 8.08458 21.1768 6.70646 22.518C4.92228 24.2652 4.467 24.6221 4.31935 24.376C4.27013 24.3022 3.87638 22.3703 3.45802 20.0816C3.02736 17.8053 2.6213 15.7258 2.54747 15.4674C2.37521 14.8398 1.94454 14.5199 1.3047 14.5199C0.70177 14.5199 0.172669 14.9629 0.0619265 15.5658C0.000403074 15.8857 7.00177 53.6119 7.39552 55.0516C7.88771 56.8727 9.42579 58.4107 11.2469 58.8906C12.182 59.1367 50.8188 59.1367 51.7539 58.8906C53.575 58.4107 55.1131 56.8727 55.6053 55.0516C55.6791 54.7809 57.3772 45.8723 59.3705 35.241C61.7453 22.6656 62.9881 15.7996 62.9389 15.5412C62.7789 14.6799 61.5731 14.2123 60.884 14.7537C60.4902 15.0736 60.441 15.2459 59.5428 20.1186C59.1244 22.4195 58.7307 24.3514 58.6815 24.4006C58.5215 24.5975 58.017 24.2037 56.2943 22.518C54.9039 21.1645 54.3994 20.7584 53.6611 20.3893C53.169 20.1432 52.6891 19.934 52.6152 19.934C52.5168 19.934 52.4061 19.491 52.3076 18.802C52.0123 16.7594 51.1387 14.6553 49.9205 13.0803C49.1822 12.1328 44.0512 7.07559 43.1652 6.42344C41.7256 5.36524 40.0276 4.59004 38.3418 4.23321C36.9022 3.91328 34.5397 3.93789 26.7016 4.31934ZM38.3541 6.96485C40.6797 7.6416 41.7256 8.40449 45.417 12.1451C48.1117 14.8768 48.6162 15.5412 49.2192 17.19C49.6252 18.3344 49.8713 19.6879 49.6621 19.7494C49.5883 19.774 49.2807 19.8602 48.9731 19.934C47.8287 20.2293 46.992 20.8076 45.1586 22.5795C44.1742 23.527 43.1652 24.4006 42.9192 24.5236C41.7994 25.0527 40.1998 25.0281 39.2401 24.4621C38.9817 24.3022 37.9973 23.4285 37.0621 22.5057C35.6348 21.0906 35.2164 20.7584 34.4412 20.3893C32.9031 19.651 31.4881 19.5156 29.8516 19.934C28.4611 20.2908 27.5998 20.8691 25.8033 22.6779C24.1422 24.3514 23.5147 24.7574 22.4072 24.8928L21.8658 24.9666L25.8033 21.0045C28.4488 18.359 29.8393 16.8578 30.0361 16.4887C30.4053 15.7381 30.5037 14.2861 30.2207 13.4617C29.9131 12.5389 29.2117 11.7145 28.3504 11.2346C27.686 10.8777 27.3291 10.7793 25.4588 10.5086C22.7764 10.1148 22.0258 9.80723 21.3736 8.82285C21.1276 8.46602 20.9061 7.96153 20.8568 7.71543C20.7707 7.27246 20.783 7.26016 21.1152 7.24785C21.3121 7.24785 24.5483 7.08789 28.3012 6.89102C32.0541 6.69414 35.6225 6.5711 36.2377 6.60801C36.8406 6.64492 37.7881 6.80489 38.3541 6.96485ZM13.8432 22.641C14.4461 22.8994 15.0244 23.3916 16.3041 24.7082L17.2762 25.7295L14.2492 28.7688C12.4774 30.5406 11.1115 32.0172 10.9516 32.3125C10.0164 34.1459 10.6563 36.3977 12.4281 37.542C13.0311 37.9357 13.0311 37.9357 12.8465 38.2803C12.3543 39.24 12.3912 40.7166 12.9326 41.7625C13.4002 42.6854 14.3231 43.4729 15.2828 43.7928C16.0211 44.0389 17.3746 43.9773 18.0391 43.6943C18.359 43.5467 18.6297 43.4482 18.642 43.4605C18.6543 43.4852 18.7897 43.7066 18.9373 43.9527C19.3434 44.6295 20.2416 45.3678 21.0291 45.6631C21.5705 45.8723 21.9027 45.9092 22.6533 45.8723C23.8592 45.7984 24.5236 45.4785 25.668 44.3957L26.5662 43.5467L26.7385 43.8912C27.0461 44.4695 27.8336 45.1709 28.5473 45.5154C29.1256 45.7861 29.384 45.8354 30.3315 45.8354C31.3035 45.8354 31.5127 45.7861 32.1156 45.4785C32.6324 45.2078 34.5397 43.399 40.692 37.3205C49.0223 29.0887 49.7236 28.375 50.3143 27.5137C51.0895 26.3939 51.9385 24.376 52.2338 22.9732L52.2953 22.641L52.7014 22.8379C52.9106 22.9609 53.7842 23.7238 54.6332 24.5482C56.2082 26.0863 56.9342 26.6523 57.7586 26.9969C58.177 27.1691 58.2139 27.2307 58.1524 27.526C58.1154 27.7229 56.9711 33.7645 55.6176 40.975C54.2641 48.1855 53.0951 54.2518 53.0213 54.4732C52.8244 55.1008 52.2092 55.8391 51.6555 56.1344L51.1264 56.4174H31.5004H11.8744L11.3453 56.1344C10.7916 55.8391 10.1764 55.1008 9.97951 54.4732C9.90568 54.2518 8.73673 48.1855 7.38322 40.975C6.0297 33.7645 4.88536 27.7229 4.84845 27.526C4.78693 27.2307 4.82384 27.1691 5.2422 26.9969C6.07892 26.6523 6.79259 26.0863 8.42911 24.4867C9.31505 23.6377 10.2379 22.8379 10.4963 22.7148C11.5053 22.2473 12.8465 22.2104 13.8432 22.641ZM33.1985 22.7148C33.6906 22.924 34.2567 23.4039 35.401 24.5605C36.25 25.4096 37.2344 26.2955 37.5912 26.5293C39.4985 27.7475 41.9471 27.8705 44.0512 26.8615C44.8264 26.4924 45.2447 26.1479 46.6967 24.7328C48.1979 23.2563 49.1699 22.518 49.576 22.518C49.8221 22.518 49.0223 24.6221 48.407 25.5941C47.7303 26.6523 47.2012 27.2061 39.1293 35.1795C31.9557 42.267 30.9836 43.1775 30.5652 43.2637C29.95 43.3744 29.2979 43.0422 29.0026 42.4393C28.5842 41.5656 28.658 41.4672 32.1895 37.9604C34.3305 35.8316 35.4256 34.6627 35.4625 34.4535C35.6102 33.5799 35.0195 32.8539 34.1705 32.8539C33.6045 32.8539 33.7891 32.6816 27.0092 39.4C23.7977 42.5746 23.1209 43.1775 22.7518 43.2514C21.9643 43.399 21.1029 42.8453 21.0414 42.1439C20.9553 41.3688 20.9799 41.3564 26.2832 36.0408C31.1805 31.1436 31.525 30.7621 31.5373 30.3561C31.5496 29.7654 31.3035 29.3348 30.799 29.101C29.9623 28.7072 30.0485 28.6334 23.6377 34.9826C20.3524 38.2311 17.4977 40.9873 17.2885 41.1104C16.8455 41.3934 16.3533 41.4057 15.8734 41.1596C15.3567 40.8889 15.1352 40.5074 15.1352 39.8676L15.1229 39.3139L20.3524 34.1459C24.499 30.0484 25.5942 28.8918 25.6557 28.5842C25.7664 28.0551 25.4342 27.3906 24.9666 27.1568L24.5975 26.9846L25.3111 26.5785C25.7664 26.3201 26.6031 25.5941 27.5998 24.5975C28.4611 23.7238 29.4086 22.8871 29.6793 22.7518C30.7375 22.2104 32.0664 22.198 33.1985 22.7148ZM20.5492 27.3906C21.1891 27.526 21.7797 27.5629 22.4565 27.5137L23.4408 27.4398L22.4565 28.3996C21.9151 28.9287 20.0817 30.7252 18.3959 32.3863C14.9998 35.7209 14.8768 35.807 13.9785 35.3764C13.4494 35.118 13.1664 34.6504 13.1664 34.0105C13.1664 33.5799 13.3264 33.383 16.3287 30.3684C18.0637 28.6211 19.5279 27.1938 19.5649 27.1938C19.6018 27.1938 20.0447 27.2799 20.5492 27.3906Z" fill="#0C579D" />
          </svg>

          <p>Réutilisable</p>
          <p>
            Lavable avec
            <br>
            de l'eau et du savon
          </p>

        </div>
        <div class="card">
          <svg xmlns="http://www.w3.org/2000/svg" width="66" height="71" viewBox="0 0 66 71" fill="none">
            <path d="M11.0869 62.7982C-4.39152 41.5319 27.1135 0.72682 55.1036 18.2716C90.0913 40.2026 31.4023 90.7103 11.0869 62.7982Z" fill="#E7F3FD" />
            <g clip-path="url(#clip0_211_4289)">
              <path d="M33.4069 0.171832C32.4964 0.405621 31.9673 0.651715 31.4382 1.11929C30.4907 1.95601 30.2938 3.07574 30.6999 5.21675C30.8475 6.02886 30.8721 6.3857 30.7737 6.59488C30.5399 7.11168 29.6663 7.61617 28.2389 8.05914C25.8272 8.80972 24.6337 9.59722 23.8093 11.0123C23.2555 11.9597 23.0218 12.1443 22.2466 12.255C21.6067 12.3412 20.1794 12.1197 19.8472 11.8736C19.6503 11.7259 19.6503 11.6644 19.7979 11.1107C20.0809 10.1632 20.1055 9.548 19.8718 9.11734C19.6134 8.61285 19.0104 8.24371 18.4198 8.24371C17.8292 8.24371 15.0606 8.93277 14.7284 9.16656C13.9901 9.68336 13.8055 10.7293 14.3347 11.4552C15.0114 12.4027 15.2575 12.9072 15.4298 13.7316C15.6266 14.6421 15.9343 15.5281 16.3772 16.3771C16.8817 17.3861 16.4757 17.5461 14.5807 17.1031C13.3749 16.8201 12.7597 16.7955 12.1813 17.0046C11.7876 17.14 11.7507 17.1277 11.4554 16.7216C10.7909 15.8234 9.90496 15.0359 9.41278 14.9005C8.39149 14.6175 7.48094 14.8144 6.77957 15.442C6.26278 15.9095 6.21356 15.9095 4.55243 15.3189C3.80184 15.0482 3.49422 14.999 2.87899 15.0482C1.93153 15.122 1.21786 15.5035 0.873324 16.1187C0.541097 16.7216 0.553402 17.14 0.934847 17.9644C1.20555 18.555 1.24246 18.7396 1.16864 19.4041C1.02098 20.856 1.53778 21.9019 2.85438 22.8125C3.93719 23.5507 5.08153 23.8707 7.01336 23.9814C9.38817 24.1168 10.1634 24.4859 10.754 25.7902C10.9386 26.1716 11.3446 26.713 11.7507 27.1068L12.4397 27.7712L12.6243 29.0878C12.8335 30.7367 12.9688 31.2412 13.4364 32.1763C13.8425 32.9761 15.0975 34.2804 15.5774 34.4035C16.0819 34.5265 16.488 34.3543 16.6725 33.9359C16.8694 33.4437 16.7464 33.0746 16.2173 32.6316C15.0483 31.6472 14.753 31.0197 14.4577 28.8418C14.1993 27.0084 14.027 26.6023 13.2764 25.9625C12.9073 25.6548 12.5259 25.175 12.3044 24.7443C11.4554 23.0462 9.65887 22.148 7.14871 22.148C6.01668 22.148 4.95848 21.8896 4.12176 21.422C3.13739 20.8683 3.01434 20.6222 3.01434 19.158C3.01434 18.0875 2.97743 17.8291 2.74364 17.4476C2.59598 17.2015 2.50985 16.9677 2.54676 16.9308C2.71903 16.7586 3.62957 16.8816 4.31864 17.1646C5.89364 17.8291 6.93953 17.7921 7.77625 17.0416C8.53914 16.3402 8.88368 16.4509 9.83114 17.6568C10.471 18.4689 11.1847 18.9488 11.7384 18.9488C11.9106 18.9488 12.2921 18.8873 12.5874 18.8011C13.0427 18.6781 13.3011 18.7027 14.2854 18.9242C16.5987 19.4656 17.4723 19.2441 18.1245 17.9644C18.5675 17.1031 18.5182 16.5986 17.8538 15.1466C17.5831 14.5683 17.3124 13.7562 17.2386 13.3625C17.1032 12.5996 16.6602 11.5414 16.2542 10.963L16.0081 10.6308L17.0663 10.3724L18.1122 10.114L18.0384 10.4462C17.9891 10.6185 17.9276 11.0738 17.8907 11.4429C17.743 12.8703 18.6782 13.7316 20.6716 14.0392C22.9356 14.3837 24.4614 13.7316 25.3597 12.0459C25.9257 11 26.9223 10.3478 28.8296 9.7941C30.2569 9.38804 31.2782 8.82203 31.9304 8.08375C32.7425 7.19781 32.8778 6.53336 32.5456 5.04449C32.4471 4.60152 32.3733 3.92476 32.361 3.53101C32.361 2.94039 32.4102 2.76812 32.6563 2.52203C32.9147 2.26363 33.9975 1.84527 34.4036 1.84527C34.4897 1.84527 34.6989 2.09136 34.8589 2.37437C35.5356 3.51871 36.5569 4.15855 38.3165 4.54C39.0302 4.69996 39.4977 4.87222 39.6946 5.05679C39.8546 5.20445 40.1868 5.83199 40.4206 6.44722C40.9743 7.81304 41.5403 8.63746 42.3032 9.11734C43.0415 9.58492 43.546 9.72027 44.5673 9.72027C45.3917 9.72027 45.3917 9.72027 45.6009 10.1509C45.9208 10.8277 46.8067 11.5291 47.6804 11.7998C48.0987 11.9351 48.9846 12.0951 49.6614 12.1812C52.2577 12.4765 52.7499 12.6488 53.7343 13.707C54.0911 14.0761 54.5587 14.4822 54.7802 14.5929C55.7891 15.1097 57.3395 15.4666 59.5913 15.688C60.0466 15.7373 60.4157 15.7865 60.4157 15.7988C60.4157 15.8111 60.2188 16.2787 59.985 16.8324C59.5052 17.9152 59.5052 18.3212 59.9604 18.6412C60.3419 18.9119 60.8218 18.8627 61.1171 18.5427C61.2524 18.3951 61.597 17.7552 61.8923 17.1277C62.3106 16.1925 62.3968 15.8849 62.3475 15.4912C62.1999 14.3591 61.6093 13.9654 59.8866 13.8423C58.3116 13.7439 56.8227 13.4609 56.1091 13.1533C55.8014 13.0179 55.2477 12.5873 54.854 12.1689C53.7589 11.0246 52.9714 10.7416 49.5999 10.2863C47.9511 10.0648 47.5573 9.86793 47.102 9.04351C46.5975 8.10836 46.3022 7.9607 44.8503 7.87457C43.0538 7.77613 43.0538 7.77613 41.8479 5.10601C41.1835 3.64175 40.4698 3.10035 38.7841 2.75582C37.2583 2.43589 36.7169 2.05445 36.1263 0.897809C35.7325 0.110309 34.7235 -0.160394 33.4069 0.171832Z" fill="#0C579D" />
              <path d="M59.1608 21.5332C58.9147 21.7177 58.8408 21.9146 58.7916 22.4929C58.6686 23.7603 58.2748 24.1664 56.9582 24.4125C55.9123 24.597 54.9402 25.9751 54.6326 27.6732C54.485 28.5222 54.3127 28.8052 52.8854 30.7001C51.2365 32.8658 50.7936 34.3177 51.4703 35.3267C52.3193 36.5818 53.6975 36.6433 55.2602 35.4867L55.8631 35.0437L56.0108 35.4005C56.1092 35.622 56.1707 36.4095 56.1707 37.5416C56.183 39.4365 56.1953 39.498 56.9951 40.6177C57.1059 40.7777 57.0566 40.913 56.749 41.2945C55.8016 42.488 55.7031 43.9892 56.5152 45.0105C56.5891 45.1089 56.6506 45.8103 56.6506 46.6101C56.6629 47.8406 56.6998 48.1236 56.9336 48.5419C57.4381 49.4894 58.4348 50.1785 59.5914 50.3877C59.8375 50.4369 60.0467 50.5476 60.0467 50.6337C60.0467 51.2613 56.9213 54.6451 55.8139 55.2111C55.4816 55.371 54.8418 55.5925 54.3865 55.691C53.0207 55.974 51.9748 55.6664 50.5598 54.5712C49.0463 53.39 48.2834 53.2054 46.8684 53.6976C45.724 54.0914 45.4656 54.0914 44.2598 53.7099C43.0785 53.3285 41.9957 53.3039 41.2451 53.6484C40.9498 53.7837 40.2608 54.3252 39.707 54.8543C39.1533 55.3834 38.4274 55.974 38.0828 56.1709C36.7662 56.9214 36.5447 57.2906 36.5447 58.7548C36.5447 59.9484 36.3725 60.4898 35.8557 60.8959C35.3635 61.2773 35.0066 61.2035 32.9887 60.256C30.9707 59.3085 31.0568 59.3332 30.0109 59.1855C29.3834 59.0994 28.8543 58.9025 27.8822 58.3857C26.6887 57.7705 26.5164 57.7089 25.7781 57.7089C24.8799 57.7089 24.0309 57.955 22.6404 58.6195C21.0039 59.407 20.1303 59.1609 18.4938 57.4382C17.9647 56.8722 17.0418 55.9248 16.4389 55.3218L15.3561 54.239L15.676 53.5992C16.2666 52.4179 16.5004 51.5443 16.6111 50.0554C16.7219 48.505 16.808 48.2712 17.534 47.7052C18.1738 47.2007 18.3707 46.7332 18.2846 45.9087C18.2477 45.5273 18.1861 44.7398 18.1369 44.1369L18.0631 43.0664L18.5922 43.374C18.9367 43.5709 19.3305 43.6816 19.6627 43.6816C20.1057 43.6816 20.2656 43.6078 20.7086 43.2017C21.2131 42.7218 21.2254 42.6972 21.2254 41.9097C21.2254 41.1468 21.1639 40.9992 20.118 38.9197C19.515 37.7138 18.9367 36.631 18.8383 36.508C18.5799 36.188 17.7801 36.225 17.5463 36.5695C17.1525 37.1232 17.3125 37.6646 18.4445 39.7441C18.8014 40.3839 19.1705 41.1099 19.269 41.3437L19.4535 41.7744L18.8506 41.1837C18.1492 40.4947 17.5832 40.3347 17.0172 40.6669C16.8203 40.79 16.5742 40.9992 16.4758 41.1468C16.242 41.5037 16.1682 44.4691 16.365 45.4289L16.525 46.1548L16.0205 46.5855C15.2084 47.2746 14.9008 48.0621 14.7777 49.7847C14.6547 51.3228 14.544 51.7658 13.9164 53.0085C13.2274 54.3744 13.3873 54.9035 14.8639 56.3554C15.4545 56.9337 16.4881 57.9919 17.1649 58.7056C18.1615 59.7515 18.5553 60.0837 19.2566 60.4283C20.0441 60.8097 20.2041 60.8466 21.2254 60.8466C22.2959 60.8466 22.3697 60.822 23.6248 60.2437C25.2983 59.4439 25.8889 59.3824 26.824 59.9115C28.0176 60.6005 28.5221 60.7974 29.4941 60.9697C30.6877 61.1789 30.6016 61.1419 32.6441 62.1017C34.7852 63.123 35.4988 63.2214 36.5447 62.6677C37.726 62.0525 38.3904 60.7236 38.3904 58.9886V58.0904L38.9688 57.8074C39.2887 57.6474 40.0147 57.0814 40.593 56.5277C41.1713 55.974 41.7742 55.4695 41.9219 55.3957C42.3279 55.1742 42.8693 55.2234 44.0014 55.5679C45.2441 55.9617 46.2162 55.9371 47.2621 55.5064C47.6928 55.3218 48.0742 55.248 48.2588 55.2849C48.4188 55.3341 48.9602 55.6787 49.4647 56.0601C51.1381 57.3275 52.59 57.7828 54.2881 57.5736C55.2233 57.4628 56.2815 57.106 56.9705 56.7C57.7334 56.2447 59.2715 54.805 60.2682 53.5992C61.7816 51.7781 62.2246 50.4492 61.6463 49.5017C61.3633 49.0341 60.908 48.7757 60.0221 48.5912C58.644 48.3082 58.3733 47.8652 58.4963 46.0564C58.5824 44.7398 58.484 44.3214 58.0287 43.94C57.6473 43.6201 57.7826 42.9433 58.3856 42.205C59.2469 41.1591 59.2838 40.2609 58.5086 39.4365C58.0041 38.9197 58.041 39.055 58.0656 37.4062C58.1025 35.339 57.6104 33.8625 56.7121 33.358C56.0723 33.0011 55.4201 33.0626 54.7434 33.5548C53.6236 34.3669 53.476 34.4531 53.2422 34.4531C53.033 34.4531 53.0084 34.3916 53.0699 34.0347C53.1561 33.5179 53.5129 32.9273 54.8172 31.1923C56.0354 29.5681 56.2815 29.1005 56.4537 28.0669C56.6014 27.2179 56.9336 26.4673 57.2166 26.3197C57.315 26.2582 57.7088 26.1351 58.0902 26.0367C59.493 25.6429 60.3297 24.6709 60.5758 23.1451C60.7234 22.1607 60.5881 21.6439 60.0959 21.4224C59.6652 21.2378 59.5053 21.2501 59.1608 21.5332Z" fill="#0C579D" />
            </g>
            <defs>
              <clipPath id="clip0_211_4289">
                <rect width="63" height="63" fill="white" />
              </clipPath>
            </defs>
          </svg>

          <p>100% français</p>
          <p>
            Produit conçu, fabriqué
            <br>
            et emballé en France
          </p>

        </div>
      </div>
    </div>
  </section>


  <section id="solecooler" style="background-image: url('./assets/img/home/solecooler_bg.jpg');">
    <div class="container" >
      <h2>SoleCooler : Inspiré par la Nature / Activé par vos pieds</h2>
      <p>Créée en 2019, SoleCooler a développé une semelle thermo-régulée : la CLIMFEET. Grâce à ses multiples alvéoles remplies d’air, la semelle CLIMFEET convertit directement l’énergie mécanique des pas de l'utilisateur en chaleur et en froid.</p>
      <a href="#" class="button-2">
        <span>Découvrir notre technologie</span>
      </a>
    </div>
  </section>






  <!-- <article>
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
  </aside> -->
</main>