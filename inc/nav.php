<?php 
  session_start(); 
  if (!isset($_SESSION['loggedin'])): 
?>
    <body>

    <div id="header">
        <div id="banner-top">
            <span>Livraison en France et à l’international</span>
        </div>
        
        <div id="navbar">
            <a id="logo" href="#"><img src="https://le-cdn.website-editor.net/s/441c284abd2648ffa97a9d57623833bc/dms3rep/multi/opt/solecooler+-+slogan+fr-411w.png?Expires=1677611810&Signature=LEWoeFvvkmD8rRL1FAydzeG~rWMBT2Tg4~vhMIFNDWGdgXrsxI~danIxAsIGy9Ipk96pUufNBZYmDbHltIgNclodN~MgUdqmKMG9ezPXbQ8pZ1Unig3wtw85hHeVJ36pLK0YEgeKHLqqmNhHsN3PFPQLzouGAMZ9SoMz113S0qNq0sNDXhwsoB3jnY8zLV6kKuguZ0yIyHOybdRysKH~H51plB98Y5bIvZMIF5wP8RVPqti3p1XkoIk~D-V8fMWt6O~acCdX3DMwv4WmahsGt8USVc0I8bE4FsGmHG-jGuUJNy~tYfcdzvKliMPqwzvCsOhTc8L23bOsZSClN5YCag__&Key-Pair-Id=K2NXBXLF010TJW" alt="logo SoleCooler"></a>
            <nav id="main-nav">
                <ul>
                    <li><a href="/index.php">Accueil</a></li>
                    <li><a href="#">Nos produits</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="/login.php">Se connecter</a></li>
                    <li><a href="/register.php">S'inscrire</a></li>
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

<?php else : 
?>

    <body>

    <div id="header">
        <div id="banner-top">
            <span>Livraison en France et à l’international</span>
        </div>
        
        <div id="navbar">
            <a id="logo" href="#"><img src="https://le-cdn.website-editor.net/s/441c284abd2648ffa97a9d57623833bc/dms3rep/multi/opt/solecooler+-+slogan+fr-411w.png?Expires=1677611810&Signature=LEWoeFvvkmD8rRL1FAydzeG~rWMBT2Tg4~vhMIFNDWGdgXrsxI~danIxAsIGy9Ipk96pUufNBZYmDbHltIgNclodN~MgUdqmKMG9ezPXbQ8pZ1Unig3wtw85hHeVJ36pLK0YEgeKHLqqmNhHsN3PFPQLzouGAMZ9SoMz113S0qNq0sNDXhwsoB3jnY8zLV6kKuguZ0yIyHOybdRysKH~H51plB98Y5bIvZMIF5wP8RVPqti3p1XkoIk~D-V8fMWt6O~acCdX3DMwv4WmahsGt8USVc0I8bE4FsGmHG-jGuUJNy~tYfcdzvKliMPqwzvCsOhTc8L23bOsZSClN5YCag__&Key-Pair-Id=K2NXBXLF010TJW" alt="logo SoleCooler"></a>
            <nav id="main-nav">
                <ul>
                    <li><a href="/index.php">Accueil</a></li>
                    <li><a href="#">Nos produits</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="/Profile.php">Mon compte</a></li>
                    <li><a href="/logout.php">Deconnexion</a></li>
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

<?php endif ?>
