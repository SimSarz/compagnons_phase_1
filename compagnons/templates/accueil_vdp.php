<?php
/* Template Name: accueil_vdp */
?>

<?php get_header(); ?>

<main class="main">
    <!--Banniere-->
    <div class="vdp_banner">
        <div class="vdp_banner_left_img_container">
            <img src="<?php bloginfo("template_url") ?>/images/vdp_banner_left_img.png" alt="photo d'église">
        </div>  
        <div class="vdp_banner_title_container">
            <h2>vents de paroles</h2>
        </div>
        <div class="vdp_banner_right_img_container">
            <img src="<?php bloginfo("template_url") ?>/images/vdp_banner_right_img.png" alt="3 lignes courbes">
        </div>  
    </div>
    <!-- Contenu du main -->
    <div class="main_content">
        <div class="vdp_content">
            <section class="vdp_intro">
                <p class="vdp_content_pres textblock-plus">Depuis 2020, les Compagnons de la mise en valeur du patrimoine vivant de Trois-Pistoles proposent chaque été les Vents de Paroles, une programmation hebdomadaire gratuite d’arts de la parole vivante. Chaque mercredi soir de juillet et d’août, aux lueurs du soleil couchant, conteuses, conteurs, poètes, écrivain.e.s et autres artistes de la parole s’invitent au cœur de Trois-Pistoles pour bercer le public de mots, d’histoires et de poésies. Un moment pour se retrouver ensemble dans l'intimité de l'imagination d'artistes dotés du pouvoir de faire voyager, en soi-même et au-delà.</p>
            </section>
            <section class="vdp_content_infos">
                <div class="vdp_content_textBox">
                    <h4 class="h4-underlined">Spectacles extérieurs gratuits</h4>
                    <p class="textblock-nomp">Sauf indications contraires, la majorité des spectacles aura lieu en plein air au parc de l’église Notre-Dame-des-Neiges de Trois-Pistoles, au 30, rue Notre-Dame Est. En cas de mauvais temps, les spectacles seront déplacés à la Forge à Bérubé au 363, rue Vézina, à Trois-Pistoles. Tous les spectacles sont gratuits!</p>
                </div>

                <div class="vdp_content_textBox">
                    <h4 class="h4-underlined">Micros-ouverts</h4>
                    <p class="textblock-nomp">Les performances sont généralement suivies par un joyeux et désormais traditionnel micro-ouvert. Tous et toutes peuvent se délier la langue sous les étoiles de la belle saison entouré.e.s d’un public attentif et chaleureux.</p>
                </div>

                <div class="vdp_content_textBox">
                    <h4 class="h4-underlined">Habillez-vous chaudement</h4>
                    <p class="textblock-nomp">L’audience est invitée à apporter une couverture ou une chaise pour bien profiter des festivités en plein-air, et à s’habiller chaudement pour une soirée confortable même après le coucher du soleil!</p>
                </div>

                <div class="vdp_content_textBox">
                    <h4 class="h4-underlined">Merci à nos partenaires</h4>
                    <p class="textblock-nomp">Les Vents de paroles sont réalisés dans le cadre du Vent gourmand 2023 qui ont lieu grâce à de nombreux partenaires, soit la Ville de Trois-Pistoles, la Municipalité de Notre-Dame-des-Neiges, la SADC des Basques, la MRC des Basques, la Caisse Desjardins des Basques, Tourisme/CLD des Basques, la Chambre de commerce Trois-Pistoles/Notre-Dame-des-Neiges et Viens Vivre les Basques Bas-Saint-Laurent.</p>
                </div>
            </section>
            <div class="vdp_content_zigzagContainer">
                <img src="<?php bloginfo("template_url") ?>/images/zigzag_separateur.png" class="zigzag_separateur" alt="séparateur en forme de zigzag">
            </div>
                <div class="derniere_edition_imgs vdp_img_carousel">
                    <p class="les_meilleurs_moments">souvenirs d'un été venteux...</p>
                    <div class="images_container">
                        <?php echo do_shortcode('[smartslider3 slider="3"]');?> 
                    </div>
                </div>
            </div>
    </div>
</main>
<?php get_footer(); ?>