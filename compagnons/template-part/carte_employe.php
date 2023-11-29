<?php 
    $args = wp_parse_args(
        $args,
        array(
            "nom" => '',
            'img_url' => '',
            'alt' => '',
            'poste' => ''
        )
    )


?>

<div class="equipe_card">
    <img class="equipe_card_photo" src="<?php echo $args['img_url']; ?>" alt="<?php echo $args['alt'];?>">
    <h3 class="h3-cursive"> <?php echo $args['nom']; ?> </h3>
    <h4 class="h4"><?php echo $args['poste']; ?></h4>
</div>