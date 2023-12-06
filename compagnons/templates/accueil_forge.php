<?php
/* Template Name: accueil_forge */
?>

<?php get_header(); ?>

<main class="main">
    <!--Banniere-->
    <div class="main_banner">
        <div class="infos_banner">
            <div class="infos_banner_img_container">
                <img src="<?php bloginfo("template_url") ?>/images/infos_banner_img.png" alt="photo antique de la forge">
            </div>  
            <div class="infos_banner_title_container forge_banner_title">
                <p>notre salle</p>
                <h2 class="h1">la forge à Bérubé</h2>
            </div>
        </div>
    </div>
    <!-- Contenu du main -->
    <div class="main_content main_forge">
        <section class="forge_intro">
            <p class="textblock"><strong>La Forge à Bérubé</strong> a une histoire riche! Avant d'accueillir des spectacles et des événements culturels, le forgeron Louis-Philippe Bérubé y travaillait le métal et le bois. </p>
            <p class="textblock">Inspiré par l’histoire de ce lieu de paroles, d’échanges d’anecdotes et de rumeurs, l'organisme Les Compagnons de la mise en valeur du patrimoine vivant de Trois-Pistoles a décidé d’en faire en 1997 le lieu improbable du premier festival de contes du Bas-Saint-Laurent alors que le forgeron Bérubé y œuvre encore. À sa retraite, le forgeron Bérubé vend la Forge aux Compagnons, qui la transforment officiellement en une salle de spectacle professionnelle à Trois-Pistoles.</p>
        </section>
        <img src="<?php bloginfo("template_url") ?>/images/zigzag_separateur_rouge.png" alt="séparateur zigzag rouge" class="zigzag-rouge">
        <div class="section_billetterie">
            <h2 class="h2-cursive">Billetterie</h2>
            <div class="billetterie_banner">
                <p class="textblock">Pour acheter des billets pour un événement à la Forge à Bérubé, rendez-vous sur le site lepointdevente.com!</p>
                    <img class="billet_arrow" src="<?php bloginfo("template_url") ?>/images/billetterie_arrow.png" alt="flèche qui pointe vers un billet">
                    <a href="https://lepointdevente.com/les-compagnons-de-la-mise-en-valeur-du-patrimoine-vivant-de-troi">
                        <img class="billet_mockup" src="<?php bloginfo("template_url") ?>/images/billet_mockup.png" alt="bouton acheter des billets">
                    </a>
            </div>
        </div>
        <section class="infos_pratiques">
            <div class=infos_pratiques_title>
                <h3 class="h3-cursive">Informations pratiques</h3>
                <p class="textblock">Voici quelques informations pratiques pour votre visite à la salle de spectacle la Forge à Bérubé de Trois-Pistoles</p>
            </div>
            <div class="accordion accordion_compagnons ">
                <div class="accordion_button" tabindex="0">
                    <p class="accordion_text textblock-plus"><strong>Y-a-t-il du stationnement à la Forge à Bérubé?</strong></p>
                    <span class="material-symbols-outlined">expand_more</span>
                </div>
                <div class="accordion_dropdown">
                    <div class="accordion_dropdown_content">
                        <p class="textblock">La Forge n’a pas de stationnement privé.</p>
                        <br>
                        <p class="textblock">Il est possible de se stationner dans les rues avoisinantes, ou à quelques minutes de marche, au stationnement du <strong><a href="https://www.google.com/maps/place/Alimentation+Coop+Rimouski/@48.123331,-69.176924,15z/data=!4m2!3m1!1s0x0:0x9e23591669a25690?sa=X&ved=2ahUKEwjpp_LDmZj9AhVNk4kEHUbCDqgQ_BJ6BAhWEAg" tabindex="1">IGA</a></strong> ou de l'<strong><a href="https://www.google.com/maps/place/%C3%89glise+catholique+Notre-Dame-des-Neiges/@48.1251002,-69.1764029,17z/data=!3m1!4b1!4m6!3m5!1s0x4c95f5364fc5a8d5:0xac218d046e47cc0f!8m2!3d48.1250974!4d-69.1743592!16s%2Fg%2F1tdf0ysp?entry=ttu" tabindex="1">église</a></strong>.</p>
                    </div>
                </div>
            </div>
            <div class="accordion accordion_compagnons">
                <div class="accordion_button" tabindex="0">
                    <p class="accordion_text textblock-plus"><strong>Options de paiement</strong></p>
                    <span class="material-symbols-outlined">expand_more</span>
                </div>
                <div class="accordion_dropdown">
                    <div class="accordion_dropdown_content">
                        <p class="textblock">La Forge à Bérubé est équipée d’un appareil Square qui permet les paiements par carte de crédit et de débit, en plus de l’argent comptant.</p>
                    </div>
                </div>
            </div>
            <div class="accordion accordion_compagnons ">
                <div class="accordion_button" tabindex="0">
                    <p class="accordion_text textblock-plus"><strong>Accessibilité</strong></p>
                    <span class="material-symbols-outlined">expand_more</span>
                </div>
                <div class="accordion_dropdown">
                    <div class="accordion_dropdown_content">
                        <p class="textblock">La Forge est un bâtiment sans étage. La salle est accessible en fauteuil roulant, en passant par la porte de garage devant le bâtiment, pour éviter la petite marche menant au parterre.</p>
                        <br>
                        <p class="textblock">Par ailleurs, les toilettes ne sont pas accessibles. Pour toute inquiétude ou pour prévoir votre visite, n’hésitez pas à nous contacter.</p>
                        <p class="textblock"><a href="compagnonspatrimoinevivant@gmail.com" class="forge_contact_link" tabindex="1"><strong>compagnonspatrimoinevivant@gmail.com</strong></a></p>
                        <p class="textblock"><a href="tel:4188573248" class="forge_contact_link" tabindex="1"><strong>418-857-3248</strong></a></p>
                    </div>
                </div>
            </div>
            <div class="accordion accordion_compagnons">
                <div class="accordion_button" tabindex="0">
                    <p class="accordion_text textblock-plus"><strong>Location</strong></p>
                    <span class="material-symbols-outlined">expand_more</span>
                </div>
                <div class="accordion_dropdown">
                    <div class="accordion_dropdown_content">
                        <p class="textblock">La Forge est un bâtiment sans étage. La salle est accessible en fauteuil roulant, en passant par la porte de garage devant le bâtiment, pour éviter la petite marche menant au parterre.</p>
                        <br>
                        <p class="textblock">Il est possible de louer la Forge à Bérubé pour un événement public ou privé. La Forge à Bérubé est une salle formidable au cachet et à l'acoustique d'une qualité supérieure. C'est aussi une salle non conventionnelle, une ancienne boutique de forge convertie en salle de spectacle, ce qui amène charme et défis!</p>
                        <p class="textblock">Pour faire une demande de location ou pour obtenir plus d'informations, écrivez-nous! </p>
                        <p class="textblock"><a href="compagnonspatrimoinevivant@gmail.com" class="forge_contact_link" tabindex="1"><strong>compagnonspatrimoinevivant@gmail.com</strong></a></p>
                    </div>
                </div>
            </div>
        </section>
        <div class="notre_mission_container forge_action_container">
            <div class="notre_mission_container_text">
                <h3 class="h3-cursive mission_title sub_section_h3">La forge en action</h3>
                <p class="textblock-plus">La Forge à Bérubé a accueilli des centaines de performances artistiques. Des spectacles de contes, de musique et de théâtre aux soirées cinéma, en passant par un gala de lutte et des lancements de livres, la Forge ne dort presque jamais! La salle est reconnue pour son acoustique exceptionnelle, pour son cachet unique et pour la qualité de son public.</p>
                <a href="<?php bloginfo("template_url") ?>/la_forge_en_action" class="sub_section_link">En savoir plus</a>
            </div>
            <div class="notre_mission_container_imgs">
                <img src="<?php bloginfo("template_url") ?>/images/spring_compagnons.png" alt="ressort" class="spring_compagnons">
                <img src="<?php bloginfo("template_url") ?>/images/mr-chapeau.png" alt="photo du forgeron Bérubé" class="monsieur_compagnons">
            </div>
        </div>
</main>

<?php get_footer(); ?>