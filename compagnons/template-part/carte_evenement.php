<?php 
$args = wp_parse_args($args, array(
    "title" => '',
    "desc" => '',
    "date" => '',
    "jour" => '',
    "lieu" => '',
    "heure" => '',
    "prix" => '', 
    "billeterie" => '',
    "image_url" => '',
    "image_alt" => '',
    "discipline" => '',
    "free_option" => '',
    "familiale_option" => '',
    "data_date" => ''
));
?>

<div class="eventCard" tabindex="0">
    <div class="eventCard_container">
        <div class="eventCard_infoBox">
            <div class="eventCard_infoBox_date">
                <p class="eventCard_infoBox_date_day"><?php echo $args['jour']?></p>
                <p class="eventCard_infoBox_date_date"><?php echo $args['date']?></p>
            </div>
            <div class="eventCard_infoBox_info">
                <div class="eventCard_infoBox_info_container">
                    <div class="eventCard_infoBox_info_container_placeNPrice">
                        <p class="eventCard_infoBox_info_container_lieu"><?php echo $args['lieu']?></p>
                        <p class="eventCard_infoBox_info_container_placeNPrice_hour"><?php echo $args['heure']?> / <?php echo $args['prix']?></p>
                    </div>
                    <p  class="eventCard_infoBox_info_container_desc"><?php echo $args['desc']?></p>
                </div>
                <div class="eventCard_tagBox">
                    <p class="eventCard_tag_discipline hidden"><?php echo $args['discipline']?></p>
                    <p class="eventCard_tag_freeOption hidden"><?php echo $args['free_option']?></p>
                    <p class="eventCard_tag_familialeOption hidden"><?php echo $args['familiale_option']?></p>
                    <p class="eventCard_tag_dataDate hidden"><?php echo $args['data_date']?></p>
                </div>
                <div class="eventCard_infoBox_info_buttonContainer">
                    <a class="eventCard_link" href="<?php echo $args['billeterie']?>" target="_blank"><button class="eventCard_infoBox_info_button btn-link bg-white">Billetterie<span class="material-symbols-outlined eventCard_infoBox_info_button_icon">arrow_right_alt</span></button></a>
                </div>
            </div>
        </div>
        <div class="eventCard_photoBox">
            <img src="<?php echo $args['image_url']?>" alt="<?php echo $args['image_alt']?>">
        </div>
    </div>
    <div class="eventCard_titleBox">
        <p class="btn_default"><?php echo $args['title']?></p>
    </div>
</div>