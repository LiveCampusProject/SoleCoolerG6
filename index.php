<?php 

    /*
     *  On définie le path de tout les fichiers nécéssaires et le titre de notre page 
     *  Puis on insère les élements redondants footer nav et header 
     */

    $js = "";
    $css ="./css/main.css";
    $titre = "SoleCooler";
    require_once("./inc/head.php");
    require_once("./inc/header.php");
    require_once("./inc/nav.php");
    require_once("./inc/footer.php");

?>

    <main>
      <article>
        <h1 data-i18n="title">How To Cook A Juicy Chicken Breast</h1>
        <p data-i18n="content">
          There’s a big difference between juicy chicken breasts and rubbery
          chicken breasts. Obviously, you want to avoid the latter at all costs.
          Follow these 4 steps and you’re gold. You want to add protein to
          favorites like Caesar salad or fix up a quick chicken salad or club
          sandwich? Try this method and savor the results.
        </p>
      </article>
      <aside>
        <h2 data-i18n="ingredients.title">Ingredients</h2>
        <ul>
          <li data-i18n="ingredients.$0">1 pound boneless chicken breasts</li>
          <li data-i18n="ingredients.$1">2 teaspoons olive oil</li>
          <li data-i18n="ingredients.$2">salt and pepper</li>
        </ul>
      </aside>
    </main>