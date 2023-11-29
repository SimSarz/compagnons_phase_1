<?php
/* Template Name: equipe festival */
?>

<?php get_header(); ?>

<main class="main">
    <?php get_template_part("/template-part/banniere_equipe_festival") ?>
    <!-- Contenu du main -->
    <div class="main_content main_equipe">
        <p class="textblock-plus equipe_intro">Les Compagnons, c’est une petite équipe toute l’année, qui s’agrandit au moment de préparer son festival de contes et récits le Rendez-vous des Grandes Gueules. Voici l’équipe en charge des festivités cette année:</p>
        <img src="<?php bloginfo("template_url"); ?>/images/zigzag_separateur.png" class="zigzag_separateur" alt="séparateur en forme de zigzag">
        <div class="equipe_cards_container">
            <?php
                $membres = get_posts(array(
                    'post_type' => 'membre-festival',
                    'numberposts' => -1
                ));
            ?>
            <?php foreach ($membres as $membre):
                $nom = get_field('nom_employe', $membre->ID);
                $image = get_field('photo_de_lemploye', $membre->ID);
                $image_url = esc_url($image['url']);
                $image_alt = esc_attr($image['alt']);
                $poste = get_field('poste_employe', $membre->ID);
            ?>
            <?php get_template_part(
                "template-part/carte_employe", 
                null,
                array(
                    "nom" => $nom,
                    'img_url' => $image_url,
                    'alt' => $image_alt,
                    'poste' => $poste
                )
                ); ?>
            <?php endforeach; ?>
                
            
        </div>
    </div>
</main>

<?php get_footer(); ?>