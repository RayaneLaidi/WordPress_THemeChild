<?php
/**
 * Fonctions du thème enfant Drake
 */

if (!defined('ABSPATH')) {
    exit;
}

// Chargement des styles
add_action('wp_enqueue_scripts', 'charger_styles_enfant', 15);

function charger_styles_enfant() {
    wp_enqueue_style('style-parent-astra', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('style-enfant-drake', get_stylesheet_uri(), array('style-parent-astra'));
}

// Fonction pour désactiver le header/footer Astra sur la page d'accueil
add_action('wp', 'desactiver_astra_accueil');

function desactiver_astra_accueil() {
    if (is_front_page()) {
        remove_action('astra_header', 'astra_header_markup');
        remove_action('astra_footer', 'astra_footer_markup');
    }
}