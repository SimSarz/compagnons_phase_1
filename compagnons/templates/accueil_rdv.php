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
                    <h3 class="date-festival">27e ÉDITION DU 2 AU 8 OCTOBRE 2023</h3>
                    <p class="annonce-prog">Restez à l’affût de la programmation!</p>
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
            <div class="accueil_icon_links_section">
                <div class="accueil_icon_links_section_programmation">
                    <img src="<?php bloginfo("template_url") ?>/images/icone_accueil_programmation.jpg" alt="icone programmation">
                    <h3 class="h3">Programmation 2023</h3>

                    <p class="textblock">Découvrez tous les spectacles et activités qui vous attendent pour cette édition!</p>
                    <a href="#">En savoir plus</a>

                </div>
                <div class="accueil_icon_links_section_lieux">
                    <img src="<?php bloginfo("template_url") ?>/images/icone_accueil_lieux.jpg" alt="icone lieux du festival">
                    <h3 class="h3">Lieux du festival</h3>

                    <p class="textblock">Le Rendez-vous des Grandes Gueules se déroule principalement dans le coeur de Trois-Pistoles, mais saviez-vous qu'il s'épivarde aussi aux quatres coins du Bas-Saint-Laurent? Trouvez ici tous les détails concernant les lieux du festival!</p>
                    <a href="#">En savoir plus</a>

                </div>
                <div class="accueil_icon_links_section_artistes">
                    <img src="<?php bloginfo("template_url") ?>/images/icone_accueil_artistes.jpg" alt="icone_artiste">
                    <h3 class="h3">Artistes</h3>

                    <p class="textblock">Faites connaissances avec les artistes qui participeront à cette édition du festival: conteurs, conteuses, mais aussi musicien·nes, animatrices et plus encore!</p>
                    <a href="#">En savoir plus</a>

                </div>
            </div>
            <div class="section_billetterie">
                <h2 class="h2-cursive">Billetterie</h2>
                <div class="billetterie_banner">
                    <p class="textblock">Procurez-vous vos billets et passes sur notre billetterie en ligne sur le site lepointdevente.com ou contactez-nous au <span>418-857-3248</span>!</p>
                        <img class="billet_arrow" src="<?php bloginfo("template_url") ?>/images/billetterie_arrow.png" alt="flèche qui pointe vers un billet">
                        <a href="https://lepointdevente.com/les-compagnons-de-la-mise-en-valeur-du-patrimoine-vivant-de-troi">
                            <img class="billet_mockup" src="<?php bloginfo("template_url") ?>/images/billet_mockup.png" alt="bouton acheter des billets">
                        </a>
                </div>
            </div>
            <div class="benevole_section">
                <img src="<?php bloginfo("template_url") ?>/images/benevole_img.png" alt="groupe de personne loup">
                <div class="benevole_section_banner">
                    <h2 class="h2-cursive">Envie de faire partie de notre gang?</h2>
                    <div class="benevole_section_banner_green_content">
                        <h3 class="h3">Implique toi en devenant bénévole!</h3>
                    </div>
                    <a href="<?php bloginfo("template_url") ?>/simpliquer" class="sub_section_link">En savoir plus ➔</a>
                </div>
            </div>
            <div class="menterie_container">
                <div class="menterie_container_imgs">
                    <img src="<?php bloginfo("template_url") ?>/images/spiral.png" alt="trait en spiral" class="spiral">
                    <img src="<?php bloginfo("template_url") ?>/images/berube.png" alt="photo du forgeron Bérubé" class="forgeron">
                </div>
                <div class="menterie_container_text">
                    <h3 class="h3-cursive mentir_green sub_section_h3">Savez-vous mentir?</h3>
                    <p class="textblock-plus">Inscrivez-vous au Concours International de la plus Grande Menterie de Trois-Pistoles! Le concours est ouvert à tous et à toutes, avec ou sans expérience! </p>
                    <a href="<?php bloginfo("template_url") ?>/simpliquer" class="sub_section_link">En savoir plus</a>

                </div>
            </div>
            <div class="prix-jb_container">
                <div class="prix-jb_container_text">
                    <h3 class="h3-cursive prix_green sub_section_h3">Prix Jocelyn Bérubé</h3>

                    <p class="textblock-plus">Depuis 2006, le festival est clôturé par la remise de l'Oscar du conte à un personnage important du monde du conte. Apprenez-en plus sur son origine et sur les récipiendaires antérieurs!</p>
                    <a href="<?php bloginfo("template_url") ?>/prix_jocelyn_berube" class="sub_section_link">En savoir plus</a>

                </div>
                <div class="prix-jb_container_imgs">
                    <img src="<?php bloginfo("template_url") ?>/images/spring.png" alt="ressort" class="spring">
                    <img src="<?php bloginfo("template_url") ?>/images/mr-chapeau.png" alt="photo du forgeron Bérubé" class="monsieur">
                </div>
            </div>
            <div class="bavarde_container">
                <div class="bavarde_container_imgs">
                    <img src="<?php bloginfo("template_url") ?>/images/Dawn.png" alt="étoile" class="dawn">
                    <img src="<?php bloginfo("template_url") ?>/images/bavarde_gris.png" alt="photo de la bière La Bavarde" class="bavarde_gris">
                </div>
                <div class="bavarde_container_text">
                    <h3 class="h3-cursive bavarde_green sub_section_h3">La Bavarde</h3>
                    <p class="textblock-plus">Découvrez ici l'histoire de la bière officielle du festival, brassée par la microbrasserie pistoloise Le Caveau des Trois-Pistoles! </p>
                    <a href="<?php echo get_home_url(); ?>/la-bavarde" class="sub_section_link">En savoir plus</a>
                </div>
            </div>
            <div class="responsable_container">
                <div class="responsable_container_text">
                    <h3 class="h3-cursive responsable_green sub_section_h3">Vers un festival responsable</h3>
                    <p class="textblock-plus">Il nous tient à coeur de toujours tendre vers un événment le plus écoresponsable possible. Apprenez en plus ici sur les actions prises par notre équipe pour réduire notre impact environnemental! </p>
                    <a href="#" class="sub_section_link">En savoir plus</a>

                </div>
                <div class="responsable_container_imgs">
                    <img src="<?php bloginfo("template_url") ?>/images/Spiral_inversed.png" alt="ressort" class="inversed_spiral">
                    <img src="<?php bloginfo("template_url") ?>/images/marins.png" alt="photo de margins blessés" class="marins">
                </div>
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