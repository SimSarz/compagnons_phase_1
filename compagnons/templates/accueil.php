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
        <section class="accueil">
            <section class="accueil_programmation">
                <h3 class="accueil_programmation_titre h2-cursive">Événements à venir</h3>
                <p id="noEvent" class="programmation_evenements_alerte">Aucun événement à venir</p>
                <div class="accueil_programmation_container">
                    <?php 
                        $events = get_posts(array(
                            'post_type' => 'new-evenement',
                            'numberposts' => -1,
                        ));
                    ?>
                    <?php foreach($events as $event):
                        $titre = get_field('titre', $event->ID);
                        $date = get_field('date', $event->ID);
                        $jour = get_field('date_jour', $event->ID);
                        $mois = get_field('date_mois', $event->ID);
                        $jour_semaine = get_field('jour_semaine', $event->ID);
                        $heure = get_field('heure', $event->ID);
                        $lieu = get_field('lieu', $event->ID);
                        $artiste = get_field('artiste', $event->ID);
                        $desc = get_field('desc', $event->ID);
                        $img = get_field('image', $event->ID);
                        $alt = get_field('alt', $event->ID);
                        $disciplines = get_field('disciplines', $event->ID);
                        $gratuit = get_field('gratuit', $event->ID);
                        $prix = get_field('prix', $event->ID);
                        $familial = get_field('familial', $event->ID);
                    ?>
                    <?php get_template_part('template-part/carte_events_v2', null, array(
                        'titre' => $titre,
                        'date' => $date,
                        'jour' => $jour,
                        'mois' => $mois,
                        'jour_semaine' => $jour_semaine,
                        'heure' => $heure,
                        'lieu' => $lieu,
                        'artiste' => $artiste,
                        'desc' => $desc,
                        'img' => $img,
                        'alt' => $alt,
                        'disciplines' => $disciplines,
                        'gratuit' => $gratuit,
                        'prix' => $prix,
                        'familial' => $familial
                    ));?>
                    <?php endforeach; ?>
                </div>
                <div class="accueil_programmation_links-container">
                    <a class="accueil_programmation_link--billeterie" href="https://lepointdevente.com/les-compagnons-de-la-mise-en-valeur-du-patrimoine-vivant-de-troi" aria-label="Acheter des billets"><img class="btn-ticket" src="<?php bloginfo('template_url'); ?>/images/billet_mockup.png" alt="Acheter des billets"</a>
                    <a class="accueil_programmation_link--programmation" href="<?php echo get_home_url(); ?>/evenements_a_venir"><button class="accueil_programmation_link--programmation_btn"><span class="texte">aller au calendrier</span><span class="material-symbols-outlined section_event_bottom_link_btn section_event_bottom_link_btn_plus_icon">arrow_right_alt</span></button></a>
                </div>
            </section>
            <section class="accueil_video">
                <div class="accueil_video_banner">
                    <h4 class="h4">RENDEZ-VOUS DES GRANDES GUEULES</h4>
                    <p class="textblock"><time datetime="2023">2023</time>, la 27e édition!</p>
                </div>
                <video class="accueil_video_container" controls preload="none" poster="<?php bloginfo('template_url'); ?>/images/video_poster.png">
                    <source src="<?php bloginfo("template_url") ?>/images/video_rvgg_long_low-res.mp4">
                </video>
            </section>
            <div class="accueil_carrousel">
                <h4 class="accueil_carrousel_titre">Les meilleurs moments de notre dernière édition</h4>
                <div class="accueil_carrousel_container">
                    <?php echo do_shortcode('[smartslider3 slider="2"]'); ?> 
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>