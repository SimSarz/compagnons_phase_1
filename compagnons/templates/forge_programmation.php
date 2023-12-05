<?php
/* Template Name: programmation */
?>

<?php get_header(); ?>

<main class="main">
    <div class="infos_banner">
        <div class="infos_banner_img_container">
            <img src="<?php bloginfo("template_url") ?>/images/infos_banner_img.png" alt="photo antique de la forge">
        </div>  
        <div class="infos_banner_title_container">
            <h2 class="h1">programmation</h2>
        </div>
    </div>
    <!-- Contenu du main -->
    <div id="programmation" class="programmation main_content">
        <section class="programmation_filters">
            <button class="programmation_filters_toggleBtn">
                <span class="material-symbols-outlined filters-icon">tune</span>
            </button>
            <div class="programmation_filters_container">
                <div class="programmation_filters_container_searchBar">
                    <div class="programmation_filters_searchBar_icon"><span class="material-symbols-outlined filters-icon">search</span></div>
                    <input class="programmation_filters_searchBar_input" type="text" id="search" name="search" placeholder="Recherche par mots-clés">
                </div>
                <div class="programmation_filters_container_datePicker datepicker-toggle">
                    <span class="datepicker-toggle-button"><span class="material-symbols-outlined">calendar_month</span> <span class="datepicker-toggle-button-text">Filtrer par date</span></span>
                    <input class="programmation_filters_container_datePicker_datePicker datepicker-input" type="date" name="date_event" id="date_event">
                </div>
                <div class="programmation_filters_container_dropdown">
                    <select class="programmation_filters_container_dropdown_select" name="discipline" id="discipline">
                        <option value="all">Filtrer par disciplines</option>
                        <option value="conte">Conte</option>
                        <option value="theatre">Théâtre</option>
                        <option value="musique">Musique</option>
                        <option value="poesie">Poésie</option>
                        <option value="humour">Humour</option>
                        <option value="conference">Conférence</option>
                        <option value="autre">Autre</option>
                    </select>
                </div>
                <div class="programmation_filters_container_checkboxes"> 
                    <label class="programmation_filters_container_checkbox checkbox-container" for="gratuit"><span class="label">Gratuit</span>
                        <input type="checkbox" id="gratuit" name="gratuit" value="gratuit">
                        <span class="checkmark"></span>
                    </label>
                    <label class="programmation_filters_container_checkbox checkbox-container label" for="familial"><span class="label">familial</span>
                        <input type="checkbox" id="familial" name="familial" value="familial">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </div>
        </section>
        <p id="alerte" class="programmation_evenements_alerte">Aucun résultat &#128546;</p>
        <p id="noEvent" class="programmation_evenements_alerte">Aucun événement à venir</p>
        <section class="programmation_evenements">
            <?php 
                $events = get_posts(array(
                    'post_type' => 'new-evenement',
                    'numberposts' => -1
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

        </section>
    </div>
</main>

<?php get_footer(); ?>