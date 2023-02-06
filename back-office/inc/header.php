<?php 
  session_start(); 
  if (!isset($_SESSION['loggedin'])): 
?>


<header>
  <div class="sidebar">
      <div class="sidebar_header">
        <img src="../../assets/img/general/Logo-SoleCooler-white.png" alt="">
      </div>

      <div class="sidebar_menu">
        <a href="../index.php" class="sidebar_item">
          <div class="sidebar_icon">
            <i class="fa-solid fa-house"></i>
          </div>
          <h4>Accueil</h4>
        </a>
        <a href="/back-office/produits/index.php" class="sidebar_item">
          <div class="sidebar_icon">
            <i class="fa-solid fa-shoe-prints"></i>
          </div>
          <h4>Produits</h4>
        </a>
        <a href="/back-office/avis/index.php" class="sidebar_item">
          <div class="sidebar_icon">
            <i class="fas fa-comments"></i>
          </div>
          <h4>Avis</h4>
        </a>
        <a href="/back-office/commandes/index.php" class="sidebar_item">
          <div class="sidebar_icon">
            <i class="fas fa-shopping-cart"></i>
          </div>
          <h4>Commandes</h4>
        </a>
        <a href="/back-office/utilisateurs/index.php" class="sidebar_item">
          <div class="sidebar_icon">
            <i class="fas fa-users"></i>
          </div>
          <h4>Utilisateurs</h4>
        </a>
      </div>
  </div>

</header>
<?php endif ?>