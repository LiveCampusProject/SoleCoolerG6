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
                    <li><a href="./our-technologie.php">Notre technologie</a></li>
                    <li><a href="./product.php">La semelle</a></li>
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
                            <!-- <img src="./assets/img/icons/icon_user.svg" width="25" alt="Mon compte"> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="none">
                                <path d="M15.666 17.852C23.292 17.852 29.57 23.664 30.503 31.168H31.028C29.775 22.843 23.386 17.568 15.687 17.568C7.98899 17.568 1.59899 22.842 0.347992 31.168H0.827992C1.76399 23.665 8.04099 17.852 15.666 17.852Z" stroke="black" stroke-width="0.6" stroke-miterlimit="10" />
                                <path d="M15.688 17.523C11.194 17.523 7.53799 13.869 7.53799 9.37499C7.53799 4.87799 11.194 1.22299 15.688 1.22299C20.185 1.22299 23.838 4.87799 23.838 9.37499C23.839 13.869 20.186 17.523 15.688 17.523Z" fill="#EDEDED" />
                                <path d="M15.689 17.707C20.2939 17.707 24.027 13.974 24.027 9.36901C24.027 4.76406 20.2939 1.03101 15.689 1.03101C11.084 1.03101 7.35098 4.76406 7.35098 9.36901C7.35098 13.974 11.084 17.707 15.689 17.707Z" stroke="black" stroke-miterlimit="10" />
                            </svg>
                        </a>
                    </li>
                    <!-- End User -->

                    <!-- Cart -->
                    <li><a href="./checkout.php"><img src="./assets/img/icons/icon_cart.svg" width="25" alt="Panier"></a></li>
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
<?php else : ?>
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
                    <li><a href="./our-technologie.php">Notre technologie</a></li>
                    <li><a href="./product.php">La semelle</a></li>
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
                        <a href="<?php echo './my-account.php'; ?>">
                            <!-- <img src="./assets/img/icons/icon_user.svg" width="25" alt="Mon compte"> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 32 32" fill="none">
                                <path d="M15.666 17.852C23.292 17.852 29.57 23.664 30.503 31.168H31.028C29.775 22.843 23.386 17.568 15.687 17.568C7.98899 17.568 1.59899 22.842 0.347992 31.168H0.827992C1.76399 23.665 8.04099 17.852 15.666 17.852Z" stroke="black" stroke-width="0.6" stroke-miterlimit="10" />
                                <path d="M15.688 17.523C11.194 17.523 7.53799 13.869 7.53799 9.37499C7.53799 4.87799 11.194 1.22299 15.688 1.22299C20.185 1.22299 23.838 4.87799 23.838 9.37499C23.839 13.869 20.186 17.523 15.688 17.523Z" fill="#0d56a1" />
                                <path d="M15.689 17.707C20.2939 17.707 24.027 13.974 24.027 9.36901C24.027 4.76406 20.2939 1.03101 15.689 1.03101C11.084 1.03101 7.35098 4.76406 7.35098 9.36901C7.35098 13.974 11.084 17.707 15.689 17.707Z" stroke="black" stroke-miterlimit="10" />
                            </svg>
                        </a>
                    </li>
                    <!-- End User -->

                    <!-- Cart -->
                    <li><a href="./checkout.php"><img src="./assets/img/icons/icon_cart.svg" width="25" alt="Panier"></a></li>
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