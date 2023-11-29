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
    <div class="programmation_main_corr main_content">
            <div class="programmation">
                <div class="programmation_filters">
                    <div class="programmation_filters_searchBar">
                        <div class="programmation_filters_search_icon"><span class="material-symbols-outlined filters-icon">search</span></div>
                        <input class="programmation_filters_searchBar_input" type="text" id="search" name="search" placeholder="Recherche par mots-clés">
                    </div>
                    <div class="programmation_filters_box">
                        <div class="programmation_filters_box_top">
                            <p class="box_top_title h3">Filtres</p>
                            <button class="box_top_button">
                                <span class="material-symbols-outlined box_top_icon">close</span>
                            </button>
                        </div>
                        <div class="programmation_filters_box_content">
                            <div class="box_content_dateBox">
                                <input class="box_content_dateBox_input" type="date" name="date_event" id="date_event">
                            </div>
                            <div class="box_content_disciplineBox">
                                <select class="box_content_disciplineBox_input" name="discipline" id="discipline">
                                    <option value="all">Toutes les discipline</option>
                                    <option value="Conte">Conte</option>
                                    <option value="Musique">Musique</option>
                                    <option value="Poésie">Poésie</option>
                                    <option value="Humour">Humour</option>
                                </select>
                            </div>
                            <div class="box_content_checkBoxContainer">
                                <div class="box_content_checkBoxContainer_box">
                                    <label for="gratuit">Gratuit </label>
                                    <input class="freeCheckboxBtn" type="checkbox" id="gratuit" name="option" value="gratuit">
                                </div>
                                <div class="box_content_checkBoxContainer_box">
                                    <label for="familial">Familiale </label>
                                    <input type="checkbox" id="familial" name="option" value="familial">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="programmation_filters_button">
                        <button class="programmation_filters_button_icon">
                            <span class="material-symbols-outlined filters-icon">tune</span>
                        </button>
                    </div>
                </div>

                <div class="container_programmation_cardBox">
                    <div class="programmation_cardBox">
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
                </div>

            </div>
    </div>
</main>

<?php get_footer(); ?>