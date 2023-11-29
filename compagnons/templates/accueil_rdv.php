<?php
/* Template Name: accueil_rdv */
?>

<?php get_header(); ?>

<main class="main">
        <!--Banniere-->
        <div class="main_banner">
            <div class="rdv_banner festival_banner">
                <div class="rdv_banner_title_container">
                    <p>notre festival</p>
                    <h2 class="h1">Le Rendez-vous des Grandes Geules</h2>
                </div>
                <div class="rdv_banner_img_container">
                    <img src="<?php bloginfo("template_url") ?>/images/rdv_banner_img.png" alt="conteur d'histoire">
                </div>
            </div>
        </div>
        <!-- Contenu du main -->
        <section class="video_section">
                <video class="video_element" autoplay muted preload="auto"  loop=true>
                    <source src="<?php bloginfo("template_url") ?>/images/video_rvgg_court.mp4">
                </video>
                <div class="video_banner">
                    <h3 class="date-festival">Le festival est terminée</h3>
                    <p class="annonce-prog">Restez à l'affût pour la prochaine édition !</p>
                </div>
        </section>
        <div class="main_content main_content_rdv accueil_main_content">
            <div class="accueil_intro">
                <p class="introduction textblock">Le Rendez-vous des Grandes Gueules est le festival de contes et de récits de la francophonie de Trois-Pistoles. Il se tient toutes les années au début du mois d’octobre. Le Rendez-vous présente annuellement une programmation de spectacles de contes et d’événements mettant à l’honneur les arts de la parole vivante. À chaque édition du festival, c’est une ambiance particulière qui transforme la ville de Trois-Pistoles, où tout le monde devient un peu artiste, acteur, conteuse, personnage, ami.e.s.</p>
                <h3>Un festival pour découvrir des artistes du conte du Québec et d’ailleurs</h3>
                <p class="intro_sub_paragraph textblock">Le festival le Rendez-vous des Grandes Gueules, c’est aussi un tremplin incroyable pour une multitude de conteurs et conteuses qui foulent les planches de ses scènes année après année. C’est un rendez-vous pour la découverte de nouveaux artistes des mots, mais aussi pour s’émerveiller des nouvelles créations, sortir de l’ordinaire, retrouver le conte dans toute sa splendeur. Le conte traditionnel s’y retrouve, il côtoie le conte moderne, jeune, actuel. C’est que les histoires millénaires ou naissantes peuvent choquer, faire réfléchir, faire rire, faire pleurer. Le conte résonne.</p>
                <h3>Une histoire de plus de deux décennies</h3>
                <p class="intro_sub_paragraph textblock">Pendant ces deux décennies ont défilé, à Trois-Pistoles et dans toute la région, des centaines de conteurs et conteuses du Québec et de tous les horizons culturels de la francophonie, qui nous ont invité.e.s à partager avec eux et elles une partie de leur imaginaire. La Forge à Bérubé, devenue à travers ces années un lieu mythique de rassemblement culturel, a vu passer des milliers de festivalier.e.s qui ont plongé avec enthousiasme dans un répertoire diversifié offrant la vastitude des cultures au sein d’histoires toujours rassembleuses. Les arbres aux couleurs rougissantes sont, depuis maintenant 26 ans, l’annonce excitante que les murmures d’histoires s'amplifieront jusqu’à envahir les salles, les rues et vos oreilles!</p>
                <h3>Les partenaires fidèles du festival</h3>
                <p class="intro_sub_paragraph textblock">Ces 26 dernières années n’auraient pu être possible sans l’appui de nos fidèles partenaires, ainsi que l’aide précieuse de nos bénévoles. Ils, elles font en sorte que l’offre culturelle de Trois-Pistoles soit en aussi bonne santé, et aussi reconnue. Un immense merci à elles-eux!</p>
            </div>
            <div class="derniere_edition_imgs">
                <p class="les_meilleurs_moments">Les meilleurs moments de notre dernière édition</p>
                <div class="images_container">
                <?php echo do_shortcode('[smartslider3 slider="4"]');?>  
                </div>
                <a href="<?php bloginfo("template_url") ?>/gallerie_media">Voir la galerie ➔</a>
            </div>
    </main>

    <?php get_footer(); ?>