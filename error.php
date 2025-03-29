<?php
get_header(); 


?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/page-interne-photo.jpg'); ?>)"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">Erreur 404</h1>
        <div class="page-banner__intro">
            <p>La page est inexistante</p>
        </div>
    </div>
</div>

<div class="container container--narrow page-section">
    <div class="generic-content">
        <p>Désolé, la page que vous recherchez n'existe pas. Veuillez vérifier l'URL ou retourner à la page d'accueil.</p>
    </div>
</div>

<?php
get_footer(); 
?>