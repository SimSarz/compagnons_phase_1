<?php
    $args = wp_parse_args($args, array(
        'img_url' => '',
        'alt' => ''
    ));
?>


<div>
    <img src="<?php echo $args['img_url']; ?>" alt="<?php echo $args['alt'];?>">
</div>