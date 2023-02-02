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
        <a id="logo" href="#"><img src="./assets/img/general/Logo SoleCooler.svg" alt="logo SoleCooler"></a>
        <!-- End Logo -->

        <!-- Main Nav -->
        <nav id="main-nav">
            <img id="mobile-menu-toggle-close" src="./assets/img/icons/icon_close.svg" alt="Fermer le menu">

            <ul>
                <li><a href="#">Notre technologie</a></li>
                <li><a href="#">Nos histoire</a></li>
                <li><a href="#">Actualités</a></li>
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
