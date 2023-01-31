<!-- Entête html du site -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- On charge le css du footer présent sur toute les pages -->
    <link rel="stylesheet" href=./css/footer.css>
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
</div>