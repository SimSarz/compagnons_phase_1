<?php
/* Template Name: nos_partenaires */
?>

<?php get_header(); ?>

<main class="main">
        <!--Banniere-->
        <div class="mission_banner">
            <div class="mission_banner_title_container">
                <h2 class="h1">nos partenaires</h2>
            </div>
            <div class="mission_banner_img_container">
                <img src="<?php bloginfo("template_url") ?>/images/mission_banner_img.png" alt="photo antique de femmes">
            </div>
        </div>
        <!-- Contenu du main -->
        <div class="main_content main_equipe">
            <section class="partenaires_or">
                <h3 class="h3-cursive">Merci à nos partenaires or</h3>
                <div class="partenaires_or_logos">
                    <?php
                        $logos_or = get_posts(array(
                            'post_type' => 'logo-or',
                            'numberposts' => -1
                        ));
                    ?>
                    <?php foreach ($logos_or as $logo_or):
                        $image = get_field('logo_partenaire_or', $logo_or->ID);
                        $image_url = esc_url($image['url']);
                        $image_alt = esc_attr($image['alt']);
                    ?>
                    <?php get_template_part(
                        "template-part/logo_partenaire_or", 
                        null,
                        array(
                            "image" => $image,
                            'img_url' => $image_url,
                            'alt' => $image_alt
                        )
                        ); ?>
                    <?php endforeach; ?>
                </div>
            </section>
            <section class="partenaires_argent">
                <h3 class="h3-cursive">Merci à nos partenaires argent</h3>
                <div class="partenaires_argent_logos">
                    <?php
                        $logos_argent = get_posts(array(
                            'post_type' => 'logo-argent',
                            'numberposts' => -1
                        ));
                    ?>
                    <?php foreach ($logos_argent as $logo_argent):
                        $image = get_field('logo_partenaire_argent', $logo_argent->ID);
                        $image_url = esc_url($image['url']);
                        $image_alt = esc_attr($image['alt']);
                    ?>
                    <?php get_template_part(
                        "template-part/logo_partenaire_argent", 
                        null,
                        array(
                            "image" => $image,
                            'img_url' => $image_url,
                            'alt' => $image_alt
                        )
                        ); ?>
                    <?php endforeach; ?>
                </div>
            </section>
            <section class="partenaires_bronze">
                <h3 class="h3-cursive">Merci à nos partenaires bronze</h3>
                <div class="partenaires_bronze_logos">
                <?php
                        $logos_bronze = get_posts(array(
                            'post_type' => 'logo-bronze',
                            'numberposts' => -1
                        ));
                    ?>
                    <?php foreach ($logos_bronze as $logo_bronze):
                        $image = get_field('logo_partenaire_bronze', $logo_bronze->ID);
                        $image_url = esc_url($image['url']);
                        $image_alt = esc_attr($image['alt']);
                    ?>
                    <?php get_template_part(
                        "template-part/logo_partenaire_bronze", 
                        null,
                        array(
                            "image" => $image,
                            'img_url' => $image_url,
                            'alt' => $image_alt
                        )
                        ); ?>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </main>

    <?php get_footer(); ?>