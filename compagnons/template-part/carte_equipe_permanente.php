<?php
    $args = wp_parse_args($args, array(
        "nom" => '',
        "poste" => '',
        "courriel" => '',
        "tel" => '',
        "img_url" => '',
        "alt" => '',
    ));
?>

<div class="membres_principaux_card">
    <img src="<?php echo $args['img_url']; ?>" alt="<?php echo $args['alt']; ?>">
    <h3 class="h3"><?php echo $args['nom']; ?></h3>
    <h4 class="h4"><?php echo $args['poste']; ?></h4>
    <p class="textblock"><?php echo $args['courriel']; ?></p>
    <p class="textblock"><?php echo $args['tel']; ?></p>
</div>