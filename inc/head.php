<!-- Entête html du site -->
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Créée en 2019, SoleCooler a développé une semelle thermo-régulée : la CLIMFEET. Grâce à ses multiples alvéoles remplies d’air, la semelle CLIMFEET convertit directement l’énergie mécanique des pas de l'utilisateur en chaleur et en froid.">
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon/favicon.ico">
    <!-- On charge le script de traduction présent sur toute les pages -->
    <script type="module" src="js/index.js"></script>
    <!-- On vérifie si la page que l'on charge à besoin d'un fichier css ou d'un ficher js -->
    <?php if (!$css == "") : ?>
        <link rel="stylesheet" href=<?php echo $css ?>>
    <?php endif ?>



    <!-- CDN -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <!-- Page Animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>


    <?php if (!$js == "") : ?>
        <script type="text/javascript" src=<?php echo $js ?>></script>
    <?php endif ?>



    <title><?php echo $titre ?> </title>
</head>

<body <?= $bodyId ? 'id="' . $bodyId . '"' : '' ?>>