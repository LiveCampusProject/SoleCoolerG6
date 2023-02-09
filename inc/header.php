<?php
require_once("./inc/utils.php");
session_start();
if (!(is_user_logged_in())) :
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
            <a id="logo" href="./index.php"><img src="./assets/img/general/Logo SoleCooler.svg" alt="logo SoleCooler"></a>
            <!-- End Logo -->

            <!-- Main Nav -->
            <nav id="main-nav">
                <img id="mobile-menu-toggle-close" src="./assets/img/icons/icon_close.svg" alt="Fermer le menu">

                <ul>
                    <li><a href="./product.php">La semelle</a></li>
                    <li><a href="./our-technologie.php">Notre technologie</a></li>
                    <li><a href="./news.php">Actualités</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                </ul>
            </nav>
            <!-- End Main Nav -->

            <!-- Icons -->
            <div id="icons">
                <ul>
                    <!-- User -->
                    <li>
                        <a href="<?php echo './login.php'; ?>">
                            <img src="./assets/img/icons/icon_user.svg" width="25" alt="Mon compte">
                        </a>
                    </li>
                    <!-- End User -->

                    <!-- Cart -->
                    <li class="quantity">
                        <a href="./checkout.php"><img src="./assets/img/icons/icon_cart.svg" width="25" alt="Panier"></a>
                        <div>1</div>
                    </li>
                    <!-- End Cart -->

                    <!-- Languages -->
                    <li>
                        <form>
                            <select name="lang" id="languages">
                                <option value="fr">FR</option>
                                <option value="en">EN</option>
                                <option value="de">DE</option>
                                <option value="es">ES</option>
                            </select>
                        </form>
                    </li>
                    <!-- End Languages -->

                    <!-- Mobile Menu -->
                    <li id="mobile-menu-toggle-open">
                        <img src="./assets/img/icons/icon_menu.svg" alt="Ouvrir le menu">
                    </li>
                    <!-- End Mobile Menu -->
                </ul>
            </div>
            <!-- End Icons -->

        </div>
        <!-- End Navbar -->

    </header>
<?php endif; ?>