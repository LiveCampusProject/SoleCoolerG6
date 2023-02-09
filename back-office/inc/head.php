<!-- Entête html du site -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css et bootstrap pour l'index -->
	<link href="/back-office/css/bootstrap.min.css" rel="stylesheet">
	<link href="back-office/css/font-awesome.min.css" rel="stylesheet">
	<link href="/back-office/css/datepicker3.css" rel="stylesheet">
	<link href="/back-office/css/styles.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



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

    <title><?php echo $titre?> </title>
</head>
<body <?= $bodyId ? 'id="' . $bodyId . '"' : '' ?>>