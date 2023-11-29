<?php

function files() {
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_script("main", "/wp-content/themes/compagnons/js/main.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script("accueil", "/wp-content/themes/compagnons/js/accueil.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script("accueil_rdv", "/wp-content/themes/compagnons/js/accueil_rdv.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script("_accordion", "/wp-content/themes/compagnons/js/classes/_accordion.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script("_header", "/wp-content/themes/compagnons/js/classes/_header.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script('accueil_compagnons', "/wp-content/themes/compagnons/js/accueil_compagnons.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script('_accordion2', "/wp-content/themes/compagnons/js/classes/_accordion2.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script('_programmation', "/wp-content/themes/compagnons/js/classes/_programmation.js", array(), "",  array( 'strategy' => 'defer'));
    wp_enqueue_script( '_header-minifier',"/wp-content/themes/compagnons/js/classes/_header-minifier.js", array("jquery"), "1.0.0",  array( 'strategy' => 'defer'));
};

add_action( 'wp_enqueue_scripts', 'files' );

function my_acf_json_load_point( $paths ) {
    unset($paths[0]);

    $paths[] = get_stylesheet_directory() . '/acf-json';

    return $paths;    
}
add_filter( 'acf/settings/load_json', 'my_acf_json_load_point' ); 


add_action( 'init', function() {
	register_post_type( 'membre-festival', array(
        'labels' => array(
            'name' => 'Membres de l&#039;équipe du festival',
            'singular_name' => 'Membre de l&#039;équipe du festival',
            'menu_name' => 'Membres de l&#039;équipe du festival',
            'all_items' => 'All cartes_employe',
            'edit_item' => 'Éditer la carte de l&#039;employé',
            'view_item' => 'Voir la carte de l&#039;employé',
            'view_items' => 'Voir les cartes des employés',
            'add_new_item' => 'Ajouter une carte d&#039;employé',
            'new_item' => 'Nouvelle carte employé',
        ),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array(
            0 => 'title',
            1 => 'thumbnail',
            2 => 'id'
        ),
        'delete_with_user' => false,
    ) );
} );


    //SETTING LOGO

    function logo_setup(){
        add_theme_support("custom-logo", array(
            "width" => 473,
            "height" => 204,
            "flex-width" => true,
            "flex-height" => true,
        ));
    };

    add_action("after_setup_theme", "logo_setup");

?>