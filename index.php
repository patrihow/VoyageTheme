<?php

get_header(); ?>




<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/hero.jpg') ?>)"></div>
      <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--medium">Bienvenue voyageuse</h1>

        <h3 class="headline headline--small">Club de voyage</h3>

      </div>
    </div>


<section class="articles-voyages">
  <h2>Les tendances du moment</h2>
  <div class="grille">
      <article class="carte">
          <header>
              <img src="images/islande.jpg" alt="Une destination du monde">
              <h3>Nouvelle récente #1</h3>
          </header>
          <p>Phrase introduisant la fiche. Devrait en synthétiser le contenu sur deux lignes.</p>
          <a class="bouton" href="#">Un lien vers une page tierce</a>
      </article>
      <article class="carte">
          <header>
              <img src="images/islande.jpg" alt="Une destination du monde">
              <h3>Nouvelle récente #1</h3>
          </header>
          <p>Phrase introduisant la fiche. Devrait en synthétiser le contenu sur deux lignes.</p>
          <a href="#">Un lien vers une page tierce</a>
      </article>
      <article class="carte">
          <header>
              <img src="images/islande.jpg" alt="Une destination du monde">
              <h3>Nouvelle récente #1</h3>
          </header>
          <p>Phrase introduisant la fiche. Devrait en synthétiser le contenu sur deux lignes.</p>
          <a href="#">Un lien vers une page tierce</a>
      </article>
  </div>
</section>

    <div class="full-width-split group">
      <div class="full-width-split__one">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Événements à venir</h2>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Mar</span>
              <span class="event-summary__day">25</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Voyager seule : Conseils et astuces</a></h5>
              <p>Viens échanger avec d'autres voyageuses! Rejoins-nous pour une session d'inspiration et de conseils pour voyager en toute sécurité et confiance.
                <a href="#" class="nu gray">En savoir plus</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Apr</span>
              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Voyages exotiques</a></h5>
              <p>Découvre des destinations de rêve adaptées aux voyageuses solo. On parlera des meilleures options de voyage pour les femmes qui cherchent aventure et sécurité. <a href="#" class="nu gray">En savoir plus</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--blue">Voir tous les événements</a></p>
        </div>
      </div>
      <div class="full-width-split__two">
        <div class="full-width-split__inner">
          <h2 class="headline headline--small-plus t-center">Sur notre blog</h2>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Jan</span>
              <span class="event-summary__day">20</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Top destinations pour les voyageuses solo</a></h5>
              <p>Découvrez les meilleures destinations pour voyager en solo. De l'Asie à l'Amérique du Sud, voici nos choix pour des voyages sûrs et mémorables.<a href="#" class="nu gray">En savoir plus</a></p>
            </div>
          </div>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Fév</span>
              <span class="event-summary__day">04</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Voyager avec un petit budget : Nos conseils</a></h5>
              <p>Voyager à petit prix est possible ! Lisez nos astuces pour explorer le monde sans vous ruiner, de la planification à l'hébergement.  <a href="#" class="nu gray">En savoir plus</a></p>
            </div>
          </div>

          <p class="t-center no-margin"><a href="#" class="btn btn--yellow">Voir tous les articles</a></p>
        </div>
      </div>
    </div>

    <div>

    </div>

    <div class="hero-slider">
      <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/femme-mountains.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Mont Blanc</h2>
                <p class="t-center">Un sommet majestueux à 8 642 pieds d'altitude</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">En savoir plus</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/rivier.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Thaïlande</h2>
                <p class="t-center">Un endroit magique où la nature reprend ses droits.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Découvre la Thaïlande</a></p>
              </div>
            </div>
          </div>
          <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/maldives-femme.jpg') ?>)">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Maldives</h2>
                <p class="t-center">Prête à plonger dans ce rêve tropical ?</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Découvre Maldives</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
      </div>
    </div>




<?php get_footer();

?>