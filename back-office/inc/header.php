<?php 
  session_start(); 
  // if (!(is_user_logged_in())):
?>


<header>
  <div class="sidebar">

		<div class="toggle">
			<i class="bx bx-chevron-right"></i>
		</div>

		<div class="logo">
      <img src="../../assets/img/general/Logo SoleCooler.svg" alt="">
		</div>

		<nav>

			<div class="nav-title">
				Gestions
			</div>

			<ul>
        <a href="/back-office/index.php">
				  <li class="nav-item" id="accueil">
            <i class="fa-solid fa-house"></i>
            <span>Accueil</span>
          </li>
        </a>
        <a href="/back-office/actualites/index.php">
				  <li class="nav-item" id="actualites">
              <i class="fa-solid fa-newspaper"></i>
              <span>Actualités</span>
          </li>
        </a>
        <a href="/back-office/articles/index.php">
				  <li class="nav-item" id="articles">
            <i class="fa-solid fa-pen-to-square"></i>
            <span>Articles</span>
          </li>
        </a>
        <a href="/back-office/avis/index.php">
				  <li class="nav-item" id="avis">
            <i class="fas fa-comments"></i>
            <span>Avis</span>
          </li>
        </a>
        <a href="/back-office/commandes/index.php">
            <li class="nav-item" id="commandes">
              <i class="fas fa-shopping-cart"></i>
              <span>Commandes</span>
            </li>
          </a>
        <a href="/back-office/produits/index.php">
            <li class="nav-item" id="produits">
              <i class="fa-solid fa-shoe-prints"></i>
              <span>Produits</span>
            </li>
          </a>
        <a href="/back-office/utilisateurs/index.php">
          <li class="nav-item" id="utilisateurs">
            <i class="fas fa-users"></i>
            <span>Utilisateurs</span>
          </li>
        </a>
			</ul>

			<hr>

			<div class="nav-title">
				Compte
			</div>

			<ul>
        <a href="/back-office/utilisateurs/index.php">
          <li class="nav-item" id="logout">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span>Se déconnecter</span>
          </li>
        </a>
			</ul>

		</nav>

	</div>
</header>