<?php
/* Template Name: la bavarde */
?>

<?php get_header(); ?>

<main class="main">
        <!--Banniere-->
    <div class="main_banner">
        <div class="rdv_banner festival_banner">
            <div class="rdv_banner_title_container">
                <h2 class="h1">La Bavarde</h2>
                <p>bière officielle</p>
            </div>
            <div class="rdv_banner_img_container">
                <img src="<?php bloginfo("template_url") ?>/images/rdv_banner_img.png" alt="conteur d'histoire">
            </div>
        </div>
    </div>
    <!-- Contenu du main -->
    <section class="main_content">
        <quote class="h2-cursive bavarde_quote">Les braises ne s’étaient jamais vraiment éteintes. Après le départ du forgeron Bérubé, ce sont les mots qui ont rougeoyé dans la nuit.</quote>
        <div class="bavarde_top_content">
            <div class="bavarde_infos_container_text bavarde_top_text">
                <p class="textblock bavarde_text">Constellations incandescentes tantôt chuchotées, tantôt réclamées avec l’écho d’une fête rassembleuse, depuis plus de vingt-cinq ans émerveillent petites et grandes oreilles.</p>
                <p class="textblock bavarde_text">Les artisans qui œuvrent au projet de microbrasserie <span class="bold_text">Le Caveau des Trois-Pistoles</span> sont fiers d’abreuver le cœur de la parole populaire pistoloise d’ici et d’ailleurs avec <span class="bold_text">La Bavarde</span>. Cette bière chaleureuse et intense rappelle par ses notes fumées qu’il n’y a pas de braises sans feu, le feu sacré du conte qui se répercute sur les papilles des langues déliées.</p>
            </div>
            <img src="<?php bloginfo("template_url") ?>/images/bieres.png" alt="photo de différentes bières">
        </div>
        <div class="bavarde_bottom_content">
            <div class="bavarde_infos_container_text bavarde_bottom_content">
                <div class="bavarde_bottom_content_texts">
                    <quote class="h2-cursive bavarde_quote"> ❝Ça l’air que si tu bois assez de bavarde, tu deviens conteur!❞</quote>
                    <p class="textblock bavarde_text">La Bavarde est servie à la Forge à Bérubé pendant le Rendez-vous des Grandes Gueules, elle est disponible à la microbrasserie <a href="https://caveau3pistoles.com/">Le Caveau des Trois-Pistoles.</a></p> 
                </div>
                <img src="<?php bloginfo("template_url") ?>/images/bavarde_couleur.png" alt="photo de la bière la bavarde" class="bavarde_photo_couleur">
            </div>
        </div>
    </section>
    </main>
    <?php get_footer(); ?>