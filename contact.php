<?php

/*
     *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
     *  Puis on insère les élements redondants footer nav et header 
     */

$js = "";
$css = "./css/main.css";
$titre = "SoleCooler";
$bodyId = "contact";
require_once("./inc/head.php");
require_once("./inc/header.php");
?>

<main>
    <div class="container space-arround-m">
        <h1>Contact & Coordonnées</h1>
        <p>Des questions ? Une demande ?</p>
    </div>

    <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11735.525998187966!2d2.9095206!3d42.6638665!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8851953bbdba21b8!2sSolecooler!5e0!3m2!1sen!2sfr!4v1675692172203!5m2!1sen!2sfr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="infos container space-arround-p">
            <div class="grid">
                <div class="card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="59" height="58" viewBox="0 0 59 58" fill="none">
                        <path d="M4.08686 49.7982C-11.3915 28.5319 20.1135 -12.2732 48.1036 5.27161C83.0913 27.2026 24.4023 77.7103 4.08686 49.7982Z" fill="#E7F3FD" />
                        <g clip-path="url(#clip0_336_5749)">
                            <path opacity="0.989" fill-rule="evenodd" clip-rule="evenodd" d="M28.0958 -0.0488281C29.3328 -0.0488281 30.5697 -0.0488281 31.8067 -0.0488281C38.7528 0.956663 43.717 4.63505 46.6993 10.9863C48.1106 14.5021 48.4362 18.1154 47.6758 21.8262C46.6946 25.7136 45.1972 29.392 43.1837 32.8613C39.9931 38.33 36.3472 43.4732 32.2462 48.291C31.7513 48.9325 31.1817 49.4858 30.5372 49.9512C30.1465 49.9512 29.7559 49.9512 29.3653 49.9512C28.7208 49.4858 28.1511 48.9325 27.6563 48.291C23.5552 43.4732 19.9093 38.33 16.7188 32.8613C14.7052 29.392 13.2078 25.7136 12.2266 21.8262C10.9627 14.7068 13.0298 8.7661 18.4278 4.00391C21.2656 1.73875 24.4882 0.387838 28.0958 -0.0488281ZM28.7794 9.0332C32.7789 8.7785 35.8224 10.341 37.9102 13.7207C39.8172 17.8575 39.1824 21.5521 36.0059 24.8047C32.78 27.4124 29.2969 27.803 25.5567 25.9766C21.9177 23.6612 20.4366 20.3572 21.1133 16.0645C22.2258 12.1357 24.7812 9.79199 28.7794 9.0332Z" fill="#0C579D" />
                        </g>
                        <defs>
                            <clipPath id="clip0_336_5749">
                                <rect width="50" height="50" fill="white" transform="translate(5)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <p>SoleCooler</p>
                    <p>
                        280 Rue James Watt
                        <br>
                        Site 21 Tecnosud Bât plot A
                        <br>
                        66 100 Perpignant
                        <br>
                        France
                    </p>

                </div>

                <div class="card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="59" height="57" viewBox="0 0 59 57" fill="none">
                        <path d="M4.08686 48.7982C-11.3915 27.5319 20.1135 -13.2732 48.1036 4.27161C83.0913 26.2026 24.4023 76.7103 4.08686 48.7982Z" fill="#E7F3FD" />
                        <g clip-path="url(#clip0_336_5750)">
                            <path opacity="0.99" fill-rule="evenodd" clip-rule="evenodd" d="M12.0762 -0.0488281C15.722 -0.0488281 19.3679 -0.0488281 23.0137 -0.0488281C24.9003 0.520265 25.9583 1.78979 26.1875 3.75977C26.2041 7.03272 26.7249 10.2229 27.75 13.3301C27.9175 14.3632 27.7548 15.3397 27.2617 16.2598C25.6711 18.3181 24.0923 20.3851 22.5254 22.4609C24.7654 26.85 27.8579 30.5284 31.8027 33.4961C33.2972 34.5337 34.8434 35.494 36.4414 36.377C38.4108 34.8633 40.3802 33.3496 42.3496 31.8359C43.0915 31.3654 43.9053 31.1213 44.791 31.1035C46.6117 31.5098 48.4347 31.9167 50.2598 32.3242C52.1065 32.5828 53.962 32.7456 55.8262 32.8125C57.439 33.2698 58.4807 34.2952 58.9512 35.8887C58.9512 39.5345 58.9512 43.1804 58.9512 46.8262C58.4629 48.4212 57.4212 49.4629 55.8262 49.9512C54.5892 49.9512 53.3522 49.9512 52.1152 49.9512C36.1136 48.5021 23.8577 41.0152 15.3477 27.4902C11.5822 21.0857 9.45008 14.1847 8.95117 6.78711C8.95117 5.55013 8.95117 4.31315 8.95117 3.07617C9.43945 1.48112 10.4811 0.439453 12.0762 -0.0488281Z" fill="#0C579D" />
                        </g>
                        <defs>
                            <clipPath id="clip0_336_5750">
                                <rect width="50" height="50" fill="white" transform="translate(9)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <p>+33 (0)7 56 99 85 04</p>
                    <p>
                        Notre ligne téléphonique est
                        <br>
                        ouverte du lundi au vendredi
                        <br>
                        de 9h30 à 18h
                    </p>

                </div>

                <div class="card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="67" height="58" viewBox="0 0 67 58" fill="none">
                        <path d="M4.08674 49.7989C-11.3916 28.5326 28.5099 -12.5438 56.5 5.00096C91.4877 26.9319 24.4022 77.711 4.08674 49.7989Z" fill="#E7F3FD" />
                        <g clip-path="url(#clip0_336_5751)">
                            <path opacity="0.992" fill-rule="evenodd" clip-rule="evenodd" d="M55.9512 9.81446C55.9512 10.4655 55.9512 11.1165 55.9512 11.7676C55.6692 12.8498 55.0833 13.745 54.1934 14.4531C47.3574 19.0105 40.5215 23.5677 33.6855 28.125C31.8626 29.2317 30.0397 29.2317 28.2168 28.125C21.3809 23.5677 14.5449 19.0105 7.70898 14.4531C6.81907 13.745 6.23313 12.8498 5.95117 11.7676C5.95117 11.1165 5.95117 10.4655 5.95117 9.81446C6.50804 7.87438 7.77758 6.68622 9.75977 6.25C23.8874 6.1849 38.0149 6.1849 52.1426 6.25C54.1236 6.68571 55.3932 7.87385 55.9512 9.81446Z" fill="#0C579D" />
                            <path opacity="0.994" fill-rule="evenodd" clip-rule="evenodd" d="M5.95117 16.6504C13.0265 21.3325 20.0903 26.0362 27.1426 30.7617C29.6816 32.1289 32.2207 32.1289 34.7598 30.7617C41.812 26.0362 48.8758 21.3325 55.9512 16.6504C55.9512 24.4629 55.9512 32.2754 55.9512 40.0879C55.3932 42.0285 54.1236 43.2166 52.1426 43.6523C38.0149 43.7175 23.8874 43.7175 9.75977 43.6523C7.77758 43.2161 6.50804 42.0279 5.95117 40.0879C5.95117 32.2754 5.95117 24.4629 5.95117 16.6504Z" fill="#0C579D" />
                        </g>
                        <defs>
                            <clipPath id="clip0_336_5751">
                                <rect width="50" height="50" fill="white" transform="translate(6)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <p>info@solecooler.com</p>
                    <p>
                        Pour toute question
                        <br>
                        ou toute demande
                        <br>
                        d’information
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="space-arround-m">Nous contacter en un seul clic</h2>

        <form id="contact-form" action="">

            <div class="input">
                <label>
                    <div>Prénom <span class="req">*</span></div>
                    <input type="text" name="firstname" id="firstname" placeholder="Votre prénom" require>
                </label>
            </div>

            <div class="input">
                <label>
                    <div>Nom <span class="req">*</span></div>
                    <input type="text" name="lastname" id="lastname" placeholder="Votre Nom" require>
                </label>
            </div>

            <div class="input">
                <label>
                    <div>E-mail <span class="req">*</span></div>
                    <input type="email" name="email" id="email" placeholder="Votre e-mail" require>
                </label>
            </div>

            <div class="input">
                <label>
                    <div>N° de téléphone</div>
                    <input type="tel" name="tel" id="tel" placeholder="Votre numéro de téléphone">
                </label>
            </div>

            <div class="input">
                <label>
                    <div>Objet</div>
                    <select name="object" id="object">
                        <option value="pro">Je suis un PRO</option>
                        <option value="informations">Demande d'informations</option>
                    </select>
                </label>
            </div>

            <div class="input">
                <label>
                    <div>Message <span class="req">*</span></div>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message" require></textarea>
                </label>
            </div>

            <div>
                <input class="button-2" type="submit" value="Envoyer">
            </div>
        </form>
    </div>
    

    <svg xmlns="http://www.w3.org/2000/svg" width="270" height="289" viewBox="0 0 270 289" fill="none">
      <path opacity="0.8" d="M256.224 74.9165C171.241 -47.8657 44.7927 17.2534 0 17.2534V150.5V286.754C83.6492 307.346 330.577 182.341 256.224 74.9165Z" fill="#E3F0FD" />
    </svg>

    <svg xmlns="http://www.w3.org/2000/svg" width="267" height="289" viewBox="0 0 267 289" fill="none">
      <path opacity="0.8" d="M270 17.2534V286.754C186.351 307.346 -60.577 182.341 13.7762 74.9165C98.7591 -47.8658 225.207 17.2533 270 17.2534Z" fill="#FBE5E4" />
    </svg>


</main>

<?php
require_once("./inc/footer.php");
?>