<?php
/* Template Name: accueil */
?>

<?php get_header(); ?>

<main class="main accueil_main">
        <div class="liens_filiere">
            <a href="<?php echo get_home_url(); ?>/compagnons_accueil" class="filiere_banner_compagnons">
                <div class="compagnons_filiere_filter"></div>
                <div class="filiere_banner_compagnons_titles_container">
                    <p class="prior_title">NOTRE ORGANISME</p>
                    <h2 class="h2 filiere_title">LES COMPAGNONS</h2>
                    <p class="after_title">DE LA MISE EN VALEUR DU PATRIMOINE VIVANT DE TROIS-PISTOLES</p>
                </div>
            </a>
            <a href='<?php echo get_home_url(); ?>/accueil_forge' class="filiere_banner_forge">
                <div class="forge_filiere_filter"></div>
                <div class="filiere_banner_forge_titles_container">
                    <p class="prior_title">NOTRE SALLE</p>
                    <h2 class="h2 filiere_title">LA FORGE À BÉRUBÉ</h2>
                </div>
            </a>
            <a href="<?php echo get_home_url(); ?>/accueil-rendez-vous" class="filiere_banner_rdv">
                <div class="rdv_filiere_filter"></div>
                <div class="filiere_banner_rdv_titles_container">
                    <p class="prior_title">NOTRE FESTIVAL</p>
                    <h2 class="h2 filiere_title">RENDEZ-VOUS DES GRANDES GEULES</h2>
                </div>
            </a>
            <a href="<?php echo get_home_url(); ?>/accueil-vents-de-parole" class="filiere_banner_vents">
                <div class="vents_filiere_filter"></div>
                <div class="filiere_banner_vents_titles_container">
                    <p class="prior_title">NOTRE PROGRAMMATION ESTIVALE</p>
                    <h2 class="h2 filiere_title">VENTS DE PAROLE</h2>
                </div>
            </a>
        </div>
        <div class="liens_baniere">
            <a href="<?php echo get_home_url(); ?>/compagnons_accueil" class="link_banner_compagnons">
                <div class="link_banner_titles_container">
                    <p class="prior_title">NOTRE ORGANISME</p>
                    <h2 class="h2 filiere_title">LES COMPAGNONS</h2>
                    <p class="after_title">DE LA MISE EN VALEUR DU PATRIMOINE VIVANT DE TROIS-PISTOLES</p>
                </div>
            </a>
            <a href="<?php echo get_home_url(); ?>/accueil_forge" class="link_banner_forge">
                <div class="link_banner_titles_container">
                    <p class="prior_title">NOTRE SALLE</p>
                    <h2 class="h2 filiere_title">LA FORGE À BÉRUBÉ</h2>
                </div>
            </a>
            <a href="<?php echo get_home_url(); ?>/accueil-rendez-vous" class="link_banner_rdv">
                <div class="link_banner_titles_container">
                    <p class="prior_title">NOTRE FESTIVAL</p>
                    <h2 class="h2 filiere_title">RENDEZ-VOUS DES GRANDES GEULES</h2>
                </div>
            </a>
            <a href="<?php echo get_home_url(); ?>/accueil-vents-de-parole" class="link_banner_vents">
                <div class="link_banner_titles_container">
                    <p class="prior_title">NOTRE PROGRAMMATION ESTIVALE</p>
                    <h2 class="h2 filiere_title">VENTS DE PAROLE</h2>
                </div>
            </a>
        </div>
        <section class="prog_widget">
            <h3 class="accueil_section_event_title h2-cursive">Événement à venir</h3>
            <div class="accueil_section_event">
                <?php 
                                $events = get_posts(array(
                                    'post_type' => 'evenement',
                                    'numberposts' => -1 
                                ));
                                ?>

                                <?php foreach($events as $event) : 
                                $title = get_field('eventtitle', $event -> ID);
                                $desc = get_field('description_de_levenement', $event -> ID);
                                $date = get_field('date_de_levenement', $event -> ID);
                                $jour = get_field('jour_de_levenement', $event -> ID);
                                $lieu = get_field('lieu', $event -> ID);
                                $heure = get_field('heure', $event -> ID);
                                $prix = get_field('prix', $event -> ID);
                                $billeterie = get_field('billeterie', $event -> ID);
                                $image = get_field('event_img', $event -> ID);

                                $image_url = esc_url($image['url']);
                                $image_alt = esc_attr($image['alt']);

                                $discipline = get_field('discipline', $event->ID);
                                $free_option = get_field('free_option', $event->ID);
                                $familiale_option = get_field('familiale_option', $event->ID);
                                $data_date = get_field('data_date', $event->ID);
                                ?>

                                <?php get_template_part('template-part/carte_evenement', null, array(
                                    "title" => $title,
                                    "desc" => $desc,
                                    "date" => $date,
                                    "jour" => $jour,
                                    "lieu" => $lieu,
                                    "heure" => $heure,
                                    "prix" => $prix, 
                                    "billeterie" => $billeterie,
                                    "image" => $image,
                                    "image_url" => $image_url,
                                    "image_alt" => $image_alt,
                                    "discipline" => $discipline,
                                    "free_option" => $free_option,
                                    "familiale_option" => $familiale_option,
                                    "data_date" => $data_date
                                ));     
                                ?>

                <?php endforeach; ?>
            </div>
            <div class="accueil_section_event_bottom">
                <a class="btn-link section_event_bottom_button" href="">Acheter des billets <span class="material-symbols-outlined section_event_bottom_link_btn">arrow_right_alt</span></a>
                <a class="btn-link accueil_section_event_bottom_link section_event_bottom_link_btn_plus " href="">Voir plus <span class="material-symbols-outlined section_event_bottom_link_btn section_event_bottom_link_btn_plus_icon">arrow_right_alt</span></a>
            </div>
        </section>

        <section class="accueil_section_video">
            <div class="accueil_video_black_banner">
                <h4 class="h4">RENDEZ-VOUS DES GRANDES GUEULES</h4>
                <p class="textblock"><time datetime="2023">2023</time>, la 27e édition!</p>
            </div>
            <div class="accueil_video_container">
            <video class="video_accueil" controls preload="auto">
                    <source src="<?php bloginfo("template_url") ?>/images/video_rvgg_long_low-res.mp4">
            </video>
        </section>
        <div class="derniere_edition_imgs">
            <p class="les_meilleurs_moments">Les meilleurs moments de notre dernière édition</p>
            <div class="images_container">
                <?php echo do_shortcode('[smartslider3 slider="2"]'); ?> 
            </div>
            <a href="<?php bloginfo("template_url") ?>/galerie_media" class="galerie-link">Voir la galerie ➔</a>
        </div>
    </main>

    <?php get_footer(); ?>