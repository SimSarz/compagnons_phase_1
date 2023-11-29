<?php
    $args = wp_parse_args($args, array(
        'nom' => '',
        'titre' => ''
    ));
?>

<div class="conseil_admin_membre">
    <h3 class="h3"><?php echo $args['nom']; ?> </h3>
    <p class="textblock"><?php echo $args['titre']; ?></p>
</div>