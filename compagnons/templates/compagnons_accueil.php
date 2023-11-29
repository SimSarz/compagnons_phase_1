<?php
/* Template Name: compagnons accueil */
?>

<?php get_header(); ?>

<main class="main">
    <!--Banniere-->
    <div class="mission_banner">
        <div class="mission_banner_title_container accueil_compagnons_banner">
            <p>notre organisme</p>
            <h2 class="h1">les compagnons</h2>
        </div>
        <div class="mission_banner_img_container">
            <img src="<?php bloginfo("template_url") ?>/images/mission_banner_img.png" alt="photo antique de femmes">
        </div>
    </div>
    <!-- Contenu du main -->
    <div class="main_content accueil_main_content accueil_compagnons_main">
        <div class="notre_equipe_container">
            <div class="notre_equipe_container_imgs">
                <img src="<?php bloginfo("template_url") ?>/images/Spiral_compagnons.png" alt="trait en spiral" class="spiral_compagnons">
                <img src="<?php bloginfo("template_url") ?>/images/berube.png" alt="photo du forgeron Bérubé" class="forgeron_compagnons">
            </div>
            <div class="notre_equipe_container_text">
                <h3 class="h3-cursive equipe_title sub_section_h3">notre equipe</h3>

                <p class="textblock-plus">Les Compagnons, c’est une petite équipe toute l’année, qui s’agrandit au moment de préparer son festival de contes et récits le Rendez-vous des Grandes Gueules. Nous sommes fières de mener de l’avant des projets et spectacles qui permettent de mettre en valeur...</p>
                <a href="" class="sub_section_link">En savoir plus</a>

        </div>
    </div>
        <div class="notre_mission_container">
            <div class="notre_mission_container_text">
                <h3 class="h3-cursive mission_title sub_section_h3">notre mission</h3>

                <p class="textblock-plus">Les Compagnons de la mise en valeur du patrimoine vivant de Trois-Pistoles est un organisme à but non lucratif qui a pour mission de voir à la préservation, la recherche, la mise en valeur et la diffusion du patrimoine vivant et plus particulièrement...</p>
                <a href="" class="sub_section_link">En savoir plus</a>

            </div>
            <div class="notre_mission_container_imgs">
                <img src="<?php bloginfo("template_url") ?>/images/spring_compagnons.png" alt="ressort" class="spring_compagnons">
                <img src="<?php bloginfo("template_url") ?>/images/mr-chapeau.png" alt="photo du forgeron Bérubé" class="monsieur_compagnons">
            </div>
        </div>
        <div class="notre_histoire_container">
            <div class="notre_histoire_container_imgs">
                <img src="<?php bloginfo("template_url") ?>/images/Dawn_compagnons.png" alt="étoile" class="dawn_compagnons">
                <img src="<?php bloginfo("template_url") ?>/images/cheval_compagnons.png" alt="photo de cheval" class="cheval_compagnons">
            </div>
            <div class="notre_histoire_container_text">
                <h3 class="h3-cursive histoire_title sub_section_h3">notre histoire</h3>
                <p class="textblock-plus">L’histoire débute avant même la fondation de l’organisme les Compagnons de la mise en valeur du patrimoine vivant de Trois-Pistoles. En 1997, l’équipe fondatrice travaille à l’organisation de spectacles et d’événements reliés au conte. La même année, ...</p>
                <a href="<?php echo get_home_url(); ?>/les_compagnons/notre_histoire/" class="sub_section_link">En savoir plus</a>
            </div>
        </div>
        <div class="nos_projets_container">
            <div class="nos_projets_container_text">
                <h3 class="h3-cursive projets_title sub_section_h3">nos projets</h3>

                <p class="textblock-plus">Découvrez les projets présents en passés que mènent les Compagnons!</p>
                <a href="#" class="sub_section_link">En savoir plus</a>

            </div>
            <div class="nos_projets_container_imgs">
                <img src="<?php bloginfo("template_url") ?>/images/Spiral_inversed_compagnons.png" alt="ressort" class="inversed_spiral_compagnons">
                <img src="<?php bloginfo("template_url") ?>/images/marins.png" alt="photo de margins blessés" class="marins_compagnons">
            </div>
        </div>
        <div class="nos_partenaires_container">
            <div class="nos_partenaires_container_imgs">
                <img src="<?php bloginfo("template_url") ?>/images/Spiral_compagnons.png" alt="trait en spiral" class="spiral_compagnons_2">
                <img src="<?php bloginfo("template_url") ?>/images/berube.png" alt="photo du forgeron Bérubé" class="forgeron_compagnons_2">
            </div>
            <div class="nos_partenaires_container_text">
                <h3 class="h3-cursive partenaires_title sub_section_h3">nos partenaires</h3>

                <p class="textblock-plus">La mission des Compagnons ne pourrait être remplie sans le soutien de nos partenaires. Découvrez qui ils sont ici!</p>

                <a href="<?php echo get_home_url(); ?>/nos-partenaires" class="sub_section_link">En savoir plus</a>
            </div>
        </div>
</main>


<?php get_footer(); ?>