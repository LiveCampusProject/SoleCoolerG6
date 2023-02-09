<!-- Entête html du site -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- On charge le css du footer présent sur toute les pages -->
    <link rel="stylesheet" href="../css/footer.css">
    <!-- On charge le script de traduction présent sur toute les pages -->
    <script type="module" src="../js/index.js"></script>
    <!-- On vérifie si la page que l'on charge à besoin d'un fichier css ou d'un ficher js -->
    <?php if(!$css==""):?>
        <link rel="stylesheet" href=<?php echo $css?>>
    <?php endif?>
    <?php if(!$js==""):?>
        <script type="text/javascript" src=<?php echo $js?>></script>
    <?php endif?>

    <!-- JS fontAwesome -->
    <script src="https://kit.fontawesome.com/3b346af46d.js" crossorigin="anonymous"></script>
    
    
    <!-- CDN -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <!-- BoxIcons v2.1.2 -->
	<link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"   rel="stylesheet">

    <title><?php echo $titre?> </title>
</head>
<body <?= $bodyId ? 'id="' . $bodyId . '"' : '' ?>>

<?php if ($bodyId == "index-backoffice"){ ?>
    <img src="/back-office/inc/images/blob-1.svg" alt="" class="blob-blue">
    <img src="/back-office/inc/images/blob-2.svg" alt="" class="blob-red">
<?php } ?>