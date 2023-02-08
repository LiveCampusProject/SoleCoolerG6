<?php

/*
     *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
     *  Puis on insère les élements redondants footer nav et header 
     */

$js = "";
$css = "./css/main.css";
$titre = "SoleCooler - Panier";
$bodyId = "checkout";
require_once("./inc/head.php");
require_once("./inc/header.php");
?>

<main>

    <div class="container space-arround-m">
        <h1>Mon panier</h1>

        <!-- List Of Product -->
        <div class="product-list">

            <!-- Product -->
            <div class="product">
                <div class="cover">
                    <img src="./assets/img/products/climfeet/SoleCooler - Climfeet.png" alt="Climfeet">

                    <div>
                        Référence : <span>SCBB2022</span>
                    </div>
                </div>

                <div class="info">
                    <div class="category">Semelles</div>
                    <div class="name">Climfeet</div>
                    <div class="label">Classique</div>
                    <div class="qty">
                        <div>Quantité</div>
                        <input type="number" name="qty" id="qty" min="0" step="1">
                    </div>
                </div>

                <div class="action">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M12.1875 1.875H17.8125C18.3303 1.875 18.75 2.29473 18.75 2.8125V4.6875H11.25V2.8125C11.25 2.29473 11.6697 1.875 12.1875 1.875ZM20.625 4.6875V2.8125C20.625 1.2592 19.3658 0 17.8125 0H12.1875C10.6342 0 9.375 1.2592 9.375 2.8125V4.6875H4.6981C4.69173 4.68744 4.68535 4.68744 4.67895 4.6875H2.8125C2.29473 4.6875 1.875 5.10723 1.875 5.625C1.875 6.14277 2.29473 6.5625 2.8125 6.5625H3.822L5.42093 26.549C5.57684 28.4979 7.20388 30 9.15899 30H20.841C22.7961 30 24.4232 28.4979 24.5791 26.549L26.178 6.5625H27.1875C27.7053 6.5625 28.125 6.14277 28.125 5.625C28.125 5.10723 27.7053 4.6875 27.1875 4.6875H25.321C25.3147 4.68744 25.3083 4.68744 25.3019 4.6875H20.625ZM24.297 6.5625L22.71 26.3995C22.6321 27.374 21.8186 28.125 20.841 28.125H9.15899C8.18143 28.125 7.36791 27.374 7.28996 26.3995L5.703 6.5625H24.297ZM10.2574 8.43912C10.7743 8.40871 11.218 8.80307 11.2484 9.31995L12.1859 25.2574C12.2163 25.7743 11.8219 26.218 11.3051 26.2484C10.7882 26.2788 10.3445 25.8844 10.3141 25.3676L9.37662 9.43005C9.34621 8.91318 9.74058 8.46952 10.2574 8.43912ZM19.7426 8.43912C20.2594 8.46952 20.6538 8.91318 20.6234 9.43005L19.6859 25.3676C19.6555 25.8844 19.2118 26.2788 18.6949 26.2484C18.1781 26.218 17.7837 25.7743 17.8141 25.2574L18.7516 9.31995C18.782 8.80307 19.2257 8.40871 19.7426 8.43912ZM15 8.4375C15.5178 8.4375 15.9375 8.85723 15.9375 9.375V25.3125C15.9375 25.8303 15.5178 26.25 15 26.25C14.4822 26.25 14.0625 25.8303 14.0625 25.3125V9.375C14.0625 8.85723 14.4822 8.4375 15 8.4375Z" fill="black" fill-opacity="0.2" />
                        </svg>
                    </a>

                    <div class="price">80,00 €</div>
                </div>
            </div>
            <!-- End Product -->

        </div>
        <!-- End List Of Product -->

        <div class="summary">
            <ul>
                <li>
                    <span>Produits</span>
                    <span>75,00 €</span>
                </li>
                <li>
                    <span>TVA</span>
                    <span>14,00 €</span>
                </li>
                <li>
                    <span>Livraison</span>
                    <span>Offerte</span>
                </li>
                <li class="total">
                    <span>Total</span>
                    <span>89,00 €</span>
                </li>
            </ul>

            <a href="#" class="button-2 pay">Payer</a>
        </div>

    </div>

</main>


<?php
require_once("./inc/footer.php");
?>