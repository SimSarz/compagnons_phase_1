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
    wp_enqueue_script( 'cartes_v2',"/wp-content/themes/compagnons/js/cartes_v2.js", array("jquery"), "1.0.0",  array( 'strategy' => 'defer'));
};

add_action( 'wp_enqueue_scripts','files' );

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

add_action('init', function() {
    register_post_type( 'new-evenement', array(
        'labels' => array(
            'name' => 'new-evenements',
            'singular-name' => 'new-evenement'
        ),
        'has-archive' => false,
        'public' => true,
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

    //TRANSFERT EVENEMENTS FROM PHP TO JS 

    function enqueue_custom_script() {
        // Enqueue your script
        wp_enqueue_script('carts_v2', get_template_directory_uri() . '/js/cartes_v2.js', array('jquery'), null, true);
    
        // Query your custom posts of type 'new-evenement'
        $args = array(
            'post_type' => 'new-evenement',
            'posts_per_page' => -1, // Retrieve all posts
        );
    
        $custom_posts = new WP_Query($args);
    
        // Extract and prepare data for JavaScript
        $posts_data = array();
        if ($custom_posts->have_posts()) {
            while ($custom_posts->have_posts()) {
                $custom_posts->the_post();
    
                // Get custom fields or post data as needed
                $post_data = array(
                    'titre' => get_field('titre'),
                    'date' => get_field('date'),
                    'lieu' => get_field('lieu'),
                    'artiste' => get_field('artiste'),
                    'desc' => get_field('desc'),
                    'disciplines' => get_field('disciplines'),
                    'gratuit' => get_field('gratuit'),
                    'familial' => get_field('familial'),
                    'jour_semaine' => get_field('jour_semaine'),
                    'jour'=> get_field('date_jour'),
                    'mois' => get_field('date_mois'),
                    'heure' => get_field('heure'),
                    'img' => get_field('image'),
                    'alt' => get_field('alt')
                );
    
                $posts_data[] = $post_data;
            }
            wp_reset_postdata();
        }
    
        // Pass the data to the script
        wp_localize_script('cartes_v2', 'custom_posts_data', $posts_data);
    }
    
    add_action('wp_enqueue_scripts', 'enqueue_custom_script');
    

?>