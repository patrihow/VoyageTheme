<!DOCTYPE html>
<html lang="fr">
  <head>
    <?php wp_head(); ?>
  </head>
  <body>

  <header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url() ?>" class="logo">
            <img src="images/logo-blanc.png" alt="Logo Traveli">
            Club de <strong>Voyage</strong>
          </a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
            <li><a href="<?php echo site_url('/a-propos-de-nous') ?>">À propos de nous</a></li>
              <li><a href="#">Aventure</a></li>
              <li><a href="#">Croisière</a></li>
              <li><a href="#">Culturel</a></li>
              <li><a href="#">Économique</a></li>
              <li><a href="#">Pleine nature</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <!-- <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a> -->
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>