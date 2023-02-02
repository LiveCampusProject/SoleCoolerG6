<?php 
  session_start(); 
  if (!isset($_SESSION['loggedin'])): 
?>


<header id="header">
    <!-- Top Banner -->
    <!-- <div id="banner-top">
        <div class="container">Livraison en France et à l’international</div>
    </div> -->
    <!-- End Top Banner -->


    <!-- Navbar -->
    <div id="navbar" class="container">

        <!-- Logo -->
        <a id="logo" href="#"><img src="https://le-cdn.website-editor.net/s/441c284abd2648ffa97a9d57623833bc/dms3rep/multi/opt/solecooler+-+slogan+fr-411w.png?Expires=1677611810&Signature=LEWoeFvvkmD8rRL1FAydzeG~rWMBT2Tg4~vhMIFNDWGdgXrsxI~danIxAsIGy9Ipk96pUufNBZYmDbHltIgNclodN~MgUdqmKMG9ezPXbQ8pZ1Unig3wtw85hHeVJ36pLK0YEgeKHLqqmNhHsN3PFPQLzouGAMZ9SoMz113S0qNq0sNDXhwsoB3jnY8zLV6kKuguZ0yIyHOybdRysKH~H51plB98Y5bIvZMIF5wP8RVPqti3p1XkoIk~D-V8fMWt6O~acCdX3DMwv4WmahsGt8USVc0I8bE4FsGmHG-jGuUJNy~tYfcdzvKliMPqwzvCsOhTc8L23bOsZSClN5YCag__&Key-Pair-Id=K2NXBXLF010TJW" alt="logo SoleCooler"></a>
        <!-- End Logo -->

        <!-- Main Nav -->
        <nav id="main-nav">
            <img id="mobile-menu-toggle-close" src="./assets/img/icons/icon_close.svg" alt="Fermer le menu">

            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Nos produits</a></li>
                <li><a href="#">Comment ça marche</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <!-- End Main Nav -->

        <!-- Icons -->
        <div id="icons">
            <ul>
                <li><a href="#"><img src="./assets/img/icons/icon_user.svg" width="25" alt="Mon compte"></a></li>
                <li><a href="#"><img src="./assets/img/icons/icon_cart.svg" width="25" alt="Panier"></a></li>
                <li>
                    <form>
                        <select name="lang" id="languages">
                            <option value="en">EN</option>
                            <option value="de">DE</option>
                            <option value="es">ES</option>
                        </select>
                    </form>
                </li>
                <li id="mobile-menu-toggle-open">
                    <img src="./assets/img/icons/icon_menu.svg" alt="Ouvrir le menu">
                </li>
            </ul>
        </div>
        <!-- End Icons -->

    </div>
    <!-- End Navbar -->

</header>
<?php endif ?>
