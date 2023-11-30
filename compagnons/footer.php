<?php
/* Footer Template */
?>
<footer>
    <!-- bannière infolettre -->
    <div class="infolettre_banner">
        <div class="infolettre_banner_content_container">
            <div class="infolettre_banner_content_container_left_content">
                <img src="<?php bloginfo("template_url"); ?>/images/infolettre_left_img.png" alt="personnages">
            </div>
            <div class="infolettre_banner_content_container_mid_content">
                <h3>NE MANQUEZ AUCUNE NOUVELLE!</h3>
                <h4>Abonnez-vous à notre infolettre!</h4>
                <div class="btn_container">
                    <a href="https://app.cyberimpact.com/clients/7636/subscribe-forms/2E65C2F6-39A0-46A5-96F6-5803B9460CD4"><button class="sub_btn btn-cta white2black"><span class="btn-default">s'abonner</span></button></a>
                </div>
            </div>
            <div class="infolettre_banner_content_container_right_content">
                <img src="<?php bloginfo("template_url"); ?>/images/infolettre_right_img.png" alt="Cheval">
            </div>
        </div>
    </div>
    <!-- bannière festival responsable -->
    <div class="eco_banner">
        <div class="eco_banner_container">
            <h3>Vers un festival responsable</h3>
            <p class="textblock">Il est vitale pour nous de respecter nos valeurs dans chaque sphère de notre organisme. Malheureusement, le monde de l’événementiel est reputé pour son impact environnemental. C’est pourquoi nous avons créer une politique pour assurer que notre festival est le plus responsable possible, tant au plan environnemental qu’humain. </p>
            <a class="btn-link no-bg-white" href="<?php echo get_home_url(); ?>/festival-responsable/">En savoir plus ➔</a>
        </div>
    </div>
    <!-- footer navigation -->
    <div class="footer_nav">
        <!-- footer navigation menu -->
        <div class="footer_nav_left_content">
            <div class="footer_nav_left_content_left_column">
                <div class="footer_nav_left_content_left_column_compagnons_nav">
                    <div class="footer_green_title">
                        <h4>LES COMPAGNONS</h4>
                    </div>
                    <ul>
                        <li><a href='<?php bloginfo("template_url") ?>/compagnons_equipe'>NOTRE ÉQUIPE</a></li>
                        <li><a href='<?php bloginfo("template_url") ?>/notre_mission'>NOTRE MISSION</a></li>
                        <li><a href='<?php echo get_home_url(); ?>/notre_histoire'>NOTRE HISTOIRE</a></li>
                        <li><a href='<?php echo get_home_url(); ?>/nos-partenaires'>NOS PARTENAIRES</a></li>
                        <li><a href='<?php bloginfo("template_url") ?>/nos_projets'>NOS PROJETS</a></li>
                    </ul>
                </div>
                <div class="footer_nav_left_content_left_column_forge_nav">
                    <div class="footer_green_title">
                        <h4>LES FORGE À BÉRUBÉ</h4>
                    </div>
                    <ul>
                        <li><a href='<?php bloginfo("template_url") ?>/la_forge_en_action'>LA FORGE EN ACTION</a></li>
                        <li><a href='<?php bloginfo("template_url") ?>/evenements_a_venir'>ÉVÉNEMENTS À VENIR</a></li>
                        <li><a href='https://lepointdevente.com/les-compagnons-de-la-mise-en-valeur-du-patrimoine-vivant-de-troi'>BILLETERIE</a></li>
                    </ul>
                </div>
                <div class="footer_nav_left_content_left_column_ventDeParole_nav">
                    <div class="footer_green_title">
                        <h4>VENTS DE PAROLES</h4>
                    </div>
                    <div class="footer_nav_single_link">
                        <a href='<?php bloginfo("template_url") ?>/evenements_a_venir'>PRÉSENTATIONS À VENIR</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer contact et réseau -->
        <div class="footer_nav_right_content">
            <div class="footer_nav_right_content_contact_infos">
                <div class="btn_container">
                    <button onclick="location.href='<?php echo get_home_url(); ?>/contact'" class="footer_nav_right_content_contact_infos_contact_btn btn-cta alpha2pink"><span class="btn-default"><span class="btn-default" >nous contacter</span></span></button>
                </div>
                <div class="footer_nav_right_content_contact_infos_address_tel_email_container">
                    <p><i class="bi bi-geo-alt-fill"></i>  <a href="https://www.google.com/maps/place/363+Rue+V%C3%A9zina,+Trois-Pistoles,+QC+G0L+4K0/@48.1233184,-69.1769267,17z/data=!3m1!4b1!4m6!3m5!1s0x4c95f548240ef039:0x280fd7bc6d0809f!8m2!3d48.1233148!4d-69.1743518!16s%2Fg%2F11cndddc6l?entry=ttu">363 Rue Vézina, Trois-Pistoles, QC G0L 4K0</a></p>
                    <p><i class="bi bi-telephone-fill"></i> <a href="tel:4188573248">(418) 857-3248</a></p>
                    <p><i class="bi bi-envelope-at"></i>  <a href="mailto:compagnonspatrimoinevivant@gmail.com">compagnonspatrimoinevivant@gmail.com</a></p>
                </div>
            </div>
            <div class="footer_nav_right_content_reseaux">
                <h3>SUIVEZ-NOUS!</h3>
                <div class="footer_nav_right_content_reseaux_footer_icons">
                    <img src='<?php bloginfo("template_url"); ?>/images/ici.png' alt='ici'> <a href='https://www.facebook.com/contesrecits/'><i class="bi bi-facebook" aria-label="icone facebook"></i></a>
                    <a href='https://www.instagram.com/compagnons3p/'><i class="bi bi-instagram" aria-label="icone instagram"></i></a><img src='<?php bloginfo("template_url"); ?>/images/et-ici.png' alt='et-ici'>
                </div>  
            </div>
        </div>
    </div>
</footer>