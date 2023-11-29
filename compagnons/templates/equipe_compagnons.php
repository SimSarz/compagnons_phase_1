<?php
/* Template Name: equipe compagnons */
?>

<?php get_header(); ?>

<main class="main">
        <!--Banniere-->
        <div class="mission_banner">
            <div class="mission_banner_title_container">
                <h2 class="h1">notre équipe</h2>
            </div>
            <div class="mission_banner_img_container">
                <img src="<?php bloginfo("template_url")?>/images/mission_banner_img.png" alt="photo antique de femmes">
            </div>
        </div>
        <!-- Contenu du main -->
        <div class="main_content main_equipe">
            <section class="equipe_intro_section">
                <h2 class="h2-cursive">L'équipe</h2>
                <p class="textblock">Les Compagnons, c’est une petite équipe toute l’année, qui s’agrandit au moment de préparer son festival de contes et récits le Rendez-vous des Grandes Gueules. Nous sommes fières de mener de l’avant des projets et spectacles qui permettent de mettre en valeur la culture et le patrimoine vivant de Trois-Pistoles et ses environs. </p>
            </section>
            <section class="membres_principaux">
                
                <?php
                    $membres = get_posts(array(
                        'post_type' => 'employe-equipe',
                        'numberposts' => -1
                    ));
                ?>
                <?php foreach($membres as $membre):
                    $nom = get_field('nom_equipe', $membre->ID);
                    $poste = get_field('poste_equipe', $membre->ID);
                    $courriel = get_field('courriel_equipe', $membre->ID);
                    $tel = get_field('num_telephone_equipe', $membre->ID);
                    $image = get_field('photo_equipe', $membre->ID);
                    $image_url = esc_url($image['url']);
                    $image_alt = esc_attr($image['alt']);
                ?>
                <?php get_template_part("template-part/carte_equipe_permanente", null, array(
                    "nom" => $nom,
                    "poste" => $poste,
                    "courriel" => $courriel,
                    "tel" => $tel,
                    "img_url" => $image_url,
                    "alt" => $image_alt
                )); ?>
                <?php endforeach; ?>

            </section>
            <section class="conseil_admin">
                <h2 class="h2-cursive">Le conseil d'administration</h2>
                <p class="textblock">Les orientations stratégiques et financières de l’organisme sont guidées par notre conseil d’administration. L’ancrage de notre conseil dans la communauté locale facilite la conciliation de nos activités avec les besoins et spécificités de notre milieu.</p>
                <div class="conseil_admin_membres">
                    <?php
                        $membres = get_posts(array(
                            'post_type' => 'membre-ca',
                            'numberposts' => -1
                        ));
                    ?>
                    <?php foreach($membres as $membre):
                    $nom = get_field('nom_complet_CA', $membre->ID);
                    $titre = get_field('titre_CA', $membre->ID);
                    ?>
                    <? get_template_part('template-part/membre_ca', null, array(
                        'nom' => $nom,
                        'titre' => $titre
                    ));
                    ?>
                    <?php endforeach ?>
                </div>
            </section>
        </div>
    </main>
    <?php get_footer(); ?>