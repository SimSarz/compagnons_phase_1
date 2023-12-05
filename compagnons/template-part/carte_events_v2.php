<?php 
$args = wp_parse_args($args, array(
    'titre' => '',
    'date' => '',
    'jour' => '',
    'mois' => '',
    'jour_semaine' => '',
    'heure' => '',
    'lieu' => '',
    'artiste' => '',
    'desc' => '',
    'img' => '',
    'alt' => '',
    'disciplines' => '',
    'gratuit' => '',
    'prix' => '',
    'familial' => ''
));
?>

<div class="carte">
    <div class="carte_infos">
        <div class="carte_infos_date">
            <p class="carte_infos_date_jour-semaine"><?php echo $args['jour_semaine']; ?></p>
            <p><span class="carte_infos_date_jour"><?php echo $args['jour']; ?></span> <span class="carte_infos_date_mois"><?php echo $args['mois'] ?></span></p>
        </div>
        <div class="carte_infos_hover">
            <p class="carte_infos_hover_lieu"><?php echo $args['lieu']; ?></p>
            <p class="carte_infos_hover_heure-prix">
                <?php echo $args['heure'];?> |   
                <?php if ($args['gratuit'] === null) {
                            $prix_string = $args['prix'] . '$';
                            echo $prix_string;
                        }else {
                            echo 'Gratuit';
                        }
                ?>
            </p> 
            <p class="carte_infos_hover_desc">
                <?php echo $args['desc']; ?>
            </p>
            <a class="carte_infos_hover_link" href=""><button class="carte_infos_hover_link_button"><span class="btn_texte">acheter des billets</span><span class="material-symbols-outlined">arrow_forward</span></button></a>
        </div>
    </div>
    <div class="carte_infos_titres">
            <p class="carte_infos_titres_titre"><?php echo $args['titre']; ?></p>
            <?php
                if (!is_null($args['artiste'])) {
                    echo '<p class="carte_infos_titres_artiste">' . esc_html($args['artiste']) . '</p>';
                }
            ?>
        </div>
    <div class="carte_img-container">
        <img class="carte_img-container_img" src="<?php echo $args['img']; ?>" alt="<?php echo $args['alt']; ?>">
    </div>
    <div class="carte_tags-container">
        <span id="artiste" class="carte_tag"><?php echo $args['artiste']; ?></span>
        <span id="disciplines" class="carte_tag"><?php $array = $args['disciplines'];
                                        $string = implode(' ', $array);
                                        echo $string; ?>
        </span>
        <span id="date" class="carte_tag"><?php echo $args['date']; ?></span>
        <span id="gratuit" class="carte_tag" data-value="<?php echo $args['gratuit'];?>"><?php echo $args['gratuit'];?></span>
        <span id="familial" class="carte_tag" data-value="<?php echo $args['familial'];?>"><?php echo $args['familial']; ?></span>
    </div>
</div>
