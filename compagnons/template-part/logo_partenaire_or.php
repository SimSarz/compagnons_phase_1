<?php
    $args = wp_parse_args($args, array(
        'img_url' => '',
        'alt' => ''
    ));
?>

<div class="logo_or">
    <img src="<?php echo $args['img_url']?>" alt="<?php echo $args['alt']?>">
</div>