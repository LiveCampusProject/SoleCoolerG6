<!-- Entête html du site -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- On charge le css du footer présent sur toute les pages -->
    <link rel="stylesheet" href=/css/footer.css>
    <!-- On charge le script de traduction présent sur toute les pages -->
    <script type="module" src="js/index.js"></script>
    <!-- On vérifie si la page que l'on charge à besoin d'un fichier css ou d'un ficher js -->
    <?php if(!$css==""):?>
        <link rel="stylesheet" href=<?php echo $css?>>
    <?php endif?>
    <?php if(!$js==""):?>
        <script type="text/javascript" src=<?php echo $js?>></script>
    <?php endif?>
    <title><?php echo $titre?> </title>
</head>

<body>

<div id="header">
    <div id="banner-top">
        <span>Livraison en France et à l’international</span>
    </div>
    
    <div id="navbar">
        <a id="logo" href="#"><img src="https://le-cdn.website-editor.net/s/441c284abd2648ffa97a9d57623833bc/dms3rep/multi/opt/solecooler+-+slogan+fr-411w.png?Expires=1677611810&Signature=LEWoeFvvkmD8rRL1FAydzeG~rWMBT2Tg4~vhMIFNDWGdgXrsxI~danIxAsIGy9Ipk96pUufNBZYmDbHltIgNclodN~MgUdqmKMG9ezPXbQ8pZ1Unig3wtw85hHeVJ36pLK0YEgeKHLqqmNhHsN3PFPQLzouGAMZ9SoMz113S0qNq0sNDXhwsoB3jnY8zLV6kKuguZ0yIyHOybdRysKH~H51plB98Y5bIvZMIF5wP8RVPqti3p1XkoIk~D-V8fMWt6O~acCdX3DMwv4WmahsGt8USVc0I8bE4FsGmHG-jGuUJNy~tYfcdzvKliMPqwzvCsOhTc8L23bOsZSClN5YCag__&Key-Pair-Id=K2NXBXLF010TJW" alt="logo SoleCooler"></a>
        <nav id="main-nav">
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Nos produits</a></li>
                <li><a href="#">Comment ça marche</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div id="icons">
            <ul>
                <li><a href="#"><img src="" alt=""></a></li>
                <li><a href="#"><img src="" alt=""></a></li>
            </ul>
        </div>
    </div>
</div>