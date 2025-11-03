<?php
/**
 * En-tête personnalisé pour le thème Drake
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Times+New+Roman:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class('drake-pleine-largeur'); ?>>
<?php wp_body_open(); ?>

<div id="conteneur-page-drake">
    <header class="en-tete-drake">
        <div class="conteneur-drake">
            <a href="#" class="logo">DRAKE</a>
            <nav class="navigation-principale">
                <a href="#albums">Musique</a>
                <a href="#tournee">Tournée</a>
                <a href="#bio">Biographie</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>